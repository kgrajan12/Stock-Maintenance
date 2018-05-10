<!DOCTYPE html>
<html>
<head>
	<title>Edit Details...</title>
	<link rel="stylesheet" type="text/css" href="sm.css">
</head>
<body>
	<div id='mar'><marquee>Stock Maintenance</marquee></div>
	<h1><?php echo $_COOKIE["item"]; ?></h1>
	<div id="aform">
		<form method="POST" action="uedit.php">
			<p>
				<label>Old balence stock</label><br>
				<input type="text" name="ob">
			</p><p>
				<label>Which sl.no do you want to edit?</label><br>
				<input type="text" name="rad">
			</p><p>
				<label>Supplier/Customer :</label><br>
				<input type="text" name="cust">
			</p><p>
				<label>Purchase Stock :</label><br>
				<input type="text" name="pur">
			</p><p>
				<label>Selled Stock :</label><br>
				<input type="text" name="ss">
			</p><p>
				<input id="submit" type="submit" name="sub" value="Edit">
				<input id="submit" type="submit" name="sub" value="Cancel">
			</p>
		</form>
	</div>
</body>
</html>