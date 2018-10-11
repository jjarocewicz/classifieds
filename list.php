<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Baker Classifieds - List Item</title>
</head>

<body>
<h1>List Item to Sell</h1>
</body>
</html>

<?php
require_once('connection.php'); 

// create short variable names
$title=$_POST['title'];
$description=$_POST['description'];
// $image=$_POST['image'];
$category=$_POST['category'];
$price=$_POST['price'];

if(!$title || !$description || !$category || !$price) {
    echo "You have not entered all the required details.<br />"."Please go back and try again.";
    exit;
}

if (!get_magic_quotes_gpc()) {
    $title=addslashes($title);
    $description=addslashes($description);
    //$image=addslashes($image);
    $category=addslashes($category);
    $price=addslashes($price);
}

   $servername = "108.179.220.92";
   $username = "dbljtwon_root";
   $password = "j6T2&^7eR7";
   $mydb = "dbljtwon_php";

   $mysqli = new mysqli($servername, $username, $password, $mydb);


// Check connection
    if (mysqli_connect_error()) {
    printf("Connection to the quote database failed, please try again: " . mysqli_connect_error());
    exit();
    } 

    $query = "insert into $mydb values ('".$title."', '".$description."', '".$category."', '".$price."')";
    $result=$link->query($query);

    if ($result){
        echo $link->affected_rows." Your item is listed.";
    }else{
        echo "An error has occurred. Your item is not listed";
    }
	
	echo var_dump($title)."<br>";
	echo var_dump($description)."<br>";
	echo var_dump($category)."<br>";
	echo var_dump($price)."<br>";
    $link->close();

?>
