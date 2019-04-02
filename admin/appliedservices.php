<?php include('header.php'); ?>
  <center><h1><font color="blue">Service Table</font></h1></center>
  <center>
  
    <?php
	  		    include_once('../connection.php');  
				$funObj = new DB_con();
                $qry=("select * from tbl_applied_service,tbl_apointment where tbl_applied_service.email=tbl_apointment.email");
                $sql= mysql_query($qry) or die (mysql_error()); 
				?>
				<table width="100%" style="padding:10px;" class="table table-hover table-striped">
                <tr><th>Customer Name</th><th>E-Mail-Id</th><th>Mobile No</th><th>Vehicle No</th><th>Vehicle Model</th><th>Applied For</th><th>Status</th><th>Delete</th>
                <?php 

                while($row= mysql_fetch_array($sql))
                   {  
						$ap_id=$row['ap_id'];
                        $fname=$row['fname'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $vno=$row['vno'];
                        $vmodel=$row['vmodel'];
						$applied_for=$row['applied_for'];
						$status=$row['status'];
                      
                  ?>  
                <tr><td><?php echo $fname; ?> </td><td><?php echo $email; ?> </td><td><?php echo $mobile; ?></td><td><?php echo $vno; ?> </td><td><?php echo $vmodel; ?></td><td><?php echo $applied_for; ?> </td>
                 <td>
				 
                <?php
					if($status=="waiting"){
					echo "<a class='confirmation' style='color:red;' href=\"appointment_status.php?ap_id=".$ap_id."\">"."$status</a>"; } 
					else{	echo $status;}
					?></td>
					
              <td>
                <?php echo "<a class='confirmation' style='color:red;' href=\"delete_appointment.php?ap_id=".$ap_id."\">"."   <i class='fa fa-trash-o'></i>  </a>"; ?></td>
                </tr>

                 <?php } ?>
  
 
  
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>