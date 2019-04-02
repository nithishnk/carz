<?php
	include("../connection.php");
	$funObj = new DB_con();
	$ap_id=$_REQUEST['ap_id'];
	$sql="delete from tbl_applied_service where ap_id='$ap_id'";
	mysql_query($sql);
	header("location:appliedservices.php");
?>	