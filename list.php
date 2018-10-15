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
<h3>List Item to Sell</h3>

<?php

$servername = "localhost"; //"108.179.220.92";
$username = "root"; //"dbljtwon_root";
$password = ""; //"j6T2&^7eR7";
$mydb = "dbljtwon_php";

$dbconnect=mysqli_connect($servername, $username, $password, $mydb);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageToUpload"] ["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    if(isset($_POST['submit'])) {
      $title=$_POST['title'];
      $description=$_POST['description'];

      $check = getimagesize($_FILES["imageToUpload"]["temp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
          $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
          echo "The file " . basename( $_FILES["imageToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

      $category=$_POST['category'];
      $price=$_POST['price'];


      $query = "INSERT INTO products (title, description, category, price) VALUES ('$title', '$description', '$category', '$price')";

      if(!mysqli_query($dbconnect, $query)) {
          echo "<p align='center'><font color=red>An error occurred when submitting your listing</font></p>"; //('An error occurred when submitting your listing');
        } else {
          echo "<p align='center'><font color=blue>You have successfully listed your item!</font></p>";
        }

?>

</body>
</html>
