<?php include 'headerS7.php';

if (isset($_POST['update_data'])) {
    include_once 'dbcon.php';

    $report = $_POST['report'];
    $month_ph = $_POST['month_ph'];
    $year_ph = $_POST['year_ph'];
    $day_ph = $_POST['day_ph'];

    if ($report == 'Report_1') {

        $query = "SELECT month_ph,year_ph,drugprice_ph,drug_ph, SUM(drugprice_ph) FROM `patients` WHERE month_ph = '$month_ph' AND year_ph='$year_ph' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result)
        ?>
<div class="alert alert-success">
    <?php
if ($row['SUM(drugprice_ph)'] != '') {

            ?>
    <h4>The total sales for the month of
        <?php echo $row["month_ph"] . ' ' . $row["year_ph"]; ?> was $
        <?php echo $row['SUM(drugprice_ph)']; ?>
    </h4>
    <?php

            $query1 = "SELECT * FROM patients WHERE month_ph = '$month_ph' AND year_ph='$year_ph'";
            $result = mysqli_query($conn, $query1);
            ?>
    <table class=" table  table-bordered table-responsive table-hover">
        <thead>
            <tr>

                <th>Drug Name</th>
                <th>Month Dispensed</th>
                <th>Year Dispensed</th>
                <th>Fee Paid</th>

            </tr>
        </thead>
        <?php
while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <tr>
            <td>
                <?php echo $row['drug_ph']; ?>
            </td>
            <td>
                <?php echo $row['month_ph']; ?>
            </td>
            <td>
                <?php echo $row['year_ph']; ?>
            </td>
            <td>
                <?php echo $row['drugprice_ph']; ?>
            </td>
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

    } elseif ($report == 'Report_2') {

        $query = "SELECT month_ph,year_ph,day_ph,SUM(drugprice_ph) FROM `patients` WHERE month_ph = '$month_ph' AND year_ph='$year_ph' AND day_ph='$day_ph' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        ?>
<div class="alert alert-success">
    <?php
if ($row['SUM(drugprice_ph)'] != '') {
            ?>
    <h4>The total daily sales report on
        <?php echo $row["day_ph"] . ' ' . $row["month_ph"] . ' ' . $row["year_ph"]; ?> was $
        <?php echo $row['SUM(drugprice_ph)']; ?>
    </h4>
    <?php
          
          //table definition
            $query1 = "SELECT * FROM patients WHERE month_ph = '$month_ph' AND year_ph='$year_ph' AND day_ph='$day_ph'";
            $result = mysqli_query($conn, $query1);
            ?>
    <table class=" table  table-bordered table-responsive table-hover">
        <thead>
            <tr>

                <th>Drug Name</th>
                <th>Day Dispensed</th>
                <th>Month Dispensed</th>
                <th>Year Dispensed</th>
                <th>Fee Paid</th>

            </tr>
        </thead>
        <?php
                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
        <tr>
            <td>
                <?php echo $row['drug_ph']; ?>
            </td>
            <td>
                <?php echo $row['day_ph']; ?>
            </td>
            <td>
                <?php echo $row['month_ph']; ?>
            </td>
            <td>
                <?php echo $row['year_ph']; ?>
            </td>
            <td>
                <?php echo $row['drugprice_ph']; ?>
            </td>
        </tr>
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

        $query = "SELECT year_ph,SUM(drugprice_ph) FROM `patients` WHERE  year_ph='$year_ph'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        ?>
<div class="alert alert-success">
    <?php
if ($row['SUM(drugprice_ph)'] != '') {
            ?>
    <h4>The total yearly sales report of
        <?php echo $row["year_ph"]; ?> was $
        <?php echo $row['SUM(drugprice_ph)']; ?>
    </h4>
    <?php
 //table definition
 $query1 = "SELECT * FROM patients WHERE  year_ph='$year_ph'";
 $result = mysqli_query($conn, $query1);
 ?>
    <table class=" table  table-bordered table-responsive table-hover">
        <thead>
            <tr>

                <th>Drug Name</th>
                <th>Year Dispensed</th>
                <th>Fee Paid</th>

            </tr>
        </thead>
        <?php
     while ($row = mysqli_fetch_assoc($result)) {
                     ?>
        <tr>
            <td>
                <?php echo $row['drug_ph']; ?>
            </td>
            <td>
                <?php echo $row['year_ph']; ?>
            </td>
            <td>
                <?php echo $row['drugprice_ph']; ?>
            </td>
        </tr>
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

    }
}
?>
<div class="alert alert-info">
    <label><u>MONTHLY REPORT</u></label>
    <div class="row">
        <form action="reports_pharmacy.php" method="POST">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Month of dispensary</label>
                    <select name="month_ph" class="form-username form-control" id="month_ph" required>
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
                <input type="hidden" name="report" value="<?php echo 'Report_1'; ?>">
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Year of dispensary</label>
                    <input type="number" name="year_ph" placeholder="Provide a year (i.e 2018)" class="form-username form-control"
                        required>
                </div>
            </div>
            <div class="col-sm-3">
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Run</label><br />
                    <input class="btn btn-primary" type="submit" name="update_data" value="Run Report">
                </div>
                <div>
        </form>
    </div>
</div>
</div>
</div>




<div class="alert alert-info">

    <label><u>DAILY REPORT</u></label>
    <div class="row">
        <form action="reports_pharmacy.php" method="POST">

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Day of dispensary</label>
                    <input type="number" name="day_ph" placeholder="Provide a day (i.e. 18)" class="form-username form-control"
                        required>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Month of dispensary</label>
                    <select name="month_ph" class="form-username form-control" id="month_ph" required>
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
                <input type="hidden" name="report" value="<?php echo 'Report_2'; ?>">
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Year of dispensary</label>
                    <input type="number" name="year_ph" placeholder="Provide a year (i.e 2018)" class="form-username form-control"
                        required>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Run</label><br />
                    <input class="btn btn-primary" type="submit" name="update_data" value="Run Report">
                </div>
                <div>

        </form>

    </div>
</div>
</div>
</div>





<div class="alert alert-info">
    <label><u>YEARLY REPORT</u></label>
    <div class="row">
        <form action="reports_pharmacy.php" method="POST">

            <div class="col-sm-3">
                <div class="form-group">
                    <label>Year of dispensary</label>
                    <input type="number" name="year_ph" placeholder="Provide a year (i.e 2018)" class="form-username form-control"
                        required>
                </div>
            </div>

            <div class="col-sm-3">
            </div>

            <div class="col-sm-3">
                <input type="hidden" name="report" value="<?php echo 'Report_3'; ?>">
            </div>



            <div class="col-sm-3">
                <div class="form-group">
                    <label>Run</label><br />
                    <input class="btn btn-primary" type="submit" name="update_data" value="Run Report">
                </div>
                <div>

        </form>

    </div>
</div>
</div>
</div>


<?php include 'footerS7.php';?>