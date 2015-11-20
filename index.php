<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sales Tracker &trade;</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>


<div align="center" id="login-form">
	<h1 id="login-header">Sign in to SalesTracker</h1>
	<form method="post">																<!-- using post so the data isn't included in the url, protection from checking browser history -->
		<input id="email" type="text" name="email" placeholder="E-mail Address"><br />				<!-- email address entry -->
		<input id="password" type="password" name="password" placeholder="Password"><br />			<!--password entry -->
		<input id="login" type="submit" value="Log in">	<br />										<!-- login button -->
        <span style="color:red" class="errormess"></span>											<!-- error message wrapper for ajax manipulation -->
	</form>
</div>










<script src="ajaxlogin.js"></script>
</body>
</html>