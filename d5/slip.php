<?php
include("headern3.php");
include("dbcon.php");
$row_user = $_GET['id'];
$query = "SELECT * FROM patients WHERE id ='$row_user' "; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<div class="alert alert-info" >
<div class="row">
<div id="print-content">
<table width="100%">
<form>

<div class="col-sm-12">
<p align="center" class="alert alert-success"><B>Create a waiting slip</b></p>
</div>

<div class="col-sm-3">
<div class="form-group">
<label  for="form-username">Patient Name</label>
<input type="text" name="patient_name" class="form-control" placeholder="Patient Name" readonly value = "<?php echo $row['patient_name']; ?>" class="form-username form-control" required>
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label  for="form-username">Patient Observations</label>
<textarea name="observations" placeholder="Observations" readonly  class="form-username form-control" required> <?php echo $row['observations']; ?></textarea>
</div>
</div>


<div class="col-sm-3">
<div class="form-group">
<label  for="form-username">Vital Patient Inputs</label>
<textarea name="vital_inputs" placeholder="Vital Inputs" readonly class="form-username form-control" required> <?php echo $row['vital_inputs']; ?></textarea>
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label>Other information</label>
<input type="hidden" name="update_id" value = "<?php echo $row_user; ?>" >
<input type="text" name="nurse_other" readonly  value = "<?php echo $row['nurse_other']; ?>" placeholder="Other Information, Prescribed RX" class="form-username form-control" required>
</div>
</div>
</div>
<div class = "row">

<div class="col-sm-4">
<div class="form-group">
<label>Foward Patient to Department </label>
        <select name="fwd_dept" readonly class="form-username form-control" id="fwd_dept" required>
        <option value = "" disabled selected>Select Division</option>    
           <option value = "Doctor">Doctors Division</option>
            <option value = "Dentist">Dentist Division</option>
            <option value = "Physiotherapist">Physiotherapy Division</option>
            <option value = "Pharmacist">Pharmacy Division</option>
        </select>

        <script>

$(function() {
    $("#fwd_dept").val("<?php echo $row['fwd_dept']; ?>");
});

</script>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Condition Priority </label>
        <select name="condition_priority" readonly class="form-username form-control" id="condition_priority" required>
        <option value = "" disabled selected>Select Priority</option>    
           <option value = "critical">Critical Priority</option>
            <option value = "medium">Medium Priority</option>
            <option value = "low">Low Priority</option>
            
        </select>

        <script>

$(function() {
    $("#condition_priority").val("<?php echo $row['condition_priority']; ?>");
});

</script>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label  for="form-username">Over Ride Waiting time</label>
<input type="text" name="overide"   value = "<?php echo $row['nurse_other']; ?>" placeholder="Waiting Time" class="form-username form-control" required>
</div>
</div>

</div>

<div align = "center">
<input class="btn btn-primary" type="button" onclick="printDiv('print-table')" value="Print a waiting slip">
</div>


</form>

</div>
<script>
function printDiv(divName) {
 //alert('s');
 var printContents = '<div id="print-content"><form><table width="30%"><tbody>';
  var inputs, index;

inputs = document.getElementsByTagName('input');
for (index = 0; index < inputs.length - 1; ++index) {
  
   var fieldName = inputs[index].name;
   var fieldValue = inputs[index].value;

  printContents +='<tr><td><label>'+fieldName+'</label></td>';
  printContents +='<td>'+fieldValue+'</td></tr>';
}
  
var z = 8; // if you had more labels remeber to change this value 
inputs = document.getElementsByTagName('textarea');
for (index = 0; index < inputs.length; ++index) {
  
   //var fieldName = inputs[index].name;
    var fieldName = document.getElementsByTagName('label')[z].textContent;
   var fieldValue = inputs[index].value;

  printContents +='<tr><td colspan="2"><label>'+fieldName+'</label><br>'+fieldValue+'</td></tr>';
++z;
}
  
   printContents +='</tbody></table>';

 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>

<br />
</div>
</div>

<?php
include("footern3.php");
?>