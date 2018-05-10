<?php 
	$sno=$_POST["sno"];
	$par=$_POST["par"];
	$pur=$_POST["pur"];
	$sale=$_POST["sale"];
	$item=$_COOKIE["item"];

if($_POST["sub"]=="Cancel"){
header("Location: ../".$item.".php");die();
}

	mysql_connect("localhost","root","");
	mysql_select_db("stock");

	
	 $s="select balance_stock from home where item='".$item."'";
	 $sl="select unit from home where item='".$item."'";
	 $re=mysql_query($sl);
	 $n=mysql_query($s);
	 $u=mysql_fetch_array($re);
	 $rr=mysql_fetch_array($n);
	$bal=$pur-$sale+$rr["balance_stock"];

	 $sql = "INSERT INTO `stock`.`".$item."` (`s_no`, `particulars`, `pur_stock`, `sale_stock`, `balance_stock`, `unit`) VALUES ('".$sno."', '".$par."', '".$pur."', '".$sale."', '".$bal."', '".$u["unit"]."');";
	 $sq="update home set balance_stock='".$bal."' where item='".$item."'";
	 $result=mysql_query($sql) or die("Failed to query database".mysql_error());
	 $r=mysql_query($sq) or die("Failed to query database".mysql_error());
	 if($result==1 && $r==1){
	 	echo "Row Inserted Successfully";
	 }
	 echo "<a href=\"../../login.php\">Login again</a>";
	 header( "Location: ../".$item.".php" );
 ?>