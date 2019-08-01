<?php include 'headern3.php';

if (isset($_POST['update_data'])) {
                include_once 'dbcon.php';

                $fwd_dept = $_POST['fwd_dept'];
                $condition_priority = $_POST['condition_priority'];
                
    
            ?>
            <div class="alert alert-success" >
            <?php
               $query1 = "SELECT * FROM patients WHERE fwd_dept = '$fwd_dept' AND condition_priority='$condition_priority' ORDER BY id ASC";
               $result = mysqli_query($conn, $query1);
            if ($result->num_rows > 0) {
            ?>
            <table class=" table  table-bordered table-responsive table-hover">
            <u><b>WAITING QUE</b></u>
            <thead>
            <tr>

            <th>Patient Name</th>
            <th>Observations</th>
            <th>Vital Inputs</th>
            <th>Department</th>
            <th>Condition</th>
            <th>Visit Date</th>
            <th></th>

            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                          
                ?>
                <tr>
                <td>
                <?php echo $row['patient_name']; ?></td>
                <td><?php echo $row['observations']; ?></td>
                <td><?php echo $row['vital_inputs']; ?></td>
                <td><?php echo $row['fwd_dept']; ?></td>
                <td><?php echo $row['condition_priority']; ?></td>
                <td><?php echo $row['date_stamp']; ?></td>
                <td><a href="r1.php?id=<?php echo $row['id'];?>" class="btn btn-success">Create Slip</a></td>
                </tr>
                <?php

                        }
                        ?>
            </table>
            <?php

            } else {
                        ?>
            <b>No monthly report matching the period selected has been found</b>
            <?php
            }
                    ?>
            </div>
            <?php
            $conn->close();

            
            }
?>
<div class="alert alert-info" >
<label><u>GENERATE WAITING SLIP</u></label>
<div class="row">
<form action="reports.php" method="POST">
<div class="col-sm-4">
<div class="form-group">
<label>Condition Priority </label>
        <select name="condition_priority" class="form-username form-control" id="condition_priority" required>
        <option value = "" disabled selected>Select Priority</option>    
        <option value = "critical">Critical Priority</option>
        <option value = "medium">Medium Priority</option>
        <option value = "low">Low Priority</option>
            
        </select>



</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Which Department to triage to ? </label>
<select name="fwd_dept" class="form-username form-control" id="fwd_dept" required>
        <option value = "" disabled selected>Select Division</option>    
           <option value = "Doctor">Doctors Division</option>
            <option value = "Dentist">Dentist Division</option>
            <option value = "Physiotherapist">Physiotherapy Division</option>
            <option value = "Pharmacist">Pharmacy Division</option>
        </select></div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label>Run</label><br />
<input class="btn btn-primary" type="submit" name="update_data" value="Process">
</div>
<div>
</form>
</div>
</div>
</div>
</div>



<?php include 'footern3.php';?>
