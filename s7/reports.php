<?php include 'headerS7.php';

if (isset($_POST['update_data'])) {
    include_once 'dbcon.php';

    $fwd_dept = $_POST['fwd_dept'];
    $branch = $_POST['branch'];
    $month_form = $_POST['month_form'];
    $day_form = $_POST['day_form'];
    $year_form = $_POST['year_form'];
    $report = $_POST['report'];

    if ($report == 'report_1') {

        ?>
        <div class="alert alert-success">
            <?php
            $query = "SELECT branch, fwd_dept, SUM(grosstotal) FROM `patients` WHERE fwd_dept = '$fwd_dept' AND branch='$branch'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            // echo $row['SUM(grosstotal)'];
            $query1 = "SELECT * FROM patients WHERE fwd_dept = '$fwd_dept' AND branch='$branch' ORDER BY id ASC";
            $result = mysqli_query($conn, $query1);
            if ($result->num_rows > 0) {
                ?>
                <h4>The total revenue for
                    <?php echo $row["fwd_dept"] . ' department in ' . $row["branch"] . ' ' . $row["year_ph"]; ?> was $
                    <?php echo $row['SUM(grosstotal)']; ?>
                </h4>
                <?php

                ?>
                <table class=" table  table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Diagnosis</th>
                        <th>Payment Method</th>
                        <th>Visit Date</th>
                        <th>Total fee</th>
                    </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['patient_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['diagnosis']; ?>
                            </td>
                            <td>
                                <?php echo $row['so_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['date_stamp']; ?>
                            </td>
                            <td>
                                <?php echo $row['grosstotal']; ?>
                            </td>
                        </tr>
                        <tr></tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <b>No branch report matching the period selected has been found</b>
                <?php
            }
            ?>
        </div>
        <?php
        $conn->close();

    } elseif ($report == 'report_2') {

        ?>
        <div class="alert alert-success">
            <?php
            $query = "SELECT branch, fwd_dept, SUM(grosstotal) FROM `patients` WHERE fwd_dept = '$fwd_dept' AND branch='$branch' AND month_form='$month_form' ";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            // echo $row['SUM(grosstotal)'];
            $query1 = "SELECT * FROM patients WHERE fwd_dept = '$fwd_dept' AND branch='$branch' AND month_form='$month_form' ORDER BY id ASC";
            $result = mysqli_query($conn, $query1);
            if ($result->num_rows > 0) {
                ?>
                <h4>The total branch/monthly revenue for
                    <?php echo $row["fwd_dept"] . ' department in ' . $row["branch"] . ' ' . $row["year_ph"]; ?> was $
                    <?php echo $row['SUM(grosstotal)']; ?>
                </h4>
                <?php

                ?>
                <table class=" table  table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Diagnosis</th>
                        <th>Payment Method</th>
                        <th>Visit Date</th>
                        <th>Total fee</th>
                    </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['patient_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['diagnosis']; ?>
                            </td>
                            <td>
                                <?php echo $row['so_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['date_stamp']; ?>
                            </td>
                            <td>
                                <?php echo $row['grosstotal']; ?>
                            </td>
                        </tr>
                        <tr></tr>
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

    } elseif ($report == 'report_3') {

        ?>
        <div class="alert alert-success">
            <?php
            $query = "SELECT branch, fwd_dept, SUM(grosstotal) FROM `patients` WHERE fwd_dept = '$fwd_dept' AND branch='$branch' AND month_form='$month_form' AND day_form='$day_form' ";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            // echo $row['SUM(grosstotal)'];
            $query1 = "SELECT * FROM patients WHERE fwd_dept = '$fwd_dept' AND branch='$branch' AND month_form='$month_form' AND day_form='$day_form' ORDER BY id ASC";
            $result = mysqli_query($conn, $query1);
            if ($result->num_rows > 0) {
                ?>
                <h4>The total branch/daily revenue for
                    <?php echo $row["fwd_dept"] . ' department in ' . $row["branch"] . ' ' . $row["year_ph"]; ?> was $
                    <?php echo $row['SUM(grosstotal)']; ?>
                </h4>
                <?php

                ?>
                <table class=" table  table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Diagnosis</th>
                        <th>Payment Method</th>
                        <th>Visit Date</th>
                        <th>Total fee</th>
                    </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['patient_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['diagnosis']; ?>
                            </td>
                            <td>
                                <?php echo $row['so_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['date_stamp']; ?>
                            </td>
                            <td>
                                <?php echo $row['grosstotal']; ?>
                            </td>
                        </tr>
                        <tr></tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <b>No daily report matching the period selected has been found</b>
                <?php
            }
            ?>
        </div>
        <?php
        $conn->close();

    } else {


        ?>
        <div class="alert alert-success">
            <?php
            $query = "SELECT branch, fwd_dept, SUM(grosstotal) FROM `patients` WHERE fwd_dept = '$fwd_dept' AND branch='$branch' AND year_form='$year_form' ";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            // echo $row['SUM(grosstotal)'];
            $query1 = "SELECT * FROM patients WHERE fwd_dept = '$fwd_dept' AND branch='$branch' AND year_form='$year_form' ORDER BY id ASC";
            $result = mysqli_query($conn, $query1);
            if ($result->num_rows > 0) {
                ?>
                <h4>The total branch/yearly revenue for
                    <?php echo $row["fwd_dept"] . ' department in ' . $row["branch"] . ' ' . $row["year_ph"]; ?> was $
                    <?php echo $row['SUM(grosstotal)']; ?>
                </h4>
                <?php

                ?>
                <table class=" table  table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Diagnosis</th>
                        <th>Payment Method</th>
                        <th>Visit Date</th>
                        <th>Total fee</th>
                    </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['patient_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['diagnosis']; ?>
                            </td>
                            <td>
                                <?php echo $row['so_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['date_stamp']; ?>
                            </td>
                            <td>
                                <?php echo $row['grosstotal']; ?>
                            </td>
                        </tr>
                        <tr></tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            } else {
                ?>
                <b>No yearly report matching the period selected has been found</b>
                <?php
            }
            ?>
        </div>
        <?php
        $conn->close();

    }

}
?>
    <div class="alert alert-info">
        <label><u>GENERATE BRANCH REPORT</u></label>
        <div class="row">
            <form action="reports.php" method="POST">
                <div class="col-sm-4">
                    <input type="hidden" name="report" value="report_1">
                    <div class="form-group">
                        <label>Which Branch </label>
                        <select name="branch" class="form-username form-control" id="condition_priority"
                                required>
                            <option value="" disabled selected>Select Branch</option>
                            <option value="Bindura">Bindura</option>
                            <option value="Harare">Harare</option>

                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Which Division? </label>
                        <select name="fwd_dept" class="form-username form-control" id="fwd_dept"
                                required>
                            <option value="" disabled selected>Select Division</option>
                            <option value="Doctor">Doctors Division</option>
                            <option value="Dentist">Dentist Division</option>
                            <option value="Physiotherapist">Physiotherapy Division</option>

                        </select></div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Run</label><br/>
                        <input class="btn btn-primary" type="submit" name="update_data" value="Create report">
                    </div>
                    <div>
            </form>
        </div>
    </div>
    </div>
    </div>

    <div class="alert alert-info">
        <label><u>GENERATE BRANCH/MONTHLY REPORT</u></label>
        <div class="row">
            <form action="reports.php" method="POST">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Which Branch </label>
                        <select name="branch" class="form-username form-control" id="condition_priority"
                                required>
                            <option value="" disabled selected>Select Branch</option>
                            <option value="Bindura">Bindura</option>
                            <option value="Harare">Harare</option>

                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Which Month</label>
                        <select name="month_form" class="form-username form-control" id="month_form"
                                required>
                            <option value="" disabled selected>Select month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>


                    </div>
                    <input type="hidden" name="report" value="<?php echo 'report_2'; ?>">
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Which Division? </label>
                        <select name="fwd_dept" class="form-username form-control" id="fwd_dept"
                                required>
                            <option value="" disabled selected>Select Division</option>
                            <option value="Doctor">Doctors Division</option>
                            <option value="Dentist">Dentist Division</option>
                            <option value="Physiotherapist">Physiotherapy Division</option>

                        </select></div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Run</label><br/>
                        <input class="btn btn-primary" type="submit" name="update_data" value="Create report">
                    </div>
                    <div>
            </form>
        </div>
    </div>
    </div>
    </div>


    <div class="alert alert-info">
        <label><u>GENERATE BRANCH/DAILY REPORT</u></label>
        <div class="row">
            <form action="reports.php" method="POST">


                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Which Branch </label>
                        <select name="branch" class="form-username form-control" id="condition_priority"
                                required>
                            <option value="" disabled selected>Select Branch</option>
                            <option value="Bindura">Bindura</option>
                            <option value="Harare">Harare</option>

                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Which Day</label>
                        <input type="number" name="day_form" placeholder="Provide day"
                               class="form-username form-control"
                               required>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Which Month</label>
                        <select name="month_form" class="form-username form-control" id="month_form"
                                required>
                            <option value="" disabled selected>Select month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>


                    </div>
                    <input type="hidden" name="report" value="<?php echo 'report_3'; ?>">
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Which Division? </label>
                        <select name="fwd_dept" class="form-username form-control" id="fwd_dept"
                                required>
                            <option value="" disabled selected>Select Division</option>
                            <option value="Doctor">Doctors Division</option>
                            <option value="Dentist">Dentist Division</option>
                            <option value="Physiotherapist">Physiotherapy Division</option>

                        </select></div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Run</label><br/>
                        <input class="btn btn-primary" type="submit" name="update_data" value="Create report">
                    </div>
                    <div>
            </form>
        </div>
    </div>
    </div>
    </div>

    <div class="alert alert-info">
        <label><u>GENERATE BRANCH/YEARLY REPORT</u></label>
        <div class="row">
            <form action="reports.php" method="POST">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Which Branch </label>
                        <select name="branch" class="form-username form-control" id="condition_priority"
                                required>
                            <option value="" disabled selected>Select Branch</option>
                            <option value="Bindura">Bindura</option>
                            <option value="Harare">Harare</option>

                        </select>
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" name="year_form" placeholder="Provide a year (i.e 2018)"
                               class="form-username form-control" required>
                    </div>
                </div>
                <input type="hidden" name="report" value="<?php echo 'report_4'; ?>">

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Which Division? </label>
                        <select name="fwd_dept" class="form-username form-control" id="fwd_dept"
                                required>
                            <option value="" disabled selected>Select Division</option>
                            <option value="Doctor">Doctors Division</option>
                            <option value="Dentist">Dentist Division</option>
                            <option value="Physiotherapist">Physiotherapy Division</option>

                        </select></div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Run</label><br/>
                        <input class="btn btn-primary" type="submit" name="update_data" value="Create report">
                    </div>
                    <div>
            </form>
        </div>
    </div>
    </div>
    </div>

<?php include 'footerS7.php'; ?>