<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$dbhost = koetze/WEB3250/Final_Project; 
$dbuser = koetzeze_kelly;
$dbpass = sesame;
$dbname = koetzeze_classifieds;

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//if not connected, echo error, otherwise echo connected message. 
if (!$conn) { 
     die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
} 
else {
     echo 'Connected!' . mysqli_get_host_info($conn); 
} 
mysqli_close($conn); //closes the connection
?>