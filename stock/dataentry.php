<!DOCTYPE html>
<html>
<head>
	<title>Welcome Data Entry clerk</title>
	<link rel="stylesheet" type="text/css" href="product/pro/sm.css">
</head>
<body>
	<marquee id='mar'>Stock Maintenance</marquee>
	<h1>Item Master</h1>
	<div class="menu" align="right">
		<a href="change.php"> Change Password </a>|
		<a href="login.php"> Sign Out</a>
	</div>
	<div id="table">
		<table border="1">
			<tr>
				<th>S.No</th><th>Item</th><th>Balance stock</th><th>Unit</th>
			</tr>
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT s_no, item, balance_stock, unit FROM home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["s_no"]."</td><td><a href='product/".$row["item"].".php'>". $row["item"]. "</a></td><td>" . $row["balance_stock"] . "</td><td>" . $row["unit"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
		</table>
	</div>
</body>
</html>