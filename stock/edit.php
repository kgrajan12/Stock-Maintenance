<!DOCTYPE html>
<html>
<head>
	<title>Edit Main Products...</title>
	<link rel="stylesheet" type="text/css" href="product/pro/sm.css">
</head>
<body>
	<div id='mar'><marquee>Stock Maintenance</marquee></div><br><br>
	<div id="aform">
		<form method="POST" action="eedit.php">
			<p>
				<label>Which item do you want to edit?</label><br><br><label>Sl.No :</label>
				<input type="text" name="rad">
			</p><p>
				<label>New value :</label>
				<input type="text" name="ans">
			</p><p>
			<input id="submit" type="submit" name="sub" value="Edit">
			<input id="submit" type="submit" name="sub" value="Cancel">
			</p>
		</form>
	</div>
</body>
</html>