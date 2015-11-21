<?php
require_once("dbconnection.php");
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$result = $dbh->prepare("SELECT uid FROM users WHERE email = :email and password = :password");
	$result->bindParam(":email", $email);
	$result->bindParam(":password", $password);
	$result->execute();
	$count = $result->rowCount();
	$row = $result->fetch(PDO::FETCH_ASSOC);
	
	if($count==1){
		echo true;
		$_SESSION['login_user'] = $row['uid'];
		
	}
	else{
		echo false;
	}
}
?>
	