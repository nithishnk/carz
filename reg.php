<?php  
    include_once('connection.php');  
    $funObj = new DB_con();  
    if(isset($_POST['register'])){  
     $name =$_POST["fname"];
     $email =$_POST["email"];
     $mobile =$_POST["mobile"];
     $vno =$_POST["vno"];
     $vmodel =$_POST["vmodel"];
     $voname =$_POST["voname"];
     $pwd =$_POST["pwd"];
	if(!preg_match('/^[0-9]{10}$/',$mobile))
	{
		echo "<script type='text/javascript'>alert('Please enter 10 Digit Mobile no')</script>";
	}	
	//if(!preg_match('/^[A-Z]{2}-[0-9]{2} [A-Z]{1}-[0-9]{4}$/',$vno))
	//{
		//echo "<script type='text/javascript'>alert('Enter No in KA-17 L-9933 Format')</script>";
	//}	
	if(!preg_match('/^[0-9]{4}$/',$vmodel))
	{
		echo "<script type='text/javascript'>alert('Enter year in 0000 format')</script>";
	}	
		

     $table="tbl_login";
     $fields = array('username','password');
     $values = array($email,$pwd);
     $register = $funObj->insertData($table,$fields,$values);
	
 
      $table1="tbl_apointment";
      $fields = array('fname','email', 'mobile','vno','vmodel','voname');
       $values = array($name,$email,$mobile,$vno,$vmodel,$voname);
        $register = $funObj->insertData($table1,$fields,$values);
	if(!$register)
		echo "<script type='text/javascript'>alert('Registered Successfully')</script>";
	else
		echo "<script type='text/javascript'>alert('Not Registered ')</script>";
	
              
           
        } 
    
  
?>  


<!DOCTYPE html>
<html>
  <head>
    <title>carzone</title>
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
   <div class="menu">
   <div class="btn"><a href="index.html">HOME</a></div>
   <div class="btn"><a href="about.html">ABOUT</a></div>
   <div class="btn"><a href="services.html">SERVICES</a></div>
   <div class="btn"><a href="login.html">LOGIN</a></div>

				   
       

        <!-- START CONTENT HERE -->
        <div id="main">
            <div class="container">
                <div class="row">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content">
                                <div class="inner">
                             <h1 class="entry-title">
                                       Register Here
                                    </h1>
                                      <div class="entry-content">
<form action="" method="post">                                   
                <div class="row contact-form">
               <div class="col-lg-6">
<input name="fname" type="text" class="form-control" placeholder="Full Name" required>
     </div><!-- end col -->
            
                 <div class="col-lg-6">
 <input name="email" type="email" class="form-control" placeholder="email@email.com" required>
                   </div><!-- end col -->
                     <div class="col-lg-6">
 <input name="mobile" type="text" class="form-control" placeholder="Mobile No" required>
                        </div><!-- end col -->
						<div class="col-lg-6">
<input name="vno" type="text" class="form-control" placeholder="vehicle No(KA 17 L 9933)" required>
                                 </div><!-- end col -->
						<div class="col-lg-6">
 <input name="vmodel" type="text" class="form-control" placeholder="Model (Registered Year)" required>
                       </div><!-- end col -->
								<div class="col-lg-6">
<input name="voname" type="text" class="form-control" placeholder="OwnerName (Name in RC book)" required>
                    </div><!-- end col -->
->
					<div class="col-lg-6">
<input name="pwd" type="password" class="form-control" placeholder="Password" required>
                    </div><!-- end col -->
                                           
                    <center><div class="col-lg-12">
<input class="btn btn-lg btn-default" name="register" type="submit" id="register" value="Register">
 <input class="btn btn-lg btn-default" name="submit" type="RESET" id="button" value="Reset">
                                            </div>
											</center>
                                        </div><!-- end row -->


                                    </div><!-- end entry-content -->
                                </div><!-- end inner -->

                            

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                   
  </body>
</html>