<?php
	include("../connection.php");
	$funObj = new DB_con();
	$sid=$_REQUEST['sid'];
	$sql="delete from tbl_services where sid='$sid'";
	mysql_query($sql);
	header("location:addNewService.php");
?>	