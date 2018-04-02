<?php
	session_start();
	$user=$_POST["username"];
	$pass=$_POST["password"];
	mysql_connect("localhost","root","");
	mysql_select_db("stock");
	$resut=mysql_query("select * from login where username='$user' and password='$pass'")
		or die("Failed to query database".mysql_error());
	$row=mysql_fetch_array($resut);
	if($row["username"]==$user && $row["password"]=$pass){
		if($user=='admin'){
	   			header( "Location: admin.php" );
	   			$_SESSION["user"]="admin"; die;
		}
		elseif ($user=='supervisor') {
	   			header( "Location: supervisor.php" );
	   			$_SESSION["user"]="supervisor"; die;
		}
		elseif ($user=='dataentry') {
	   			header( "Location: dataentry.php" );
	   			$_SESSION["user"]="dataentry"; die;
		}
	}else{
		echo "<h1>Failed to login...</h1>";
		echo "<form action='login.php'><input type='submit' value='Re-Login'></form>";
	}
 ?>