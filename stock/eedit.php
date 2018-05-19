<?php
//session start
session_start();
$var=$_SESSION["user"];
	$item=$_POST["rad"];
	$i=$_POST["ans"];
	$it=$_COOKIE["item"];

if($_POST["sub"]=="Cancel"){
	header("Location: ".$var.".php");die();
}
	mysql_connect("localhost","root","");
	mysql_select_db("stock");

	$sql="update home set item='".$i."' where s_no='".$item."'";
	$r=mysql_query($sql) or die("Query Failed".mysql_error());
	$slq = "ALTER TABLE ".$it." RENAME TO ".$i."";
	
	$r=mysql_query($slq) or die("Query Failed".mysql_error());

	$boo=rename("product/".$it.".php", "product/".$i.".php");
	if ($boo==1 & $r==1) {
		echo "Rename file Success";
	}
	//Reading the file and store to $a
	$new=fopen("product/".$i.".php", "r") or die("Unable to open file!");
	$a=fread($new,filesize("product/".$i.".php"));
	fclose($new);
	//Find and replace
	$a=str_replace($it, $i, $a);
	//Rewrite the file
	$new=fopen("product/".$i.".php", "w") or die("Unable to open file!");
	fwrite($new, $a);
	fclose($new);
	//Redirect
	if ($var=="admin") {
		header( "Location: admin.php" );die;
	}elseif ($var=="supervisor") {
		header( "Location: supervisor.php" );die;
	}
	
?> 