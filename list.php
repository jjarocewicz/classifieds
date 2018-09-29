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
$link = mysqli_connect('koetze01.com', 'koetzeze_root', 'password123', 'koetzeze_classifieds');)

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo "SUCCESS!!!";
