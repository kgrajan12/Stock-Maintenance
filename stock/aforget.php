<?php
	$un=$_POST["un"];
//check user given submit or cancel
	if ($_POST["sub"]=="Cancel") {
		header("Location: login.php"); die();
	}
	if ($un=="admin") {
		die("<h1>Access Denited</h1>");
	}
//connect database
	mysql_connect("localhost","root","");
	mysql_select_db("stock");
//Check this is duplicate or not
	$e="select * from pass where username='".$un."'";
	$f=mysql_query($e);
	$g=mysql_fetch_array($f);
	if ($g["username"]==$un) {
		echo "<h1>You have already sent request</h1>";
		header("Location: login.php"); die();
	}
//Query to database
	$a="select * from login where username='".$un."'";
	mysql_query($a) or die("<h1>Username is wrong</h1>");
	$c=mt_rand() % 1000000;
	$b="update login set password='".$c."' where username='".$un."'";
	$d="insert into pass (username, password) values ('".$un."', '".$c."')";
	mysql_query($d) or die("<h1>Insertion Failed</h1>".mysql_error());
	mysql_query($b) or die("<h1>Updation Failed</h1>".mysql_error());

	echo "Your request is send to Admin recive password from owner";
	header("Location: login.php"); die();
 ?>