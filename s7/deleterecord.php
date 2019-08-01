<?php
include('headerS7.php');
include('dbcon.php');
$row_user = $_GET['id'];
//updating the table
$sql = "DELETE FROM users WHERE id= '$row_user'";

if ($conn->query($sql) == TRUE) {
    ?>
    
   <!--success--> 
  <div class="alert alert-danger"> User has been deleted successfully</div>
    <?php
} else {
    ?> 
    
     <div class="alert alert-success"> <?php echo mysqli_error($conn); ?>
    <!--failure--> User delete has failed
</div>
   <?php
    
    
}
$conn->close();

 


include('footerS7.php');
?>

