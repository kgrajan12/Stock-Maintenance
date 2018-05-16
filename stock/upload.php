<?php
	$sno=$_POST["s_no"];
	$item=$_POST["item"];
	$bs=$_POST["balance_stock"];
	$u=$_POST["unit"];
session_start();
$var=$_SESSION["user"];

if($_POST["sub"]=="Cancel"){
	header("Location: ".$var.".php");die();
}

	mysql_connect("localhost","root","");
	mysql_select_db("stock");

	$resut=mysql_query("INSERT INTO `stock`.`home` (`s_no`,`item`, `balance_stock`, `unit`) VALUES ('".$sno."','".$item."', '".$bs."', '".$u."');
		")
		or die("Failed to query database".mysql_error());
		mysql_query("CREATE TABLE `stock`.`".$item."` (`s_no` INT(5) NOT NULL, `particulars` VARCHAR(200) NOT NULL, `pur_stock` INT(5) NOT NULL,  `sale_stock` INT(5) NOT NULL, `balance_stock` INT(5) NOT NULL, `unit` VARCHAR(10) NOT NULL) ENGINE = InnoDB;") or die("Failed to query database".mysql_error());
		mysql_query("ALTER TABLE `".$item."` ADD PRIMARY KEY(`s_no`);") or die("Failed to query database".mysql_error());

	echo "Add Successfully!!!</br>";
	echo "<form action=admin.php><input type='submit' value='Back to home'></form>";
	#i am go to create a file in this
	$file=fopen("product/".$item.".php", "w") or die("Unable to open file try again...");
	$txt="

	<!DOCTYPE html>
<?php
session_start();
setcookie(\"item\", \"".$item."\", time() + (86400 * 30), \"/\"); // 86400 = 1 day
\$var=\"../\".\$_SESSION[\"user\"].\".php\";
?>
<html>
<head>
	<title>Welcome Admin</title>
	<link rel='stylesheet' type='text/css' href='pro/sm.css'>
</head>
<body><div id='mar'>
	<marquee>Stock Maintenance</marquee></div>
	<h1><?php echo \"".$item."\"; ?></h1>
	<div class='menu' align='right'>
		<a href=<?php echo \$var; ?>>Home</a>
		<a href='pro/aadd.php'>Add </a>|
		<a href='pro/aedit.php'> Edit </a>
	</div>
	<div id='table'>
		<table border='1'>
			<tr>
				<th>S.No</th><th>Particulars</th><th>Purchase Stock</th><th>Sale Stock</th><th>Balance stock</th><th>Unit</th>
			</tr>
			<?php
\$servername = \"localhost\";
\$username = \"root\";
\$password = \"\";
\$dbname = \"stock\";

// Create connection
\$conn = new mysqli(\$servername, \$username, \$password, \$dbname);
// Check connection
if (\$conn->connect_error) {
    die(\"Connection failed: \" . \$conn->connect_error);
}

\$sql = \"SELECT s_no, particulars, pur_stock, sale_stock, balance_stock, unit FROM ".$item."\";
\$result = \$conn->query(\$sql);

if (\$result->num_rows > 0) {
    // output data of each row
    while(\$row = \$result->fetch_assoc()) {
        echo \"<tr><td>\". \$row[\"s_no\"].\"</td><td>\".\$row[\"particulars\"].\"</td><td>\".\$row[\"pur_stock\"].\"</td><td>\".\$row[\"sale_stock\"].\"</td><td>\" . \$row[\"balance_stock\"] . \"</td><td>\" . \$row[\"unit\"] . \"</td></tr>\";
    }
} else {
    echo \"0 results\";
}

\$conn->close();
?>
		</table>
	</div>
</body>
</html>

	";
	fwrite($file, $txt);
	fclose($file);
	echo "File also created...";
	header("Location: admin.php");
 ?>