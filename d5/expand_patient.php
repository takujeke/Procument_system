<?php
include("headern3.php");
include("dbcon.php");
$row_user = $_GET['id'];
$query = "SELECT * FROM patients WHERE id ='$row_user' "; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_data']))
{	
include_once('dbcon.php');

$so_name  = $_POST['so_name'];
$me_name = $_POST['me_name'];
$po_address = $_POST['po_address'];
$phone  = $_POST['phone'];
$idnumber  = $_POST['idnumber'];
$name_employer = $_POST['name_employer'];
$patient_name  = $_POST['patient_name'];
$rel_member = $_POST['rel_member'];
$member_num = $_POST['member_num'];
$member_suffix = $_POST['member_suffix'];
$patient_dob = $_POST['patient_dob'];
$claim_number = $_POST['claim_number'];
$date_stamp = $_POST['date_stamp'];
$roadtraffic = $_POST['roadtraffic'];
$accidentwork = $_POST['accidentwork'];
$accidenthome = $_POST['accidenthome'];
$other_specify = $_POST['other_specify'];
$sig_fullname1 = $_POST['sig_fullname1'];
$sig_fullname2 = $_POST['sig_fullname2'];
$sig_fullname3 = $_POST['sig_fullname3'];
$sig_fullname4 = $_POST['sig_fullname4'];
$sig_fullname5 = $_POST['sig_fullname5'];
$sig_fullname6 = $_POST['sig_fullname6'];
$sig_date1 = $_POST['sig_date1'];
$sig_date2 = $_POST['sig_date2'];
$sig_date3 = $_POST['sig_date3'];
$sig_date4 = $_POST['sig_date4'];
$sig_date5 = $_POST['sig_date5'];
$sig_date6 = $_POST['sig_date6'];
$sig_relationship1 = $_POST['sig_relationship1'];
$sig_relationship2 = $_POST['sig_relationship2'];
$sig_relationship3 = $_POST['sig_relationship3'];
$sig_relationship4 = $_POST['sig_relationship4'];
$sig_relationship5 = $_POST['sig_relationship5'];
$sig_relationship6 = $_POST['sig_relationship6'];
$sig_fee1 = $_POST['sig_fee1'];
$sig_fee2 = $_POST['sig_fee2'];
$sig_fee3 = $_POST['sig_fee3'];
$sig_fee4 = $_POST['sig_fee4'];
$sig_fee5 = $_POST['sig_fee5'];
$sig_fee6 = $_POST['sig_fee6'];
$ahfoz = $_POST['ahfoz'];
$refpracti = $_POST['refpracti']; 
$dateclosed = $_POST['dateclosed'];
$anesthetist = $_POST['anesthetist'];
$accountref = $_POST['accountref'];
$surgical_ass = $_POST['surgical_ass'];
$rel_ahfoz1 = $_POST['rel_ahfoz1'];
$rel_ahfoz2 = $_POST['rel_ahfoz2'];
$rel_ahfoz3 = $_POST['rel_ahfoz3'];
$tariff1 = $_POST['tariff1'];
$tariff2 = $_POST['tariff2'];
$tariff3 = $_POST['tariff3'];
$tariff4 = $_POST['tariff4'];
$tariff5 = $_POST['tariff5'];
$mod1a = $_POST['mod1a'];
$mod1b = $_POST['mod1b'];
$mod1c = $_POST['mod1c'];
$mod1d = $_POST['mod1d'];
$mod1e = $_POST['mod1e'];
$qty1 = $_POST['qty1'];
$qty2 = $_POST['qty2'];
$qty3 = $_POST['qty3'];
$qty4 = $_POST['qty4'];
$qty5 = $_POST['qty5'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$date3 = $_POST['date3'];
$date4 = $_POST['date4'];
$date5 = $_POST['date5'];
$fee1 = $_POST['fee1'];
$fee2 = $_POST['fee2'];
$fee3 = $_POST['fee3'];
$fee4 = $_POST['fee4'];
$fee5 = $_POST['fee5'];
$description1 = $_POST['description1'];
$description2 = $_POST['description2'];
$description3 = $_POST['description3'];
$description4 = $_POST['description4'];
$description5 = $_POST['description5'];
$grosstotal = $_POST['grosstotal'];
$diagnosis= $_POST['diagnosis'];
$update_id= $_POST['update_id'];


$nurse_other = $_POST['nurse_other'];
$observations = $_POST['observations'];
$vital_inputs= $_POST['vital_inputs'];
$fwd_dept= $_POST['fwd_dept'];
$condition_priority = $_POST['condition_priority'];
$captured_nurse = $_POST['captured_nurse'];



$sql = "UPDATE patients SET so_name='$so_name',me_name='$me_name',po_address='$po_address',phone='$phone',idnumber='$idnumber',name_employer='$name_employer',patient_name='$patient_name',rel_member='$rel_member',member_num='$member_num',member_suffix='$member_suffix',patient_dob='$patient_dob',claim_number='$claim_number',date_stamp='$date_stamp',roadtraffic='$roadtraffic',accidentwork='$accidentwork',accidenthome='$accidenthome',other_specify='$other_specify',sig_fullname1='$sig_fullname1',sig_fullname2='$sig_fullname2',sig_fullname3='$sig_fullname3',sig_fullname4='$sig_fullname4',sig_fullname5='$sig_fullname5',sig_fullname6='$sig_fullname6',sig_date1='$sig_date1',sig_date2='$sig_date2',sig_date3='$sig_date3',sig_date4='$sig_date4',sig_date5='$sig_date5',sig_date6='$sig_date6',sig_relationship1='$sig_relationship1',sig_relationship2='$sig_relationship2',sig_relationship3='$sig_relationship3',sig_relationship4='$sig_relationship4',sig_relationship5='$sig_relationship5',sig_relationship6='$sig_relationship6',sig_fee1='$sig_fee1',sig_fee2='$sig_fee2',sig_fee3='$sig_fee3',sig_fee4='$sig_fee4',sig_fee5='$sig_fee5',sig_fee6='$sig_fee6',ahfoz='$ahfoz',refpracti='$refpracti',dateclosed='$dateclosed',anesthetist='$anesthetist',accountref='$accountref',surgical_ass='$surgical_ass',rel_ahfoz1='$rel_ahfoz1',rel_ahfoz2='$rel_ahfoz2',rel_ahfoz3='$rel_ahfoz3',tariff1='$tariff1',tariff2='$tariff2',tariff3='$tariff3',tariff4='$tariff4',tariff5='$tariff5',mod1a='$mod1a',mod1b='$mod1b',mod1c='$mod1c',mod1d='$mod1d',mod1e='$mod1e',qty1='$qty1',qty2='$qty2',qty3='$qty3',qty4='$qty4',qty5='$qty5',date1='$date1',date2='$date2',date3='$date3',date4='$date4',date5='$date5',fee1='$fee1',fee2='$fee2',fee3='$fee3',fee4='$fee4',fee5='$fee5',description1='$description1',description2='$description2',description3='$description3',description4='$description4',description5='$description5',grosstotal='$grosstotal',diagnosis='$diagnosis',vital_inputs='$vital_inputs',nurse_other='$nurse_other',observations='$observations',fwd_dept='$fwd_dept',condition_priority='$condition_priority',captured_nurse='$captured_nurse' WHERE id = '$update_id'";


if ($conn->query($sql) == TRUE) {
    ?>
   <!--success--> 
  <div class="alert alert-success" align="center"><b> Record has been saved and updated</b></div>
    <?php
} else {
    ?> 
    
     <div class="alert alert-danger" align="center"> <?php echo mysqli_error($conn); ?>
    <!--failure--><b> Record update has failed to save</b>
</div>
   <?php
    
    
}
$conn->close();



}

?>
<div class="alert alert-info" >
<div class="row">
<form action="expand_patient.php" method="post">
<div class="col-sm-6">
<b><u>PERSONAL DETAILS</u></b>


<div class="form-group">
<label>Name of soceity</label>
<input type="text" name="so_name" value = "<?php echo $row['so_name']; ?>" readonly placeholder="Name of society" class="form-username form-control" required>
<input type="hidden" name="update_id" value = "<?php echo $row_user; ?>" >
</div>

<div class="form-group">
<label  for="form-username">Members name</label>
<input type="text" name="me_name" placeholder="Members name" readonly value = "<?php echo $row['me_name']; ?>" class="form-username form-control" required>
</div>

<div class="form-group">
<label  for="form-username">Postal Address</label>
<textarea name="po_address" placeholder="Postal address" readonly class="form-username form-control" required> <?php echo $row['po_address']; ?></textarea>
</div>

<div class="form-group">
<label  for="form-username">Phone number</label>
<input type="number" name="phone" readonly placeholder="Phone number (e.g 0774449734)" value = "<?php echo $row['phone']; ?>" class="form-username form-control" required>
</div>

<div class="form-group">
<label  for="form-username">ID number</label>
<input type="text" name="idnumber" readonly placeholder="ID number" value = "<?php echo $row['idnumber']; ?>" class="form-username form-control" required>
</div>
<div class="form-group">
<label  for="form-username">Name of employer</label>
<input type="text" name="name_employer" readonly value = "<?php echo $row['name_employer']; ?>" placeholder="Name of employer" class="form-username form-control" required>
</div>


</div>
<div class="col-sm-6">
<b><u>PATIENT DETAILS</u></b>

<div class="form-group">
<label>Patient Name</label>
<input type="text" name="patient_name" readonly  value = "<?php echo $row['patient_name']; ?>" placeholder="Name of patient" class="form-username form-control" required>
</div>

<div class="form-group">
<label  for="form-username">Relationship to member</label>
<input type="text" name="rel_member" readonly placeholder="Relationship to member"  value = "<?php echo $row['rel_member']; ?>"  class="form-username form-control" required>
</div>
<div class="form-group">
<label  for="form-username">Member number</label>
<input type="text" name="member_num" readonly placeholder="Member number" value = "<?php echo $row['member_num']; ?>"  class="form-username form-control" required>
</div>

<div class="form-group">
<label  for="form-username">Member suffix</label>
<input type="text" name="member_suffix" readonly placeholder="Member suffix" value = "<?php echo $row['member_suffix']; ?>"  class="form-username form-control" required>
</div>
<div class="form-group">
<label  for="form-username">Patient date of birth</label>
<input type="date" name="patient_dob" readonly placeholder="Patient DOB" value = "<?php echo $row['patient_dob']; ?>"  class="form-username form-control" required>
</div>

<div class="form-group">
<label  for="form-username">Claim number</label>
<input type="text" name="claim_number" readonly placeholder="Claim number" value = "<?php echo $row['claim_number']; ?>"  class="form-username form-control" required>
</div>

<div class="form-group">
<label  for="form-username">Date stamp</label>
<input type="text" name="date_stamp" readonly placeholder="Date stamp" value = "<?php echo $row['date_stamp']; ?>"  class="form-username form-control" required>
</div>

</div>

<div class="col-sm-3">
<div class="form-group alert alert-danger" align="center">
<label  for="form-username">Road trafic accident</label>
<input type="text" name="roadtraffic"  value = "<?php echo $row['roadtraffic']; ?>" readonly class="form-username form-control" >
</div>

</div>
<div class="col-sm-3">
<div class="form-group alert alert-danger" align="center">
<label  for="form-username">Accident at work</label>
<input type="text" name="accidentwork"  value = "<?php echo $row['accidentwork']; ?>" readonly class="form-username form-control" >
</div>
</div>
<div class="col-sm-3">
<div class="form-group alert alert-danger" align="center">
<label  for="form-username">Accident at home</label>
<input type="text" name="accidenthome"  value = "<?php echo $row['accidenthome']; ?>" readonly  class="form-username form-control" >
</div>
</div>
<div class="col-sm-3">
<div class="form-group alert alert-danger " align="center ">
<label  for="form-username">Other specify</label>
<input type="text" name="other_specify" value = "<?php echo $row['other_specify']; ?>" readonly placeholder="Other (Specify)" class="form-username form-control" >
</div>
</div>

<div class="col-sm-4 alert alert-danger">
<font size="-2"><b>I confirm that the details given above are correct and that the amount claimed herein is not claimable from another
source, and that the patient is a member or dependant of the medical aid society shown above . I authorize the provider to disclose the 
nature of illness to the medical aid society for its confidential use and i agree that no awards will be made for this treatment unless contributions
are received in respect of the treatment period.</b>
</font>
</div>
<div class="col-sm-2 alert alert-danger">
<label>Full Name</label>
<input type="text" name="sig_fullname1" readonly value = "<?php echo $row['sig_fullname1']; ?>"  placeholder="Full name" class="form-username form-control" >
<input type="text" name="sig_fullname2" readonly value = "<?php echo $row['sig_fullname2']; ?>" placeholder="Full name" class="form-username form-control" >
<input type="text" name="sig_fullname3" readonly value = "<?php echo $row['sig_fullname3']; ?>" placeholder="Full name" class="form-username form-control" >
<input type="text" name="sig_fullname4" readonly value = "<?php echo $row['sig_fullname4']; ?>" placeholder="Full name" class="form-username form-control" >
<input type="text" name="sig_fullname5" readonly value = "<?php echo $row['sig_fullname5']; ?>" placeholder="Full name" class="form-username form-control" >
<input type="text" name="sig_fullname6" readonly value = "<?php echo $row['sig_fullname6']; ?>" placeholder="Full name" class="form-username form-control" >

</div>
<div class="col-sm-2 alert alert-danger">
<label> Date</label>
<input type="text" name="sig_date1"  readonly value = "<?php echo $row['sig_date1']; ?>" placeholder="Date" class="form-username form-control" >
<input type="text" name="sig_date2" readonly value = "<?php echo $row['sig_date2']; ?>" placeholder="Date" class="form-username form-control" >
<input type="text" name="sig_date3" readonly value = "<?php echo $row['sig_date3']; ?>" placeholder="Date" class="form-username form-control" >
<input type="text" name="sig_date4" readonly value = "<?php echo $row['sig_date4']; ?>" placeholder="Date" class="form-username form-control" >
<input type="text" name="sig_date5" readonly value = "<?php echo $row['sig_date5']; ?>" placeholder="Date" class="form-username form-control" >
<input type="text" name="sig_date6" readonly value = "<?php echo $row['sig_date6']; ?>" placeholder="Date" class="form-username form-control" >
</div>
<div class="col-sm-2 alert alert-danger">
<label>Relationship</label>
<input type="text" name="sig_relationship1" readonly value = "<?php echo $row['sig_relationship1']; ?>" placeholder="Relationship" class="form-username form-control" >
<input type="text" name="sig_relationship2" readonly value = "<?php echo $row['sig_relationship2']; ?>" placeholder="Relationship" class="form-username form-control" >
<input type="text" name="sig_relationship3" readonly value = "<?php echo $row['sig_relationship3']; ?>" placeholder="Relationship" class="form-username form-control" >
<input type="text" name="sig_relationship4" readonly  value = "<?php echo $row['sig_relationship4']; ?>" placeholder="Relationship" class="form-username form-control" >
<input type="text" name="sig_relationship5" readonly value = "<?php echo $row['sig_relationship5']; ?>" placeholder="Relationship" class="form-username form-control" >
<input type="text" name="sig_relationship6" readonly value = "<?php echo $row['sig_relationship6']; ?>" placeholder="Relationship" class="form-username form-control" >

</div>
<div class="col-sm-2 alert alert-danger">
<label> Fee </label>
<input type="text" name="sig_fee1" readonly value = "<?php echo $row['sig_fee1']; ?>" placeholder="Fee" class="form-username form-control" >
<input type="text" name="sig_fee2" readonly value = "<?php echo $row['sig_fee2']; ?>" placeholder="Fee" class="form-username form-control" >
<input type="text" name="sig_fee3" readonly value = "<?php echo $row['sig_fee3']; ?>" placeholder="Fee" class="form-username form-control" >
<input type="text" name="sig_fee4" readonly value = "<?php echo $row['sig_fee4']; ?>"  placeholder="Fee" class="form-username form-control" >
<input type="text" name="sig_fee5" readonly value = "<?php echo $row['sig_fee5']; ?>" placeholder="Fee" class="form-username form-control" >
<input type="text" name="sig_fee6" readonly value = "<?php echo $row['sig_fee6']; ?>" placeholder="Fee" class="form-username form-control" >
</div>

<div class="col-sm-8 alert alert-danger" align ="center"><b><u>FOR COMPLETION BY PROVIDER OF SERVICE</b></u></div>
<div class="col-sm-4 alert alert-warning" align="center"><b><u>FOR USE BY MEDICAL AID SOCIETIES</u></b></div>

<div class="col-sm-2 alert alert-danger">
<b>Afhoz Number</b>
<input type="text" name="ahfoz" readonly placeholder="Ahfoz Number" value = "<?php echo $row['ahfoz']; ?>" class="form-username form-control" >
<b>Refferal practitioner</b>
<input type="text" name="refpracti" readonly value = "<?php echo $row['refpracti']; ?>" placeholder="Refferal Practitioner" class="form-username form-control" >
</div>
<div class="col-sm-3 alert alert-danger">
<b>Date claim closed</b>
<input type="text" name="dateclosed" readonly placeholder="Date closed" value = "<?php echo $row['dateclosed']; ?>" class="form-username form-control" >
<b>Name of anesthetist (if any)</b>
<input type="text" name="anesthetist" readonly placeholder="Anesthetist" value = "<?php echo $row['anesthetist']; ?>" class="form-username form-control" >
</div>
<div class="col-sm-3 alert alert-danger">
<b>Account Ref No</b>
<input type="text" name="accountref" readonly placeholder="Account Ref" value = "<?php echo $row['accountref']; ?>"  class="form-username form-control" >
<b>Name of surgical assistant</b>
<input type="text" name="surgical_ass" readonly placeholder="Surgical assistant" value = "<?php echo $row['surgical_ass']; ?>"  class="form-username form-control" >
</div>
<div class="col-sm-4 alert alert-warning">
<b>Relevant ahfoz numbers</b>
<input type="text" name="rel_ahfoz1" readonly placeholder="Ahfoz numbers 1"  value = "<?php echo $row['rel_ahfoz1']; ?>" class="form-username form-control" >
<input type="text" name="rel_ahfoz2" readonly placeholder="Ahfoz numbers 2"  value = "<?php echo $row['rel_ahfoz2']; ?>" class="form-username form-control" >
<input type="text" name="rel_ahfoz3" readonly placeholder="Ahfoz numbers 3"  value = "<?php echo $row['rel_ahfoz3']; ?>" class="form-username form-control" >
</div>

<div class="col-sm-2 alert alert-warning"><b>Tariff No</b>
<input type="text" name="tariff1" readonly placeholder="Tariff Code" value = "<?php echo $row['tariff1']; ?>" class="form-username form-control" >
<input type="text" name="tariff2" readonly placeholder="Tariff Code" value = "<?php echo $row['tariff2']; ?>" class="form-username form-control" >
<input type="text" name="tariff3" readonly placeholder="Tariff Code" value = "<?php echo $row['tariff3']; ?>" class="form-username form-control" >
<input type="text" name="tariff4" readonly placeholder="Tariff Code" value = "<?php echo $row['tariff4']; ?>" class="form-username form-control" >
<input type="text" name="tariff5" readonly placeholder="Tariff Code" value = "<?php echo $row['tariff5']; ?>" class="form-username form-control" >
</div>
<div class="col-sm-1 alert alert-warning"><b>Mods</b>
<input type="text" name="mod1a" readonly placeholder="Mods" value = "<?php echo $row['mod1a']; ?>" class="form-username form-control" >
<input type="text" name="mod1b" readonly placeholder="Mods" value = "<?php echo $row['mod1b']; ?>" class="form-username form-control" >
<input type="text" name="mod1c" readonly placeholder="Mods" value = "<?php echo $row['mod1c']; ?>" class="form-username form-control" >
<input type="text" name="mod1d" readonly placeholder="Mods"  value = "<?php echo $row['mod1d']; ?>" class="form-username form-control" >
<input type="text" name="mod1e" readonly placeholder="Mods"  value = "<?php echo $row['mod1e']; ?>" class="form-username form-control" >
</div>
<div class="col-sm-1 alert alert-warning"><b>Qty</b>
<input type="number" name="qty1" readonly placeholder="qty" value = "<?php echo $row['qty1']; ?>" class="form-username form-control" >
<input type="number" name="qty2" readonly placeholder="qty" value = "<?php echo $row['qty2']; ?>" class="form-username form-control" >
<input type="number" name="qty3" readonly placeholder="qty" value = "<?php echo $row['qty3']; ?>" class="form-username form-control" >
<input type="number" name="qty4" readonly placeholder="qty" value = "<?php echo $row['qty4']; ?>" class="form-username form-control" >
<input type="number" name="qty5" readonly placeholder="qty" value = "<?php echo $row['qty5']; ?>" class="form-username form-control" >
</div>

<div class="col-sm-2 alert alert-warning"><b>Date</b>
<input type="text" name="date1" readonly placeholder="Date" value = "<?php echo $row['date1']; ?>" class="form-username form-control" >
<input type="text" name="date2" readonly placeholder="Date" value = "<?php echo $row['date2']; ?>" class="form-username form-control" >
<input type="text" name="date3" readonly placeholder="Date" value = "<?php echo $row['date3']; ?>" class="form-username form-control" >
<input type="text" name="date4" readonly placeholder="Date" value = "<?php echo $row['date4']; ?>" class="form-username form-control" >
<input type="text" name="date5" readonly placeholder="Date" value = "<?php echo $row['date5']; ?>" class="form-username form-control" >
</div>
<div class="col-sm-2 alert alert-warning"><b>Fee</b>
<input type="text" name="fee1" readonly placeholder="Fee" value = "<?php echo $row['fee1']; ?>" class="form-username form-control" >
<input type="text" name="fee2" readonly placeholder="Fee" value = "<?php echo $row['fee2']; ?>" class="form-username form-control" >
<input type="text" name="fee3" readonly placeholder="Fee" value = "<?php echo $row['fee3']; ?>" class="form-username form-control" >
<input type="text" name="fee4" readonly placeholder="Fee" value = "<?php echo $row['fee4']; ?>" class="form-username form-control" >
<input type="text" name="fee5" readonly placeholder="Fee" value = "<?php echo $row['fee5']; ?>" class="form-username form-control" >
</div>
<div class="col-sm-4 alert alert-warning"><b>Description</b>
<input type="text" readonly name="description1" value = "<?php echo $row['description1']; ?>" placeholder="Description" class="form-username form-control" >
<input type="text" readonly name="description2" value = "<?php echo $row['description2']; ?>" placeholder="Description" class="form-username form-control" >
<input type="text" readonly name="description3" value = "<?php echo $row['description3']; ?>" placeholder="Description" class="form-username form-control" >
<input type="text" readonly name="description4" value = "<?php echo $row['description4']; ?>" placeholder="Description" class="form-username form-control" >
<input type="text" readonly name="description5" value = "<?php echo $row['description5']; ?>" placeholder="Description" class="form-username form-control" >
</div>
<div class="col-sm-6 alert alert-warning"> 
<input type="text" readonly name="diagnosis" placeholder="Write a diagnosis" value = "<?php echo $row['diagnosis']; ?>" class="form-username form-control" >
</div>
<div class="col-sm-2 alert alert-warning"><input type="text" readonly value = "<?php echo $row['grosstotal']; ?>" name="grosstotal" placeholder="($) Gross Total" class="form-username form-control border" ></div>
<div class="col-sm-4"></div>
<br />
<div class="col-sm-12">

</div>

</div>

</div>

<div class="alert alert-info" >
<div class = "alert alert-danger"><label>Triage a Patient</label></div>
<div class="row">
<div class="col-sm-3">
<div class="form-group">
<label>Foward Patient to Department </label>
        <select name="fwd_dept" class="form-username form-control" id="fwd_dept" required>
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

<div class="form-group">
<label>Condition Priority </label>
        <select name="condition_priority" class="form-username form-control" id="condition_priority" required>
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
<div class="col-sm-3">
<div class="form-group">
<label  for="form-username">Vital Patient Inputs</label>
<textarea name="vital_inputs" placeholder="Vital Inputs"  class="form-username form-control" required> <?php echo $row['vital_inputs']; ?></textarea>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<label  for="form-username">Patient Observations</label>
<textarea name="observations" placeholder="Observations"  class="form-username form-control" required> <?php echo $row['observations']; ?></textarea>
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
<label>Other information</label>
<input type="hidden" name="captured_nurse" value="<?php echo $userData['first_name'].' '.$userData['last_name']; ?>" />
<input type="text" name="nurse_other"  value = "<?php echo $row['nurse_other']; ?>" placeholder="Other Information, Prescribed RX" class="form-username form-control" required>
</div>
</div>

</div>
<div class="send-button">
<input class="btn btn-primary" type="submit" name="update_data" value="Update Patient Record">
</form>
<br />
</div>
</div>


<?php
include("footern3.php");
?>-