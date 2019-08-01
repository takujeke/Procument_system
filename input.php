<?

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procument Management System</title>

    <!-- CSS -->


  
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

</head>

<body class="bgimg">
<style type="text/css">
.bgimg {
    background-image: url('assets/img/backgrounds/proc.jpg');
}
</style>

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
			if(isset($_POST['submit']))
{
	
	
	

	



	
	
	
	$company = $_POST["company"];
	$person = $_POST["person"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$category = $_POST["category"];
	$url = $_POST["url"];
$address = $_POST["address"];

	
	
	
			
			$sql = "INSERT INTO supplier (company, person, email, phone, quote_path, category, address )
 VALUES ('$company','$person','$email', '$phone', '$url', '$category', '$address' )";

if ($conn->query($sql) === TRUE) {

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

 $sql = "SELECT * FROM `supplier` WHERE `email`= '$email' ORDER BY id DESC";

   
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	?>
	<p class="h1" align="center" style="color:white">DevTech Procument Portal</p> <br/>

	<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    ?>
	
	



<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-danger" role="alert">
<p align="center">Thank you <b><?php echo $company;?> </b>for submitting your details <br/>

<b>Please verify your details and proceed or click back to restart process</b></p>







<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Contact Person</th>
      <th scope="col">Email Address</th>
       <th scope="col">Phone Number</th>
        <th scope="col">Physical Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row["id"] ?></th>
      <td><?php echo $row["company"] ?></td>
      <td><?php echo $row["person"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["phone"] ?></td>
      <td><?php echo $row["address"] ?></td>
    </tr>
   
    
   
  </tbody>
</table>






		</div>
		</div>
</div>
<div class="col-md-12 col-md-offset-">
  <div class="alert alert-info">
       
	   
	     <div class="social-login-buttons" align="center">
                            
							<a href="tes.php?username=<?php echo $email; ?>" ><button class="btn btn-success btn-lg">Proceed
                            to uploads page</button></a>
                            <a class="btn btn-link-2" href="input.php">
                              <button  class="btn btn-danger btn-lg">Back</button>
			
                            </a>

                        </div>
	
	</div>
	
	

         
	
	<?php
	
	}
} else {
    echo "0 results";
}
			?>
			

<?php

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

			
<form method="post" action="input.php" enctype="multipart/form-data">

<p class="h1" align="center" style="color:white"> Welcome to DevTech Procument Portal</p> <br/>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-primary" role="alert">
<p align="center"><b>Fill in the form below, attach the quotation and click Submit, <br/>
Our team will evaluate your submission and contact you using the details you provide below</b></p>
		</div>
		</div>
</div>
<div class="col-md-12 col-md-offset-">
  <div class="alert alert-info">
       
	<div class="container">
		
		
		<div class="row">
			<div class="col-md-6">
			
			  <span class="input-group-text" id="basic-addon1"><b>Company Name</b></span>
				<input type="text" class="form-control" name="company" placeholder="Company name" required>
			</div>
			<div class="col-md-6">
				 <span class="input-group-text" id="basic-addon1"><b>Contact Person Name</b></span>
				<input type="text" class="form-control" name="person" placeholder="Contact Person Name" required>
			</div>
		</div><br/>
			<div class="row">
			<div class="col-md-6">
			 <span class="input-group-text" id="basic-addon1"><b>Email Address</b></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required>
			</div>
			<div class="col-md-6">
			 <span class="input-group-text" id="basic-addon1"><b>Phone Number</b></span>
				<input type="numeric" class="form-control" name="phone" placeholder="Phone Number" required>
			</div>
		</div>
		<br/>
				<div class="row">
			<div class="col-md-6">
			 <span class="input-group-text" id="basic-addon1"><b>Physical Address</b></span>
				<input type="text" class="form-control" name="address" placeholder="Physical Address" required>
			</div>
			<div class="col-md-6">
			<span class="input-group-text" id="basic-addon1"><b>Category</b></span>
		<select type="input" class="input-group-text form-control" name="category" required  >
			  <option value="" selected disabled>Select Option</option>
			  <option value="IT">IT-Infrastructure</option>
			  <option value="KITCHEN">Kitchen</option>
			  <option value="AUTOMATION">Automation</option>
			  <option value="FURNITURE">Furniture</option>
	</select>


			</div>
		</div>
		
		 <input type="text" name="url" value="localhost/procument/upload/" hidden="true">
                        
		<br/>
			<div class="row">
			<div class="col-md-6">
			<button type="submit" name="submit" class="btn btn-secondary btn-lg">Submit</button>
			</div>
			<div class="col-md-6">
			</div>
			
			
			
			
			
			
		</div>
		</div>
		</div>
	</div>
</form>
         
     

    <script>
    var fl = document.getElementById('upload');

    fl.onchange = function(e){
        var ext = this.value.match(/\.(.+)$/)[1];
        switch(ext)
        {
            case 'jpg':
            case 'pdf':
            case 'png':
			case 'doc':
            case 'xls':
            case 'docx':
        


                break;
            default:
                alert('Incorrect file format - Please retry using the correct file format');
                this.value='';
        }
    };


</script>
 


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