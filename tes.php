<?php session_start();



$email= $_GET['username'];
//echo $email;
?>
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

<body>


			
<form method="post" action="verify.php" enctype="multipart/form-data">

<p class="h1" align="center" style="color:white"> Welcome to DevTech Procument Portal</p> <br/>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-info" role="alert">
<p align="center"><b>Upload the required files in <strong>pdf only</strong</b> <br/>
</p>
		</div>
		</div>
</div>
<div class="col-md-12 col-md-offset-">
  <div class="alert alert-info">
       
	<div class="container">
		
		
	
		<br/>
				<div class="row">
			<div class="col-md-6">
			 <span class="input-group-text" id="basic-addon1"><b>Quotation</b></span>
				<input type="file" class="form-control" name="file1" id="file1" placeholder="Quotation" required>
			</div>
				<div class="col-md-6">
			 <span class="input-group-text" id="basic-addon1"><b>Company Profile</b></span>
				<input type="file" class="form-control" name="file2" id="file2" placeholder="Company Profile" required>
			</div>
		 <input type="hidden" name="email" value="<?php echo $email; ?>"/>
        
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
    var fl = document.getElementById('file1');

    fl.onchange = function(e){
        var ext = this.value.match(/\.(.+)$/)[1];
        switch(ext)
        {
           
            case 'pdf':
         
        


                break;
            default:
                alert('Incorrect file format - Please retry using the correct file format');
                this.value='';
        }
    };


</script>

    <script>
    var fl = document.getElementById('file2');

    fl.onchange = function(e){
        var ext = this.value.match(/\.(.+)$/)[1];
        switch(ext)
        {
           
            case 'pdf':
         
        


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