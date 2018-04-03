<!DOCTYPE html>
<html>
<head>
	<title>Add Purticulars</title>
	<link rel="stylesheet" type="text/css" href="product/pro/sm.css">
</head>
<body>
	<div id="aform">
		<form method="POST"  action="upload.php" style="width:400px;">
			<p>
				<label>S.No :</label>
				<input type="text" name="s_no">
			</p>
			<p>
				<label>Item Name :</label>
				<input type="text" name="item">
			</p>
			<p>
				<label>Opening Stock :</label>
				<input type="text" name="balance_stock">
			</p>
			<p>
				<label>Unit :</label>
				<input type="text" name="unit">
			</p>
			<p>
				<input id="submit" type="submit" name="sub" value="Submit">
				<input id="submit" type="submit" name="sub" value="Cancel"> 
			</p>
		</form>
	</div>
</body>
</html>