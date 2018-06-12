<?php
	$del=$_POST["del"];
	$sql="delete from home where s_no='".$del."'";

	if($_POST["sub"]=="Cancel"){
	header("Location: admin.php");die();
}

	mysql_connect("localhost","root","");
	mysql_select_db("stock");
	
	$d="select * from home where s_no='".$del."'";
	$dl=mysql_query($d);if($dl==1){echo "dl ok";}
	$de=mysql_fetch_array($dl);
	$f=$de["item"];
	$sq="drop table ".$f;
	$file="product/".$f.".php";

	$result=mysql_query($sql) or die("Query Failed : ".mysql_error());	
	$r=mysql_query($sq) or die("Query Failed in sq: ".mysql_error());

	if ($result==1 && $r==1) {
		echo "Removed Successfully.";
	}

	unlink($file);
	
		echo "</br>Deleted Successfully</br>";
		echo "
			<form action='admin.php'>
				<input type='submit' value='Back to home'>
			</form>
		";
	header( "Location: admin.php" );

  ?>