<?php
include("headerd5.php");
include("dbcon.php");
$row_user = $_GET['id'];
$query = "SELECT * FROM patients WHERE id ='$row_user' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update_data'])) {
    include_once('dbcon.php');

    $update_id = $_POST['update_id'];
    $so_name = $_POST['so_name'];
    $patient_name = $_POST['patient_name'];
    $prescription_doc = $_POST['prescription_doc'];
    $refferal_doc = $_POST['refferal_doc'];
    $diagnosis = $_POST['diagnosis'];
    $captured_doc = $_POST['captured_doc'];
    $doctors_notes = $_POST['doctors_notes'];
    $medical_history = $_POST['medical_history'];
    $general_findings = $_POST['general_findings'];

    $sql = "UPDATE patients SET so_name='$so_name',patient_name='$patient_name',prescription_doc='$prescription_doc',refferal_doc='$refferal_doc',captured_doc='$captured_doc',diagnosis='$diagnosis',doctors_notes='$doctors_notes', medical_history='$medical_history',general_findings='$general_findings' WHERE id = '$update_id'";


    if ($conn->query($sql) == TRUE) {
        ?>
        <!--success-->
        <div class="alert alert-success" align="center"><b>Doctors assessment has been saved successfully</b></div>
        <?php
    } else {
        ?>

        <div class="alert alert-danger" align="center"> <?php echo mysqli_error($conn); ?>
            <!--failure--><b>Doctors prescription update has failed to save</b>
        </div>
        <?php


    }
    $conn->close();
}

?>
    <div class="alert alert-info">
        <div class="row">
            <form action="expand_patient1.php" method="post">

                <div class="col-sm-12">
                    <p align="center" class="alert alert-danger"><B>Doctors Assessment</b></p>

                    <div class="form-group">
                        <label for="form-username">Patient Name</label>
                        <input type="text" name="patient_name" placeholder="Patient Name" readonly
                               value="<?php echo $row['patient_name']; ?>" class="form-username form-control" required>
                        <input type="hidden" name="captured_doc"
                               value="<?php echo $userData['first_name'] . ' ' . $userData['last_name']; ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="form-username">Medical Insurance</label>
                        <input type="text" name="so_name" placeholder="Medical Insurance" readonly
                               value="<?php echo $row['so_name']; ?>" class="form-username form-control" required>
                    </div>


                    <div class="col-sm-2 alert alert-warning"><b>Tariff No</b>
                        <input type="text" name="tariff1" placeholder="Tariff Code" readonly
                               value="<?php echo $row['tariff1']; ?>" class="form-username form-control">
                        <input type="text" name="tariff2" placeholder="Tariff Code" readonly
                               value="<?php echo $row['tariff2']; ?>" class="form-username form-control">
                        <input type="text" name="tariff3" placeholder="Tariff Code" readonly
                               value="<?php echo $row['tariff3']; ?>" class="form-username form-control">
                        <input type="text" name="tariff4" placeholder="Tariff Code" readonly
                               value="<?php echo $row['tariff4']; ?>" class="form-username form-control">
                        <input type="text" name="tariff5" placeholder="Tariff Code" readonly
                               value="<?php echo $row['tariff5']; ?>" class="form-username form-control">
                    </div>
                    <div class="col-sm-1 alert alert-warning"><b>Mods</b>
                        <input type="text" name="mod1a" placeholder="Mods" readonly value="<?php echo $row['mod1a']; ?>"
                               class="form-username form-control">
                        <input type="text" name="mod1b" placeholder="Mods" readonly value="<?php echo $row['mod1b']; ?>"
                               class="form-username form-control">
                        <input type="text" name="mod1c" placeholder="Mods" readonly value="<?php echo $row['mod1c']; ?>"
                               class="form-username form-control">
                        <input type="text" name="mod1d" placeholder="Mods" readonly value="<?php echo $row['mod1d']; ?>"
                               class="form-username form-control">
                        <input type="text" name="mod1e" placeholder="Mods" readonly value="<?php echo $row['mod1e']; ?>"
                               class="form-username form-control">
                    </div>
                    <div class="col-sm-1 alert alert-warning"><b>Qty</b>
                        <input type="number" name="qty1" placeholder="qty" readonly value="<?php echo $row['qty1']; ?>"
                               class="form-username form-control">
                        <input type="number" name="qty2" placeholder="qty" readonly value="<?php echo $row['qty2']; ?>"
                               class="form-username form-control">
                        <input type="number" name="qty3" placeholder="qty" readonly value="<?php echo $row['qty3']; ?>"
                               class="form-username form-control">
                        <input type="number" name="qty4" placeholder="qty" readonly value="<?php echo $row['qty4']; ?>"
                               class="form-username form-control">
                        <input type="number" name="qty5" placeholder="qty" readonly value="<?php echo $row['qty5']; ?>"
                               class="form-username form-control">
                    </div>

                    <div class="col-sm-2 alert alert-warning"><b>Date</b>
                        <input type="text" name="date1" placeholder="Date" readonly value="<?php echo $row['date1']; ?>"
                               class="form-username form-control">
                        <input type="text" name="date2" placeholder="Date" readonly value="<?php echo $row['date2']; ?>"
                               class="form-username form-control">
                        <input type="text" name="date3" placeholder="Date" readonly value="<?php echo $row['date3']; ?>"
                               class="form-username form-control">
                        <input type="text" name="date4" placeholder="Date" readonly value="<?php echo $row['date4']; ?>"
                               class="form-username form-control">
                        <input type="text" name="date5" placeholder="Date" readonly value="<?php echo $row['date5']; ?>"
                               class="form-username form-control">
                    </div>
                    <div class="col-sm-2 alert alert-warning"><b>Fee</b>
                        <input type="text" name="fee1" placeholder="Fee" readonly value="<?php echo $row['fee1']; ?>"
                               class="form-username form-control">
                        <input type="text" name="fee2" placeholder="Fee" readonly value="<?php echo $row['fee2']; ?>"
                               class="form-username form-control">
                        <input type="text" name="fee3" placeholder="Fee" readonly value="<?php echo $row['fee3']; ?>"
                               class="form-username form-control">
                        <input type="text" name="fee4" placeholder="Fee" readonly value="<?php echo $row['fee4']; ?>"
                               class="form-username form-control">
                        <input type="text" name="fee5" placeholder="Fee" readonly value="<?php echo $row['fee5']; ?>"
                               class="form-username form-control">
                    </div>
                    <div class="col-sm-4 alert alert-warning"><b>Description</b>
                        <input type="text" name="description1" readonly value="<?php echo $row['description1']; ?>"
                               placeholder="Description" class="form-username form-control">
                        <input type="text" name="description2" readonly value="<?php echo $row['description2']; ?>"
                               placeholder="Description" class="form-username form-control">
                        <input type="text" name="description3" readonly value="<?php echo $row['description3']; ?>"
                               placeholder="Description" class="form-username form-control">
                        <input type="text" name="description4" readonly value="<?php echo $row['description4']; ?>"
                               placeholder="Description" class="form-username form-control">
                        <input type="text" name="description5" readonly value="<?php echo $row['description5']; ?>"
                               placeholder="Description" class="form-username form-control">
                    </div>


                    <div class="form-group">
                        <label for="form-username">Doctors Notes</label>
                        <textarea name="doctors_notes" placeholder="Write a doctors note"
                                  class="form-username form-control"
                                  required> <?php echo $row['doctors_notes']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="form-username">Medical History and Complains</label>
                        <textarea name="medical_history" placeholder="Write medical history"
                                  class="form-username form-control"
                                  required> <?php echo $row['medical_history']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="form-username">Examination General Findings</label>
                        <textarea name="general_findings" placeholder="Write General Findings"
                                  class="form-username form-control"
                                  required> <?php echo $row['general_findings']; ?></textarea>
                    </div>




                    <div class="form-group">
                        <label>Prescriptions</label>
                        <input type="text" name="prescription_doc" value="<?php echo $row['prescription_doc']; ?>"
                               placeholder="Create Presciption" class="form-username form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Lab Investigations (Xray/Lab)</label>
                        <input type="text" name="refferal_doc" value="<?php echo $row['refferal_doc']; ?>"
                               placeholder="Provide a Lab Refferal (if any)" class="form-username form-control"
                               required>
                        <input type="hidden" name="update_id" value="<?php echo $row_user; ?>">
                    </div>

                    <div class="form-group">
                        <label>Diagnosis</label>
                        <input type="text" name="diagnosis" value="<?php echo $row['diagnosis']; ?>"
                               placeholder="Provide a diagnosis" class="form-username form-control" required>

                    </div>

                </div>

                <div class="col-sm-12">
                    <div class="send-button" align="center">
                        <input class="btn btn-primary" type="submit" name="update_data" value="Create Assessment">
                    </div>
                </div>

            </form>

            <br/>
        </div>
    </div>

<?php
include("footerd5.php");
?>