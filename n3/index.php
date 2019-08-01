<?php
include("headern3.php");
include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procument Management System</title>

    <!-- CSS 
<link href="assets/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script language="javascript" type="text/javascript" src="assets/jquery-1.8.3.js"></script>
<script src="assets/jquery-ui-1.9.2.custom.js"></script>-->
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


<form method="post" action="">
		

<p class="h1" align="center" style="color:white"> DevTech Procument Portal</p> <br/>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-info" role="alert">
<p align="center"><b>All the recommended quotations are listed below <br/>
</b></p>
		</div>
		</div>
</div>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procument";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM supplier WHERE approve='1'; ";    
$result = mysqli_query($conn, $query);
    ?>
    
    
    
 <div class="container-fluid">
<table class="table table-striped table-responsive" style="background-color:white">
         <thead>
        <tr class="">
          <th>Company Name</th>
          <th>Contact Person</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Category</th>
		   <th>Notes</th>
		   <th>Quotation</th>
		    <th>Company Profile</th>
		   
	 <th>More Details</th>
        </tr>
      </thead>
       <?php
     while ($row = mysqli_fetch_assoc($result))   
{ 

$idupload1 ="idupload1";
$idupload2 ="idupload2";
 $pdf= ".pdf";
$upload="../Upload/";
 ?>  
    <tr>
	
        <td><?php echo $row['company']; ?></td>
        <td><?php echo $row['person']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['category']; ?></td>
			 <td><div class="alert alert-primary"><?php echo $row['notes']; ?></div> </td>
			<td>
			

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">View Quotation</button>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">View Quotation </h4>
                    </div>
                    <div class="modal-body">

                        <embed src="<?php echo $upload.$row['email'].$idupload1.$pdf; ?>"
                               frameborder="0" width="100%" height="400px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   
			
			</td> 
			
			
			
			<td>
			

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Company Profile</button>
        <!-- Modal -->
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">View Company Profile </h4>
                    </div>
                    <div class="modal-body">

                        <embed src="<?php echo $upload.$row['email'].$idupload2.$pdf; ?>"
                               frameborder="0" width="100%" height="400px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   
			
			</td>
			
			  
        <td>
		
		
		<div class="row">
			<div class="col-md-6">
			
			
			
			<a href="approve.php?user_id=<?php echo $row['email'];?>&company=<?php echo $row['company'];?>&category=<?php echo $row['category'];?>
			&address=<?php echo $row['address'];?>&phone=<?php echo $row['phone'];?>&email=<?php echo $row['email'];?>" class="btn btn-secondary" >
			Approve</a>
			</div>
			
			 <input type="hidden" name="approve" value="<?php echo $row['email']; ?>" >
          
		</div>
		
		

		
		
		</td>
            
        
        </tr>
      <?php
}
?>
    </table>
    </div>
 <?php
mysqli_free_result($result);

mysqli_close($conn);

?>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-danger" role="alert">
<p align="center"><b>All the pending quotations are listed below <br/>
</b></p>
		</div>
		</div>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procument";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM supplier WHERE approve='0'; ";    
$result = mysqli_query($conn, $query);
    ?>
    
    
    
 <div class="container-fluid ">
<table class="table table" style="background-color:#ffb3b3">
         <thead>
        <tr class="">
          <th>Company Name</th>
          <th>Contact Person</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Category</th>
		   <th>Notes</th>
		   <th>Quotation</th>
		    <th>Company Profile</th>
		   
	 <th>More Details</th>
        </tr>
      </thead>
       <?php
     while ($row = mysqli_fetch_assoc($result))   
{ 

$idupload1 ="idupload1";
$idupload2 ="idupload2";
 $pdf= ".pdf";
$upload="../Upload/";
 ?>  
    <tr>
	
        <td><?php echo $row['company']; ?></td>
        <td><?php echo $row['person']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['category']; ?></td>
		 <td><div class="alert alert-primary"><?php echo $row['notes']; ?></div> </td>
			<td>
			

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo "#".''.$row['email']?>">View Quotation</button>
        <!-- Modal -->
        <div id="<?php echo $row['email']?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">View Quotation </h4>
                    </div>
                    <div class="modal-body">

                        <embed src="<?php echo $upload.$row['email'].$idupload1.$pdf; ?>"
                               frameborder="0" width="100%" height="400px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   
			
			</td> 
			
			
			
			<td>
			

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="<?php echo "#".''.$row['email'].''."1"?>">View Company Profile</button>
        <!-- Modal -->
        <div id="<?php echo $row['email'].''."1"?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">View Company Profile </h4>
                    </div>
                    <div class="modal-body">

                        <embed src="<?php echo $upload.$row['email'].$idupload2.$pdf; ?>"
                               frameborder="0" width="100%" height="400px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   
			
			</td>
			
			  
        <td>
		
		
		<div class="row">
			<div class="col-md-6">
			
			
			
			<a href="approve.php?user_id=<?php echo $row['email'];?>&company=<?php echo $row['company'];?>&category=<?php echo $row['category'];?>
			&address=<?php echo $row['address'];?>&phone=<?php echo $row['phone'];?>&email=<?php echo $row['email'];?>" class="btn btn-secondary" >
			Approve</a>
			</div>
			
			 <input type="hidden" name="approve" value="<?php echo $row['email']; ?>" >
          
		</div>
		
		

		
		
		</td>
            
        
        </tr>
      <?php
}
?>
    </table>
    </div>
 <?php
mysqli_free_result($result);

mysqli_close($conn);

?>




	</form>
		



















    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
    <![endif]-->
</body>

</html>