<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baker Classifieds - Your Account</title>
    <link href = "lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel = "stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <?php
        include "nav.php";
        session_start();
        ?>
        <div class="container">
            <?php
                if (isset($_SESSION['id'])){

                    $username = $_SESSION['username'];
                    $password = $_SESSION['password'];
                    $avatar = $_SESSION['avatar'];
                    $email = $_SESSION['email'];
                    $id = $_SESSION['id'];
                    
                                echo(
                                    '<form class = "form-account col-sm-6 col-sm-offset-3" role = "form" action = "update.php" method = "post">
                                            <h4 class = "form-account-heading"></h4>
                                            <label for = "username">Username:</label>
                                            <input type = "text" class = "form-control" 
                                            name = "username"  
                                            required autofocus value=' . $username . '><br />
                                            <label for = "password">Password:</label>
                                            <input type = "text" class = "form-control"
                                            name = "password" required value=' . $password . '><br />
                                            <label for="avatar">Avatar image:</label>');
                                            if ($avatar != ''){
                                                echo('<img src="' . $avatar . '" alt="avatar" />');
                                            } else {
                                                echo('<p>You currently have no avatar, you can upload one by clicking the button below.</p>
                                                <br />
                                                <input type="file" name="avatar" id="avatar"><br />');
                                            }
                                            echo(
                                                '<label for="email">Email address:</label>
                                                <input type="email" class="form-control" name="email" value=' . $email . '><br />
                                                <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                                            name = "update">Update</button>
                                    </form>');

                    };
            ?>
        </div>
</body>
</html>
