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
<?php
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        
        // Prod
        $servername = "108.179.220.92";
        $username = "dbljtwon_root";
        $password = "j6T2&^7eR7";
        $mydb = "dbljtwon_php";

        $conn = mysqli_connect($servername, $username, $password, $mydb);

        // Check connection
        if (! $conn ) {
            printf("Connection to the quote database failed, please try again: " . mysqli_error());
            exit();
        } 

        $sql = "UPDATE users SET loginName = '".$_POST["username"]."', '".$_POST["password"]."', '".$_POST["avatar"]."', '".$_POST["email"]."'";
        
        if(mysqli_query($conn, $sql)){
            echo ('Your account has been updated.');
        } else {
            echo ('There\'s been an error, please try updating your account again' . mysqli_error($conn));
        }

        mysqli_close($conn);
?>
</div>
</body>
</html>