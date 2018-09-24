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

        // Local
        // $servername="127.0.0.1";
        // $port=3307;
        // $username="root";
        // $password="root";
        // $mydb="classifieds";

        // $mysqli = new mysqli($servername, $username, $password, $port, $mydb);

        // Check connection
        if (mysqli_connect_error()) {
            printf("Connection to the quote database failed, please try again: " . mysqli_connect_error());
            exit();
        } 

        if ($stmt = $mysqli->prepare("SELECT * FROM products;")) {
                $stmt->execute();
                $stmt->bind_result($id, $title, $description, $image, $category, $price, $sold);
                while ($stmt->fetch()) {
                    echo "<div class='media'>
                            <div class='media-left'>
                            <a href='#'>
                                <img class='media-object' src='" . $image . "alt='product for sale'>
                            </a>
                            </div>
                            <div class='media-body'>
                            <h4 class='media-heading'><a href='#'>" . $title . "</a></h4>
                            <p>" . $description . "</p>
                            <em>" . $category . "</em>
                            <br />
                            <p>$" . $price . ".00</p>
                            </div>
                        </div>";
                }
            $stmt->close();
        }
        $mysqli->close();
    ?>
    </div>
</body>
</html>