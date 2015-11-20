<?php
require_once("dbinfo.php");
try{
	
	$dbh = new PDO($dsn, $mysql_user, $mysql_password);
}
catch (PDOException $e){
	echo "Connection error: " . $e->getMessage();
}
?>
