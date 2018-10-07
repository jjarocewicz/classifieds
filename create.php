<?php
        ini_set('display_errors',1);
        error_reporting(E_ALL);

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // var_dump($imageFileType);
        // die();

         if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["avatar"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $servername = "108.179.220.92";
            $username = "dbljtwon_root";
            $password = "j6T2&^7eR7";
            $mydb = "dbljtwon_php";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $mydb);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO users(loginName, password, email)VALUES ('".$_POST["name"]."', '".$_POST["password"]."', '".$_POST["email"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "New account created successfully<br />You can log in from <a href='login.php'>here</a>.";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>