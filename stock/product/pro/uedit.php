<?php
	$ob=$_POST["ob"];
	$sn=$_POST["rad"];
	$sc=$_POST["cust"];
	$p=$_POST["pur"];
	$ss=$_POST["ss"];
	$item=$_COOKIE["item"];


if($_POST["sub"]=="Cancel"){
header("Location: ../".$item.".php");die();
}
	
	//connect to database
	$a=mysql_connect("localhost","root","");
	$b=mysql_select_db("stock");
	if ($a==1 & $b==1) {
		echo "sql connected and selected";
	}
	//Query to database
	$sl="select unit from home where item='".$item."'";
	$re=mysql_query($sl);
	$u=mysql_fetch_array($re);
	$bal=$p-$ss+$ob;

	$sql = "UPDATE ".$item." SET particulars = \"".$sc."\", pur_stock = ".$p.", sale_stock = ".$ss.", balance_stock=".$bal." WHERE s_no = ".$sn;
	$sq="update home set balance_stock='".$bal."' where item='".$item."'";
	$re=mysql_query($sql) or die("Query Failed :".mysql_error());
	 $r=mysql_query($sq) or die("Failed to query database".mysql_error());
	 if($re==1 && $r==1){
	 	echo "Row Inserted Successfully";
	 }
	//retun to the page
	header("Location: ../".$item.".php");
?>