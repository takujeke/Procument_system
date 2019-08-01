<?php
include('dbcon.php');
//echo $company;
//echo $email;

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


<!-- Calendar -->
  <link rel="stylesheet" href="assets/fullcalendar.css" />
  <link rel="stylesheet" href="assets/bootstrap.css" />
  <script src="assets/jquery-1.11.1.min.js"></script>
  <script src="assets/jquery-ui.min.js"></script>
  <script src="assets/moment.min.js"></script>
  <script src="assets/fullcalendar.min.js"></script>
  <script src="assets/bootstrap3-typeahead.min.js"></script>

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

<script src="resources/jquery-1.12.4.js"></script>
<script src="resources/jquery-ui.js"></script>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="bgimg">
<style type="text/css">
.bgimg {
    background-image: url('assets/img/backgrounds/proc.jpg');
}
</style>




		<?php

			if(isset($_POST['approve']))
	{
	
	


	



	
	
	
	$qty = $_POST["quantity"];
	$desc = $_POST["description"];
	$unit = $_POST["unit_price"];
	$total = $_POST["total_price"];
	
	$qty1 = $_POST["quantity1"];
	$desc1 = $_POST["description1"];
	$unit1 = $_POST["unit_price1"];
	$total1 = $_POST["total_price"];
	
	$qty2 = $_POST["quantity2"];
	$desc2 = $_POST["description2"];
	$unit2 = $_POST["unit_price2"];
	$total2 = $_POST["total_price2"];
	
	$qty3 = $_POST["quantity3"];
	$desc3 = $_POST["description3"];
	$unit3 = $_POST["unit_price3"];
	$total3 = $_POST["total_price3"];
	
	$qty4 = $_POST["quantity4"];
	$desc4 = $_POST["description4"];
	$unit4 = $_POST["unit_price4"];
	$total4 = $_POST["total_price4"];
	
	$qty5 = $_POST["quantity5"];
	$desc5 = $_POST["description5"];
	$unit5 = $_POST["unit_price5"];
	$total5 = $_POST["total_price5"];
	
	$supplier = $_POST["supplier"];
	
	$category = $_POST['category'];
	
	$status="1";
	
			
			
			
			
			
			$query = "SELECT * FROM orders WHERE supplier='".$_POST['supplier']."'; ";    
$result = mysqli_query($conn, $query);
    
     while ($row = mysqli_fetch_assoc($result))   
{ 
			
	
		
			
			if ( $row['qty']==$qty && $row['descr']==$desc && $row['unit']==$unit && $row['total']==$total && $row['status']==$status){
			?>
			<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-danger" role="alert">
		
<h2 align="center"> <b></br>  Dublicate Transaction</b> </h2>
		</div>
		  <div class="alert alert-info">
    
	   
	     <div class="social-login-buttons" align="center">
                            
							<a href="final.php?company=<?php echo $row['company'];?>&email= <?php echo $row['email'];?>&phone=<?php echo $row['phone'];?>&address=<?php echo $row['address'];?>
							&category=<?php echo $row['category'];?>&approve=<?php echo $row['approve'];?>" ><button class="btn btn-success btn-lg">Back to list</button></a>
                           

                        </div>
	
	</div>               
		</div>
</div>
			
			
			<?
			
			
		}else{
			
			

			
			
			$sqlx = "INSERT INTO orders (qty, descr, unit, total, supplier,category,status)
   VALUES('$qty', '$desc', '$unit','$total','$supplier','$category','$status')"; 
  /*   ,('$qty1', '$desc1', '$unit1','$total1','$supplier','$category','$status'), 
    ('$qty2', '$desc2', '$unit2','$total2','$supplier','$category','$status'), 
    ('$qty3', '$desc3', '$unit3','$total3','$supplier','$category','$status'),
	('$qty4', '$desc4', '$unit4','$total4','$supplier','$category','$status'),
	('$qty5', '$desc5', '$unit5','$total5','$supplier','$category','$status') */

if ($connx->query($sqlx) === TRUE) {
	
	
	

$supplier = $_POST["supplier"];
$category = $_POST["category"];

 $sql1 = "SELECT * FROM `orders` WHERE `supplier`='$supplier' && `category`='$category' && `status`='1'" ;

   
$result1 = $conn1->query($sql1);

?>
<p class="h1" align="center" style="color:white">DevTech Procument Portal</p> <br/>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-danger" role="alert">
<h3 align="center"><b>Order has been created successfully</b></h3><br/>

<p align="center"><b>Please verify the details and proceed to create order slip</b></p>







<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Order Number</th>
      <th scope="col">Company Name</th>
      <th scope="col">qty</th>
      <th scope="col">description</th>
       <th scope="col">Unit Price</th>
        <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
<?php

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        
    ?>
	



    <tr>
      <th scope="row"><input type="hidden" name="order" value="<?php  echo $row1["order_num"];?>"/><?php echo $row1["order_num"] ?></th>
      <td><?php echo $row1["supplier"] ?></td>
      <td><?php echo $row1["qty"] ?></td>
      <td><?php echo $row1["descr"] ?></td>
      <td><?php echo $row1["unit"] ?></td>
      <td><?php echo $row1["total"] ?></td>
    </tr>
   
    
  <?php
	
	}
	
	?>
	
	
	 </tbody>
	 
	 
</table>



	<?php
	
	
	mysqli_free_result($result1);

mysqli_close($conn1);
	
	
} else {
    echo "0 results";
}
			?>
	
	





		</div>
		
		</div>
		
</div>

		

		  <div align="center">
                           
							
								<a target="_blank" href="print.php?user_id=<?php echo $supplier;?>&address=<?php echo $address;?>&order_num=<?php  echo $row["order_num"];?>" class="btn btn-success btn-lg" >Produce slip</a>
                           <a class="btn btn-link-2" href="">
                             <a href="index.php"> <button  class="btn btn-danger btn-lg">Back to list</button></a>
			
                            </a>
							</div>
		
							
				

<?php

		} else { //important
	
	?>
  	<div class="alert alert-danger" role="alert">
<p align="center">Error<br/>
</p>
</div>

 	    
	   
	   

 


  <?php

	} //else close error
	

		//} //else condition	
	
      } //else condition
		}//should be if but its while
       
	
	

?>
		
	
   








<form method="post" action="final.php">
		
<p class="h1" align="center" style="color:white">DevTech Procument Portal</p> <br/>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-primary" role="alert">
	
<h2 align="center"> <b>You are about to select </br> <?php echo $_GET['company'];?> as the supplier for <?php echo $_GET['category'];?> category?</b> </h2>


 
		</div>
		</div>
		
		
		
		<table class="table table-striped" style="background-color:white">
         <thead>
        <tr class="">\
		<th>Category</th>
          <th>Quantity</th>
          <th>Description</th>
          <th>Unit Price</th>
          <th>Total Price</th>
          <th>Supplier</th>
        </tr>
      </thead>
 
    <tr>
	
        <td><b><?php echo $_GET['category']; ?></b></td>
        <td><input type="text" class="form-control" name="quantity" placeholder="Quantity" required></td>
       <td><input type="text" class="form-control" name="description" placeholder="Description" required></td>
        <td><input type="text" class="form-control" name="unit_price" placeholder="Unit Price" required></td>
        <td><input type="text" class="form-control" name="total_price" placeholder="Total Price" required></td>
        <td><b><?php echo $_GET['company']; ?></b></td>
		<!--<td><span id="btn" class="btn btn-success" onClick="toggle();">Add</span></td>-->
		</tr>
			

			    <tr id="hidethis" style="display:none;">
	
        <td><b><?php echo $_GET['category']; ?></b></td>
        <td><input type="text" class="form-control" name="quantity1" placeholder="Quantity"></td>
       <td><input type="text" class="form-control" name="description1" placeholder="Description"></td>
        <td><input type="text" class="form-control" name="unit_price1" placeholder="Unit Price"></td>
        <td><input type="text" class="form-control" name="total_price1" placeholder="Total Price"></td>
        <td><b><?php echo $_GET['company']; ?></b></td>
		<td><span id="btn1" class="btn btn-success" onClick="toggle1();">Add</span></td>
		
			
			</tr>
					    <tr id="hidethis1" style="display:none;">
	
        <td><b><?php echo $_GET['category']; ?></b></td>
        <td><input type="text" class="form-control" name="quantity2" placeholder="Quantity"></td>
       <td><input type="text" class="form-control" name="description2" placeholder="Description"></td>
        <td><input type="text" class="form-control" name="unit_price2" placeholder="Unit Price"></td>
        <td><input type="text" class="form-control" name="total_price2" placeholder="Total Price"></td>
        <td><b><?php echo $_GET['company']; ?></b></td>
		<td><span id="btn2" class="btn btn-success" onClick="toggle2();">Add</span></td>
		
			
			</tr>
						    <tr id="hidethis2" style="display:none;">
	
        <td><b><?php echo $_GET['category']; ?></b></td>
        <td><input type="text" class="form-control" name="quantity3" placeholder="Quantity"></td>
       <td><input type="text" class="form-control" name="description3" placeholder="Description"></td>
        <td><input type="text" class="form-control" name="unit_price3" placeholder="Unit Price"></td>
        <td><input type="text" class="form-control" name="total_price3" placeholder="Total Price"></td>
        <td><b><?php echo $_GET['company']; ?></b></td>
		<td><span id="btn3" class="btn btn-success" onClick="toggle3();">Add</span></td>
		
			
			</tr>
									    <tr id="hidethis3" style="display:none;">
	
        <td><b><?php echo $_GET['category']; ?></b></td>
        <td><input type="text" class="form-control" name="quantity4" placeholder="Quantity"></td>
       <td><input type="text" class="form-control" name="description4" placeholder="Description"></td>
        <td><input type="text" class="form-control" name="unit_price4" placeholder="Unit Price"></td>
        <td><input type="text" class="form-control" name="total_price4" placeholder="Total Price"></td>
        <td><b><?php echo $_GET['company']; ?></b></td>
		<td><span id="btn4" class="btn btn-success" onClick="toggle4();">Add</span></td>
		
			
			</tr>
												    <tr id="hidethis4" style="display:none;">
	
        <td><b><?php echo $_GET['category']; ?></b></td>
        <td><input type="text" class="form-control" name="quantity5" placeholder="Quantity"></td>
       <td><input type="text" class="form-control" name="description5" placeholder="Description"></td>
        <td><input type="text" class="form-control" name="unit_price5" placeholder="Unit Price"></td>
        <td><input type="text" class="form-control" name="total_price5" placeholder="Total Price"></td>
        <td><b><?php echo $_GET['company']; ?></b></td>
	
		
			<input type="hidden" name="supplier" value="<?php echo $_GET['company']?>" />
			<input type="hidden" name="category" value="<?php echo $_GET['category']?>" />
			</tr>
			
			</table>
		
<script>
function toggle() {
 if( document.getElementById("hidethis").style.display=='none' ){
   document.getElementById("hidethis").style.display = 'table-row';
    document.getElementById("btn").style.display = 'none';
 }else{
   document.getElementById("hidethis").style.display = 'none';
 }
}
</script>
<script>
function toggle1() {
 if( document.getElementById("hidethis1").style.display=='none' ){
   document.getElementById("hidethis1").style.display = 'table-row';
    document.getElementById("btn1").style.display = 'none';
 }else{
   document.getElementById("hidethis1").style.display = 'none';
 }
}
</script>
<script>
function toggle2() {
 if( document.getElementById("hidethis2").style.display=='none' ){
   document.getElementById("hidethis2").style.display = 'table-row';
    document.getElementById("btn2").style.display = 'none';
 }else{
   document.getElementById("hidethis2").style.display = 'none';
 }
}
</script>
<script>
function toggle3() {
 if( document.getElementById("hidethis3").style.display=='none' ){
   document.getElementById("hidethis3").style.display = 'table-row';
    document.getElementById("btn3").style.display = 'none';
 }else{
   document.getElementById("hidethis3").style.display = 'none';
 }
}
</script>
		<script>
function toggle4() {
 if( document.getElementById("hidethis4").style.display=='none' ){
   document.getElementById("hidethis4").style.display = 'table-row';
    document.getElementById("btn4").style.display = 'none';
 }else{
   document.getElementById("hidethis4").style.display = 'none';
 }
}
</script>
		
		
		
		
</div>
 <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" >
          
 <div class="social-login-buttons" align="center">
                            
						<button type="submit" name="approve" class="btn btn-success btn-lg">Create Order </button>
						
                            <a  class="btn btn-danger btn-lg" href="view2.php">Back to list</a>
                            
                           

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