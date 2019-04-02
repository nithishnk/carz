<?php
session_start();
include("connection.php");
$funObj = new DB_con();
$uname=$_POST['txtusername'];
$pass=$_POST['txtpassword'];
$admin='admin';
$user='user';
if(isset($_POST['login'])){
  if (isset($uname) && isset($pass)){
	  $query = mysql_query("SELECT username,password,role FROM tbl_login WHERE username ='$uname' AND password='$pass'");
	     $row_user = mysql_fetch_array($query);
      
       if (($uname != $row_user['username']) && ($pass != $row_user['password'])){
               header("location: error1.php");
			  }
  		else {
		if(($admin == $row_user['role'])){
			$_SESSION['username']=$uname;
			$_SESSION['role']="admin";
		 	header("location:admin");
	    	}
		else if(($user == $row_user['role'])){
			$_SESSION['username']=$uname;
			$_SESSION['role']="user";
		 	header("location:user");
	    	}
	}
 }

 else {header("location:error1.php"); }
}
?> 