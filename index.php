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
?>
<div class="container">
    <h4>Items for sale:</h4>
    <?php
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

        if ($stmt = $mysqli->prepare("SELECT `products`.`idProducts`, `products`.`title`, `products`.`description`, `products`.`image`, `category`.`categoryName`, `products`.`price`, `products`.`sold` FROM `products` INNER JOIN `category` ON `products`.`category` = `category`.`idCategory` ORDER BY `products`.`idProducts` DESC")) {
                $stmt->execute();
                $stmt->bind_result($id, $title, $description, $image, $category, $price, $sold);
                while ($stmt->fetch()) {
                    if ($sold === 0){
                    echo '<div class="media">
                            <div class="media-left">
                            <img src="data:image/jpeg;base64,' . base64_encode($image) . '" height="100" width="100" class="img-thumbnail" />
                            </div>
                            <div class="media-body">
                            <a href="#"><h4 class="media-heading"><a href="#">' . $title . '</h4></a>
                            <p>' . $description . '</p>
                            <em>' . $category . '</em>
                            <br />
                            <p>$' . $price . '.00</p>
                            </div>
                        </div>';
                }
            } 
            $stmt->close();
        }
        $mysqli->close();
    ?>
    </div>
</body>
</html>