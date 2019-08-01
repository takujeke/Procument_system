<?php
include("headerS7.php");
include("dbcon.php");

$limit = 10;
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $limit;

$sql = "SELECT * FROM users ORDER BY created ASC LIMIT $start_from, $limit";
$result = mysqli_query($conn, $sql);
?>
    <div class="alert alert-info table-responsive">
        <p align="center" class="alert alert-danger"><b>System Users</b></p>
        <table class="table table-striped table-bordered table-responsive table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Created</th>
                <th>User Role</th>

                <th>Secret Key</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['created']; ?></td>
                    <td><?php echo $row['role']; ?></td>

                    <td><?php echo $row['secret']; ?></td>
                    <td><a href="modify_users.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="mailto:<?php echo $row['email'] ?>" class="btn btn-success">Email</a></td>
                    <td><a href="deleterecord.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>

                </tr>
                <?php
                $_SESSION['id'] = $row['id'];
            }
            ?>
        </table>
        <?php
        $sql = "SELECT COUNT(id)FROM users";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result);
        $total_records = $row[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink = "<nav><ul class='pagination'>";
        for ($i = 1; $i <= $total_pages; $i++) {
            $pagLink .= "<li><a href='index.php?page=" . $i . "'>" . $i . "</a></li>";
        };
        echo $pagLink . "</ul></nav>";

        //mysqli_close($conn);

        ?>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.pagination').pagination({
                items: <?php echo $total_records;?>,
                itemsOnPage: <?php echo $limit;?>,
                cssStyle: 'light-theme',
                currentPage: <?php echo $page;?>,
                hrefTextPrefix: 'index.php?page='
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.tooltipped').tooltip({delay: 50});
        });
    </script>

<?php
include("footerS7.php");