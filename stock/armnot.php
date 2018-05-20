<?php 
	$un=$_POST["un"];
	if ($_POST=="Cancel") {
		header("Location: notification.php");
	}
	$sql="delete from pass where username='".$un."'";
	$conn=mysqli_connect("localhost","root","","stock");
	$r=$conn->query($sql);
	if ($r==1) {
		echo "<h1>Deleted Successfully</h1>";
		header("Location: notification.php");
		$conn->close();die;
	}else{
		echo "<h1>Deleted Failed, you entered Username is wrong</h1>";
	}
 ?>