/**
 * Created by PhpStorm.
 * User: kelly
 * Date: 9/23/2018
 * Time: 12:39 PM
 */
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta charset="UTF-8">
    <title>Baker Classifieds - List Item</title>
</head>

<body>
<h1>List Item to Sell</h1>
</body>
</html>

<?php
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
else{
    echo "SUCCESS!!!";
}
?>