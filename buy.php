<!DOCTYPE html>
<html lang="en" >

    <head>
        <title>Baker Classifieds</title>
        <link href = "lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel = "stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </head>

<body>
  <?php
      include "nav.php";
  ?>
    <h3>Baker Classifieds - Buy Item</h3>

    <?php
        $servername = "localhost"; //"108.179.220.92";
        $username = "root"; //"dbljtwon_root";
        $password = ""; //"j6T2&^7eR7";
        $mydb = "dbljtwon_php";
        $mysqli = mysqli_connect($servername, $username, $password, $mydb);
        if ($mysqli->connect_error) {
          die("Database connection failed: " . $dbconnect->connect_error);
        }
        if(isset($_GET['idProducts']))
        {
          $item_id = $_GET['idProducts'];
          $query = mysqli_query($mysqli, "SELECT * FROM products WHERE idProducts=$item_id");
          if(mysqli_num_rows($query) !=0)
          {
            while($row = mysqli_fetch_array($query))
            {
              echo '<p>Title: '. $_GET["title"] .'</p>
              <span>Item: '.$_GET["idProducts"].'</span><br>
              <span>Description: '.$_GET["description"].'</span><br>
              <br>
              <span>'.$_GET["image"].'</span><br>
              <span>Category: '.$_GET["category"].'</span><br>
              <span>Price: '.$_GET["price"].'</span><br>';
            }
          }else {
              echo "Sorry - Cannot locate item in database.";
            }
          }
      ?>

  </body>
</html>
