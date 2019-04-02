<?php include('header.php'); ?>
<?php  
    include_once('../connection.php');  
    $funObj = new DB_con();  
    if(isset($_POST['register'])){  
    
	$serviceName =$_POST["serviceName"];
     $description =$_POST["description"];
     $table="tbl_services";
     $fields = array('service_name','service_desc');
     $values = array($serviceName,$description);
     $register = $funObj->insertData($table,$fields,$values);

        } 

?>  

  <body>
  <center><h1><font color="blue">Add New Service Page</font></h1></center></br>
  <center>
  <table border="5">
  <form action="" method="post">
  Service Name:<input type="text" name="serviceName" required="required" /></br></br>
  Description:<textarea type="text" name="description" required="required"/></textarea><br><br>
  <input type="submit" value="Add" style="margin:10px; padding:5px" name="register"/>
  <input type="reset" value="Reset" style="margin:10px; padding:5px"//>
  </form>
  </table>
  
  <?php
	  		    include_once('../connection.php');  
				$funObj = new DB_con();
                $qry=("select * from tbl_services");
                $sql= mysql_query($qry) or die (mysql_error()); 
				?>
				<table width="100%" style="padding:10px;" class="table table-hover table-striped">
                <tr><th>Service Name</th><th>Description</th><th>Action</th></tr>
                <?php 

                while($row= mysql_fetch_array($sql))
                   {  
						$sid=$row['sid'];
						$service_name=$row['service_name'];
                        $service_desc=$row['service_desc'];
                       
                      
                  ?>  
                <tr><td><?php echo $service_name; ?> </td><td><?php echo $service_desc; ?></td>
        
              <td>
                <?php echo "<a class='confirmation' style='color:red;' href=\"delete_service.php?sid=".$sid."\">"."   <i class='fa fa-trash-o'></i>  </a>"; ?></td>
                </tr>

                 <?php } ?>
  
  
  
  
  
  </center>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>