<?php include('header.php'); ?>
  <center><h1><font color="blue">Appointment Status Table</font></h1></center>
  <center>
  
    <?php
	  		    include_once('../connection.php');  
				$funObj = new DB_con();
                $qry=("select * from tbl_applied_service where email='$username'");
                $sql= mysql_query($qry) or die (mysql_error()); 
				?>
				<table width="100%" style="padding:10px;" class="table table-hover table-striped">
                <tr><th>E-Mail-Id</th><th>Mobile No</th><th>Applied For</th><th>Status</th>
                <?php 

                while($row= mysql_fetch_array($sql))
                   {  
						$ap_id=$row['ap_id'];
                        
                        $email=$row['email'];
                        $mobile=$row['mobileno'];
						$applied_for=$row['applied_for'];
						$status=$row['status'];
                      
                  ?>  
                <tr><td><?php echo $email; ?> </td><td><?php echo $mobile; ?></td><td><?php echo $applied_for; ?> </td>
                 <td>
				 
                <?php
				   echo $status;}
			  ?>
  
				</td></tr>
				</table>
  
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>