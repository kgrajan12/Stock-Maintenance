<!DOCTYPE html>
<html>
<head>
	<title>Change Password...</title>
	<link rel="stylesheet" type="text/css" href="product/pro/sm.css">
</head>
<body>
	<h1>Change your Password</h1>
	<div id="aform">
		<form method="POST" action="achange.php">
			<p>
				<label>Old Password :</label>
				<input type="Password" name="op">
			</p><p>
				<label>New Password :</label>
				<input type="Password" name="np">
			</p><p>
				<label>Confirm Password :</label>
				<input type="Password" name="cp">
			</p><p>
				<input type="submit" id="submit" value="Submit" name="sub">
				<input type="submit" id="submit" value="Cancel" name="sub">
			</p>
		</form>
	</div>
</body>
</html>