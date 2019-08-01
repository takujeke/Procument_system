<?php
//include("headern3.php");
include("dbcon.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/jquery-ui.css">
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



<div class="form-top">
<div class="form">
<br />

<a class="btn btn-link-2" href="index.php">
View all Applications
</a>

<a class="btn btn-link-2" href="filter.php">
Filter Rejected
</a> 

<a class="btn btn-link-2" href="orders.php">
Orders
</a> 


<a class="btn btn-link-2" href="mail.php">
 Optional Email Option
</a> 

<a href="../userAccount.php?logoutSubmit=1" class="btn btn-link-2" >Logout</a>
</div>



</div>
<form method="post" action="">
		

<p class="h1" align="center" style="color:white"> DevTech Procument Portal</p> <br/>





<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-success" role="alert">
<p align="center"><b>All the Orders created are listed below <br/>
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

$query = "SELECT * FROM orders WHERE status='1'; ";    
$result = mysqli_query($conn, $query);
    ?>
    
    
    
 <div class="container-fluid ">
<table class="alert alert-success table table">
         <thead>
        <tr class="">
          <th>Company Name</th>
          <th>qty</th>
          <th>Description</th>
          <th>Total cost</th>
          <th>Order Number</th>
          <th>Category</th>
		
		   
	
        </tr>
      </thead>
       <?php
     while ($row = mysqli_fetch_assoc($result))   
{ 

$idupload1 ="idupload1";
$idupload2 ="idupload2";
 $pdf= ".pdf";
 $upload="Upload/";
 ?>  
    <tr>
	
        <td><?php echo $row['supplier']; ?></td>
        <td><?php echo $row['qty']; ?></td>
        <td><?php echo $row['descr']; ?></td>
        <td><?php echo $row['total']; ?></td>
        <td><?php echo $row['order_num']; ?></td>
        <td><?php echo $row['category']; ?></td>
	
			
			
			
		
            
        
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