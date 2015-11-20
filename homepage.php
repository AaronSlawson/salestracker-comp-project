<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sales Tracker &trade;</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}
?>
<h1 align="center" id="home-header">You made it to the homepage</h1>


<a href="logout.php"><p id="body-maintext" align="center">Logout</p></a>


</body>
</html>