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
<?php
        ini_set('display_errors',1);
        error_reporting(E_ALL);

        $target_dir = "public_html/classifieds/uploads/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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
        }

        $uName = $_POST["username"];
        $pwd = $_POST["password"];
        $avatar = $_POST["avatar"];
        $email = $_POST["email"];
        $id = $_SESSION["id"];
        
        // Prod
        $servername = "108.179.220.92";
        $username = "dbljtwon_root";
        $password = "j6T2&^7eR7";
        $mydb = "dbljtwon_php";

        $conn = mysqli_connect($servername, $username, $password, $mydb);

        // Check connection
        if (! $conn ) {
            printf("Connection to the database failed, please try again: " . mysqli_error());
            exit();
        } 

        $sql = "UPDATE `users` SET loginName = '$uName', password = '$pwd', avatar = '$avatar', email = '$email' WHERE idUsers = $id";

        if(mysqli_query($conn, $sql)){
            echo ('<div>
            <h3>Your account has been updated.</h3>
            <p class="underline">Username: ' . $uName . '</p>
            <p class="underline">Password: ' . $pwd . '</p>
            <img src="public_html/classifieds/uploads/'. $avatar . '" alt="avatar" />
            <p class="underline">Email address:' . $email . '</p>           
            </div>');
        } else {
            echo ('There\'s been an error, please try updating your account again' . mysqli_error($conn));
        }

        mysqli_close($conn);
?>
</div>
</body>
</html>
