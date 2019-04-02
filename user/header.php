<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>car zone</title>

    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div id="page" class="hfeed site"><!-- start page wrapper -->

    	<header id="masthead" class="site-header navbar-fixed-top">
            <div class="header-navigation">
                <div class="container-fluid">

                    <div class="row">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="logo navbar-brand">
				        	
				        </div><!-- end logo -->

				        <nav id="primary-navigation" class="site-navigation navbar-collapse collapse" role="navigation">
				        	<div class="nav-menu">
    							<ul class="menu">
    								<li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="Appointment.php">Get Appointment</a></li>
									 <li><a href="applied_status.php">Appointment Status</a></li>
    								<li><a href="logout.php">Log Out</a>
								    </li>
    						    </ul>
                            </div><!-- end nav-menu -->
                        </nav><!-- end #primary-navigation -->

                        

                    </div><!-- end row -->
                    
                </div><!-- end container-fluid -->
            </div><!-- end header-navigation -->
        </header><!-- end #masthead --><br/><br>
		
		
			<?php
	include("../connection.php");
  $funObj = new DB_con();
	session_start();
if( isset($_SESSION['username'] ) )
	{
	$username=$_SESSION['username'];
	$role=$_SESSION['role'];
  }
 	else
  {
  echo "<center><font size=10 color=red>Un authorized access is denied</font><br/><a href='../login.html'>Please Try Again</a></center>";
  exit();
  } 
  ?>	 			 
