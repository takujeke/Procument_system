<?php
include("headern3.php");
include("dbcon.php");

$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$query ="SELECT * FROM patients ORDER BY id DESC LIMIT $start_from, $limit";  
$result = mysqli_query($conn, $query);  
?>
<div class="alert alert-info table-responsive">
<p align = "center" class="alert alert-danger"><b>View and triage patients</b></p>
<table   class=" table table-striped table-bordered table-responsive table-hover">
<thead>
<tr>

<th>Medical Insurance</th>
<th>Patient Name</th>
<th>Patient DOB</th>  
<th>Member Name</th>     
<th>Member Number</th>
<th>Visit Date</th>
<th></th>

</tr>
</thead>
<?php
while ($row = mysqli_fetch_assoc($result))   
{ 
?>
    <tr>
    <td>  
    <?php  echo $row['so_name']; ?></td>
    <td><?php echo $row['patient_name']; ?></td>
    <td><?php echo $row['patient_dob']; ?></td>
    <td><?php echo $row['me_name']; ?></td>
    <td><?php echo $row['member_num']; ?></td>  
    <td><?php echo $row['date_stamp']; ?></td>  
    <td><a href="expand_patient.php?id=<?php echo $row['id'];?>" class="btn btn-success">Triage Patient</a></td>
 
    
    
    </tr>
    <?php
    $_SESSION['id'] = $row['id'];
}  
?>
</table>

<?php
$query = "SELECT COUNT(id)FROM patients";  
$result = mysqli_query($conn, $query); 
$row = mysqli_fetch_row($result); 
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 
$pagLink = "<nav><ul class='pagination'>";
for ($i=1; $i<=$total_pages; $i++) {  
$pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";   
?>

</div>
 
<?php
include("footern3.php");
?>