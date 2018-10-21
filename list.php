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

ini_set('display_errors',1);
        error_reporting(E_ALL);

<<<<<<< HEAD
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $type = $_FILES["image"]["name"];
        $uploadOk = 1;
        $imageFileType = explode(".", $type);

         if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["image"]["size"] > 100000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType[1] != "jpg" && $imageFileType[1] != "png" && $imageFileType[1] != "jpeg"
            && $imageFileType[1] != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";

            // if everything is ok, try to upload file
            // } else {
            //     if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $file)) {
            //         echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
            //     } else {
            //         echo "Sorry, there was an error uploading your file.";
            //     }
            }
        }

=======
        if ($_FILES["image"] != "" && $_FILES["image"] != NULL){
            $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $type = $_FILES["image"]["name"];
            $uploadOk = 1;
            $imageFileType = explode(".", $type);

            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
    
                // Check if file already exists
                if (file_exists($file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
    
                // Check file size
                if ($_FILES["image"]["size"] > 100000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
    
                // Allow certain file formats
                if($imageFileType[1] != "jpg" && $imageFileType[1] != "png" && $imageFileType[1] != "jpeg"
                && $imageFileType[1] != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
    
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                }
            }
        }           
        
>>>>>>> ee066e985e809852d0d3f2caf05eeb48163d06db
        // Prod
        $servername = "108.179.220.92";
        $username = "dbljtwon_root";
        $password = "j6T2&^7eR7";
        $mydb = "dbljtwon_php";

        $conn = new mysqli($servername, $username, $password, $mydb);

        // Check connection
        if (! $conn ) {
            printf("Connection to the database failed, please try again: " . mysqli_error());
            exit();
<<<<<<< HEAD
        }


=======
        } 
    
>>>>>>> ee066e985e809852d0d3f2caf05eeb48163d06db
      $category=$_POST['category'];
      $price=$_POST['price'];
      $title = $_POST['title'];
      $description = $_POST['description'];


      $query = "INSERT INTO products (title, description, image, category, price) VALUES ('$title', '$description', '$file', '$category', '$price')";


      if(mysqli_query($conn, $query)) {
          echo "<p align='center'><font color=blue>You have successfully listed your item!</font></p>";
        } else {
            echo "<p align='center'><font color=red>An error occurred when submitting your listing</font></p>";
        }

?>

</body>
</html>
