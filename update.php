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
        } 

        $uName = $_POST["username"];
        $pwd = $_POST["password"];
        $email = $_POST["email"];
        $id = $_SESSION["id"];

        $sql = "UPDATE `users` SET loginName = '$uName', password = '$pwd', avatar = '$file', email = '$email' WHERE idUsers = $id";

        if(mysqli_query($conn, $sql)){
            echo ('<div>');
            echo ('<h3>Your account has been updated.</h3>');            
        }

        if ($stmt = $conn->prepare("SELECT * FROM users WHERE idUsers = $id;")) {
            $stmt->execute();
            $stmt->bind_result($idUser, $loginName, $pword, $avatar, $emailAddr);
            while ($stmt->fetch()) {
                echo ('<p class="underline">Username: ' . $loginName . '</p>
                    <p class="underline">Password: ' . $pword . '</p>
                    <p class="underline">Avatar:</p>
                    <img src="data:image/jpeg;base64,' . base64_encode($avatar) . '" height="100" width="100" class="img-thumbnail" />
                    <p class="underline">Email address:' . $emailAddr . '</p>           
                </div>');
            } 
        } else {
            echo ('There\'s been an error, please try updating your account again' . mysqli_error($conn));
        }
    mysqli_close($conn);
?>
</div>
</body>
</html>
