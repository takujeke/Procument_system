<?php

//echo $company;
//echo $email;

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

<body class="bgimg">






<?php
		
		
	if(isset($_POST['forward'])){
		
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procument";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}		

	
		
		$sql = "UPDATE supplier SET approve='2' WHERE email='".$_POST['email']."'";

if (mysqli_query($conn, $sql) === TRUE) {
	
	
	
	$query = "SELECT * FROM supplier WHERE email='".$_POST['email']."'";    
$result = mysqli_query($conn, $query);
   
    
    

     while ($row = mysqli_fetch_assoc($result))   
{ 
    
	?>
<style type="text/css">
.bgimg {
    background-image: url('assets/img/backgrounds/proc.jpg');
}
</style>
<div class="container">	
	
<p class="h1" align="center" style="color:white">DevTech Procument Portal</p> <br/>


<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-primary" role="alert">
		
<h2 align="center"> <b></br>  Application has been Approved successfully!</b> </h2>
		</div>
		  <div class="alert alert-info">
		  <table class="table">
		  <tr>
       <td><?php echo $row['company'];?></td>
	   <td><?php echo $row['email'];?></td>
	  <td> <?php echo $row['phone'];?></td>
	   <td><?php echo $row['address'];?></td>
	    <td><?php echo $row['category'];?></td>
	    <td><?php echo $row['approve'];?></td>
	   </tr>
	   </table>
	     <div class="social-login-buttons" align="center">
                            
							<a href="alpha.php?company=<?php echo $row['company'];?>&email= <?php echo $row['email'];?>&phone=<?php echo $row['phone'];?>&address=<?php echo $row['address'];?>
							&category=<?php echo $row['category'];?>&approve=<?php echo $row['approve'];?>" ><button class="btn btn-success btn-lg">Create Order</button></a>
                           

                        </div>
	
	</div>               
		</div>
</div>
</div>
		
	  <?php
}
	
} else {
    ?> 

	<div class="alert alert-danger" role="alert">
<p align="center">Error<br/>
</p>
</div>	

    <?php
    
    
}
 $conn->close();
        exit();
  
    }
  

  
  


?>



<form method="post" action="approve.php">
		
<p class="h1" align="center" style="color:white">DevTech Procument Portal</p> <br/>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-primary" role="alert">
	
<h2 align="center"> <b>Are you sure you want to approve </br> application from <?php echo $_GET['company'];?> for supply?</b> </h2>



		</div>
		</div>
</div>
 <input type="hidden" name="email" value="<?php echo $_GET['user_id']; ?>" >
          
 <div class="social-login-buttons" align="center">
                            
						<button type="submit" name="forward" class="btn btn-success btn-lg">Yes </button>
						
                            <a  class="btn btn-danger btn-lg" href="index.php">No </a>
                            
                           

                        </div>

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