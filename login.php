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
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	
	if($count==1){
		echo true;
		$_SESSION['login_user'] = $row['uid'];
		
	}
	else{
		echo false;
	}
}
?>
	