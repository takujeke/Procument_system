<?php
include("headerd5.php");
include("dbcon.php");

$limit = 10;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $limit;

$query = "SELECT * FROM patients WHERE observations <> '' ORDER BY id DESC LIMIT $start_from, $limit";
$result = mysqli_query($conn, $query);
?>
    <div class="alert alert-info table-responsive">
        <p align="center" class="alert alert-danger"><b>View Qued Patients</b></p>
        <table class=" table table-striped table-bordered table-responsive table-hover">
            <thead>
            <tr>

                <th>Patient Name</th>
                <th>Observations</th>
                <th>BP</th>
                <th>Weight</th>
                <th>Pulse</th>
                <th>Temp</th>
                <th>Vital Inputs</th>
                <th>Other Information</th>
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
                    <td><?php echo $row['bp']; ?></td>
                    <td><?php echo $row['weight']; ?></td>
                    <td><?php echo $row['pulse']; ?></td>
                    <td><?php echo $row['temp']; ?></td>
                    <td><?php echo $row['vital_inputs']; ?></td>
                    <td><?php echo $row['nurse_other']; ?></td>
                    <td><?php echo $row['condition_priority']; ?></td>
                    <td><?php echo $row['date_stamp']; ?></td>
                    <td><a href="expand_patient1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Assess
                            Patient</a></td>


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
        for ($i = 1; $i <= $total_pages; $i++) {
            $pagLink .= "<li><a href='index.php?page=" . $i . "'>" . $i . "</a></li>";
        };
        echo $pagLink . "</ul></nav>";
        ?>

    </div>

<?php
include("footerd5.php");
?>