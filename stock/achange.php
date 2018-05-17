<?php
	session_start();
	$user=$_SESSION["user"];
	if ($_POST["sub"]=="Cancel") {
		header("Location: ".$user.".php");die();
	}
//get data using post
	$op=$_POST["op"];
	$np=$_POST["np"];
	$cp=$_POST["cp"];
//make connection to database and select stock database
	mysql_connect("localhost", "root", "") or die("Failed to connect :".mysql_error());
	mysql_select_db("stock");
//declare SQL Query
	$sqla="select * from login where username='".$user."'";
	$sqlb="update login set password='".$np."' where username='".$user."'";
//check given old password is right or not
	$temp=mysql_query($sqla) or die("Failed to connect :".mysql_error());
	$pass=mysql_fetch_array($temp);
	if ($np==$cp) {
		if ($pass["password"]==$op) {
			$temp=mysql_query($sqlb) or die("Query Failed :".mysql_error());
			echo "<h1>Password is changed<h1>";
			header("Location: ".$user.".php");die();
		}else{echo "<h1>Your entered password is wrong</h1>";}
	}else{echo "<h1>Password is not same</h1>";}
 ?>