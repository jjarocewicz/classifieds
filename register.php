<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baker Classifieds - User registration</title>
    <link href = "lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel = "stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<?php
    include "nav.php";
    ini_set('display_errors',1);
    error_reporting(E_ALL);
?>
<div class="container">
         <h3>Register a new account:</h3>
         <form action = "create.php" method = "post" class="col-sm-6 col-sm-offset-3" enctype="multipart/form-data">
            <label for="name">Username:</label>
            <input type = "text" name = "name" id = "name" class="form-control" required />
            <br />
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required />
            <br />
            <label for="avatar">Upload an avatar:</label>
            <p>(optional)</p>
            <input type="file" name="avatar" id="avatar">
            <br />
            <label for="email">Email address:</label>
            <input type="email" name="email" id="email" class="form-control" required />
            <br />
            <input type = "submit" value ="Submit" name = "submit" class="form-control btn btn-primary" />
            <br />
         </form>
      </div>    
</body>
</html>