<?php
        ini_set('display_errors',1);
        error_reporting(E_ALL);

        if ($_FILES["avatar"] != "" && $_FILES["avatar"] != NULL){
            $file = addslashes(file_get_contents($_FILES["avatar"]["tmp_name"]));
            $type = $_FILES["avatar"]["name"];
            $uploadOk = 1;
            $imageFileType = explode(".", $type);

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
                if (file_exists($file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
    
                // Check file size
                if ($_FILES["avatar"]["size"] > 100000) {
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

            $sql = "INSERT INTO users(loginName, password, avatar, email) VALUES ('".$_POST["name"]."', '".$_POST["password"]."', '".$file."', '".$_POST["email"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "New account created successfully<br />You can log in from <a href='login.php'>here</a>.";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         
      ?>