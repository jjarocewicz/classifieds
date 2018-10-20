<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baker Classifieds</title>
    <link href = "lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel = "stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<?php
    include "nav.php";
    ob_start();
    session_start();
?>
<div class="container">
    <div class="row">
        <h4 class="col-sm-6">Items for sale:</h4>
    </div>
    <div class="row">
    <?php

        ini_set('display_errors',1);
        error_reporting(E_ALL);

        // Prod
        $servername = "108.179.220.92";
        $username = "dbljtwon_root";
        $password = "j6T2&^7eR7";
        $mydb = "dbljtwon_php";

        $mysqli = new mysqli($servername, $username, $password, $mydb);

        // Check connection
        if (mysqli_connect_error()) {
            printf("Connection to the database failed, please try again: " . mysqli_connect_error());
            exit();
        } 
        
        // set page limit and page number
        $limit = 5;  
        if (isset($_GET["page"])) { 
            $page = $_GET["page"]; 
        } else { 
            $page = 1; 
        };  

        $start_from = ($page-1) * $limit;    

        if ($stmt = $mysqli->prepare("SELECT `products`.`idProducts`, `products`.`title`, `products`.`description`, `products`.`image`, `category`.`categoryName`, `products`.`price`, `products`.`sold` FROM `products` INNER JOIN `category` ON `products`.`category` = `category`.`idCategory` ORDER BY `products`.`idProducts` DESC LIMIT $start_from, $limit")) {
                $stmt->execute();
                $stmt->bind_result($id, $title, $description, $image, $category, $price, $sold);
                while ($stmt->fetch()) {
                    if ($sold === 0){
                    echo '<div class="media">
                            <div class="media-left">';
                            if ($image != NULL){
                                echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" height="100" width="100" class="img-thumbnail" />';
                            } else {
                                echo '<img src="images/No_Image_Available.png" height="100" width="100" class="img-thumbnail" />';
                            }
                            echo '</div>
                            <div class="media-body">
                                <a href="#"><h4 class="media-heading"><a href="#">' . $title . '</h4></a>
                                <p>' . $description . '</p>
                                <em>' . $category . '</em>
                                <br />
                                <p>$' . $price . '.00</p>
                            </div>
                        </div>
                    ';
                } 
            } 
            $stmt->close();
        }
            $conn = mysqli_connect($servername, $username, $password, $mydb);
            $sql = "SELECT COUNT(idProducts) FROM `products` where sold = 0";

            $rs_result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_row($rs_result);  
            $total_records = $row[0];  
            $total_pages = ceil($total_records / $limit);  
                    echo('<nav aria-label="Page navigation" style="float: right;">
                            <ul class="pagination">');
                    $pagLink = "";                       
                    for ($i=1; $i<=$total_pages; $i++) { 
                    if($i==$page)  
                        $pagLink .= "<li class='active'>
                                        <a href='index.php?page= ".$i."'>".$i."</a>
                                    </li>"; 
                    else
                        $pagLink .= "<li>
                                        <a href='index.php?page=".$i."'>".$i."</a>
                                    </li>";   
                    };   
                    echo $pagLink . '</ul>
                            </nav>';                    
        $mysqli->close();
    ?>
    </div>
</body>
</html>