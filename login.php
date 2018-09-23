<?php
   ob_start();
   session_start();
?>

<html lang = "en">
   
   <head>
      <title>Baker Classifieds Login</title>
      <link href = "lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel = "stylesheet">
      <link href="css/styles.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
   </head>
	
   <body>
      
      <h3>Login to Baker Classifieds</h3> 
      <img src="images/bc-logo_2017-1502808997-4638.jpg" alt="logo" class="img-responsive" id="logo">
            
      <div class = "container" id="login_fields">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <label for = "username">Username:</label>
            <input type = "text" class = "form-control" 
               name = "username"  
               required autofocus></br>
               <label for = "password">Password:</label>
            <input type = "password" class = "form-control"
               name = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         <!-- Click here to clean <a href = "logout.php" tite = "Logout">Session. -->
         
      </div> 

      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'test' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'test';
                  
                  header('Location: index.php'); 
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
   </body>
</html>