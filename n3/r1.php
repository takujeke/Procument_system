<?php
include("headern3.php");
include("dbcon.php");
$row_user = $_GET['id'];
$query = "SELECT * FROM patients WHERE id ='$row_user' "; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if($row["condition_priority"] == "critical"){
$time = "15 Minutes";
}elseif($row["condition_priority"] == "medium"){
  $time = "10 Minutes";
}else{
  $time = "5 Minutes";
}

//echo $time;


?>

<div id="print-content" class="alert alert-info"><form>
<table width="100%"  class="table table-bordered">
<tbody>
<tr>
<td><label>Patient Name</label></td>
<td><input name="Patient Name" class="form-control" maxlength="255"  readonly value = "<?php echo $row['patient_name']; ?>" type="text" /></td>
</tr>
<tr>
<td><label>Patient Observations</label></td>
<td><input name="Patient Observations"  class="form-control" readonly value = "<?php echo $row['observations']; ?>" maxlength="255" type="text" /></td>
</tr>
<tr>
<td><label>Vital Inputs</label></td>
<td><input name="Vital Inputs" class="form-control" maxlength="255"  readonly value = "<?php echo $row['vital_inputs']; ?>" type="text" /></td>
</tr>
<tr>
<td><label>Other Information</label></td>
<td><input name="Other Information" maxlength="255"  class="form-control" readonly  value = "<?php echo $row['nurse_other']; ?>" type="text" /></td>
</tr>
<tr>
<td><label>Department fowarded to ?</label></td>
<td><input name="Department fowarded to ?" class="form-control" maxlength="255"  readonly value = "<?php echo $row['fwd_dept']; ?>" type="text" /></td>
</tr>
<tr>
<td><label>Conditon Priority</label></td>
<td><input name="Condition Priority" class="form-control" maxlength="255"  readonly value = "<?php echo $row['condition_priority']; ?>" type="text" /></td>
</tr>
<tr>
<td><label>Override Waiting Period Time</label></td>
<td><input name="Waiting Period Time" class="form-control" maxlength="255"   value = "<?php echo $time; ?>" type="text" /></td>
</tr>

</tbody>
</table>
<input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Waiting Slip" /></form>

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
<?php
include("footern3.php");
?>