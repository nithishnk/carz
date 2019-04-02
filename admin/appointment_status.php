<?php
include("../connection.php");
    $funObj = new DB_con();
    $status=$_REQUEST['status'];
    $ap_id=$_REQUEST['ap_id'];
	

 	$sql=mysql_query("UPDATE tbl_applied_service SET status='Approved Please come within 12 hours' where ap_id='$ap_id'");
  	header("LOCATION:appliedservices.php");
?>
