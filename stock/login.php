<!DOCTYPE html>
<html>
<head>
	<title>Login Page...</title>
	<link rel="stylesheet" type="text/css" href="product/pro/sm.css">
</head>
<body>
	<div id="aform">
		<form method="POST" action="process.php">
			<p>
				<label>Username :</label>
				<input type="text" name="username">
			</p>
			<p>
				<label>Password :</label>
				<input type="Password" name="password">
			</p>
			<p>
				<input id="submit" type="submit" name="sub" value="Login" style="margin-left: 210px;">
			</p>
			<a href="forget.php">Forget password?</a>
		</form>
	</div>
</body>
</html>