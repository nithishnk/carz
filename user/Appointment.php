<?php include('header.php'); ?>
<?php  
	
    include_once('../connection.php');  
    $funObj = new DB_con();  
    if(isset($_POST['register'])){  
     $email =$_POST["email"];
     $mobileno =$_POST["mobileno"];
	 $applied_for =$_POST["applied_for"];
		
	 $table="tbl_applied_service";
     $fields = array('email','mobileno','applied_for');
     $values = array($email,$mobileno,$applied_for);
     $register = $funObj->insertData($table,$fields,$values);
	 if(!$register)
		echo "<script type='text/javascript'>alert('Appointment Successfully')</script>";
	
        } 
		
		
		
				$qry=("select * from tbl_apointment where email='$username'");
                $sql= mysql_query($qry) or die (mysql_error()); 
				while($row= mysql_fetch_array($sql))
                   {  
						$rid=$row['rid'];
                        $fname=$row['fname'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $vno=$row['vno'];
                        $vmodel=$row['vmodel'];
						$voname=$row['voname'];
				}
?>
  
         <!-- START CONTENT HERE -->
        <div id="main">
            <div class="container">
                <div class="row">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content">
                            

                                <div class="inner">

                                   

                                    <h1 class="entry-title">
                                        <a href="#">Get Appointment Here</a>
                                    </h1>
                                    

                                    <div class="entry-content">
                                        
									<form action="" method="post" >
                                        <div class="row contact-form">
                                            <div class="col-lg-6">
									<input type="text" class="form-control" placeholder="Your Name" value="<?php echo $fname; ?>" readonly>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <input type="text" name="mobileno" value="<?php echo $mobile; ?>" class="form-control" placeholder="Your Phone Number" readonly>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Your Email" readonly>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" placeholder="Vehicle No (KA 17 L 9933)" value="<?php echo $vno; ?>" readonly>
                                            </div><!-- end col -->
                                            <div class="col-lg-12">
                                                <select name="applied_for" class='form-control'>
												<option value="-1"> --- Select --- </option>
												<?php 
												$qry=("select * from tbl_services");
												$sql= mysql_query($qry) or die (mysql_error()); 
												while($row= mysql_fetch_array($sql))
												{  
													$service_name=$row['service_name'];
													echo "<option>".$service_name."</option>";
												}
												?>
												</select>
                                            </div>
                                            <div class="col-lg-12">
                                                <input class="btn btn-lg btn-default" name="register" type="submit" id="register" value="register">
												
                                            </div>
                                        </div><!-- end row -->
</form>
                                    </div><!-- end entry-content -->
                                </div><!-- end inner -->

                            

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                    <div id="secondary" class="col-md-4">

                            <div class="widget">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">Location</h3>
									
                                </div>
                                <div class="widget-content">
                                    <p><strong>HEAD OFFICE ADDRESS</strong></p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><strong>Location</strong></td>
                                                <td> :Hanchya,Satagalli Ring Road No 1, carzone,<br>&nbsp;&nbsp;Mysore-570019 Karnataka.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Telp</strong></td>
                                                <td>:08211-332266</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td>carzone@localhost.net</a></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Open Hour</strong></td>
                                                <td>:Monday &dash; Friday <br> &nbsp;&nbsp;10:00 AM &dash; 05:00 PM</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br/>
                                    <br/>

                                    <p><strong>BRANCH OFFICE ADDRESS</strong></p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><strong>Location</strong></td>
                                                <td> :PB Road. No 169, carzone, <br>&nbsp;&nbsp;Davangere, karnataka.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Telp</strong></td>
                                                <td> :08192-264058</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td>carzone@localhost.net</a></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Open Hour</strong></td>
                                               <td> : Monday &dash; Friday <br> &nbsp;&nbsp;10:00 AM &dash; 05:00 PM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end widget-content -->
                            </div><!-- end widget -->
                  </div>							
                </div>
            </div>
        </footer>

        

        <div class="footer-credit">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class="copy">COPYRIGHT &copy; 2017 CARZONE. WEB DESIGN BY KUSHI INFO</p>
                    </div><!-- end column -->
                    <div class="col-md-6">
                        
                    </div><!-- end column -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-credit -->
    	
    </div><!-- end #page hfeed site -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>