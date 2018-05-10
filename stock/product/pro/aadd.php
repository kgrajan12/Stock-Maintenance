<!DOCTYPE html>
<html>
<head>
	<title>Add Purticulars</title>
	<link rel="stylesheet" type="text/css" href="sm.css">
</head>
<body>
	<div id="aform">
		<form method="POST"  action="aupload.php">
			<p>
				<label>S.No :</label>
				<input type="text" name="sno">
			</p>
			<p>
				<label>Supplier / Customer :</label>
				<input type="text" name="par">
			</p>
			<p>
				<label>Purchase Stock :</label>
				<input type="text" name="pur">
			</p>
			<p>
				<label>Sale Stock :</label>
				<input type="text" name="sale">
			</p>
			<p>
				<input id="submit" type="submit" name="sub" value="Submit">
				<input id="submit" type="submit" name="sub" value="Cancel"> 
			</p>
		</form>
	</div>
</body>
</html>