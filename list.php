<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

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
      //require_once('connection.php');
      include "nav.php";
  ?>
<h1>List Item to Sell</h1>
</body>
</html>

<?php
session_start();

$servername = "localhost"; //"108.179.220.92";
$username = "root"; //"dbljtwon_root";
$password = ""; //"j6T2&^7eR7";
$mydb = "dbljtwon_php";

$dbconnect=mysqli_connect($servername, $username, $password, $mydb);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

    if(isset($_POST['submit'])) {
      $title=$_POST['title'];
      $description=$_POST['description'];
      // $image=$_POST['image'];
      $category=$_POST['category'];
      $price=$_POST['price'];


      $query = "INSERT INTO products (title, description, category, price) VALUES ('$title', '$description', '$category', '$price')";

      if(!mysqli_query($dbconnect, $query)) {
          die('An error occurred when submitting your listing');
        } else {
          echo "You have successfully listed your item!";
        }

        echo var_dump($dbconnect);
        echo var_dump($query);
    }
?>
