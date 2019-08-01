<?php

include('headerS7.php');
include('dbcon.php');
$row_user = $_GET['id'];
$query = "SELECT * FROM users WHERE id ='$row_user' "; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_data']))
{	
include_once('dbcon.php');
//formdata variables

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'] ;
$email = $_POST['email'];
$phone = $_POST['phone'];
$secret = $_POST['secret'];
$role = $_POST['role'];
$branch = $_POST['branch'];
$id = $_POST['id'];

//updating the table
$sql = "UPDATE users SET first_name='$first_name', last_name='$last_name' ,email ='$email', phone = '$phone', secret ='$secret', 
role ='$role',branch='$branch' WHERE id= '$id'";


if ($conn->query($sql) == TRUE) {
    ?>
<!--success-->
<div class="alert alert-success" align="center"> <b>User has been updated</b></div>
<?php
} else {
    ?>

<div class="alert alert-danger" align="center">
    <?php echo mysqli_error($conn); ?>
    <!--failure--> <b>User update has failed</b>
</div>
<?php
    
    
}
$conn->close();

}
 ?>

<div class="alert alert-info" align="center">
    <div class="row">

        <div class="col-sm-3"></div>
        <div class="col-sm-6">

            <p align="center" class="alert alert-danger"><b>Modify System Users</b></p>
            <form action="modify_users.php" method="post">

                <div class="form-group">
                    <label class="sr-only" for="form-username">First Name</label>
                    <input type="text" name="first_name" placeholder="First name" class="form-username form-control"
                        value="<?php echo $row['first_name']; ?>" required>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Last Name</label>
                    <input type="text" name="last_name" placeholder="Last name" class="form-username form-control"
                        value="<?php echo $row['last_name']; ?>" required>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Email</label>
                    <input type="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" class="form-username form-control"
                        required>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Phone Number</label>
                    <input type="text" name="phone" placeholder="Phone number" value="<?php echo $row['phone']; ?>"
                        class="form-username form-control" required>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="form-username">Secret key</label>
                    <input type="text" name="secret" placeholder="Secret key (i.e DF123y)" value="<?php echo $row['secret']; ?>"
                        class="form-username form-control" required>
                    <input type="hidden" name="id" value="<?php echo $row_user; ?>">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">User role</label>
                    <select name="role" class="form-username form-control" id="role" required>
                        <option value="" disabled selected>Select role</option>
                        <option value="Manager">Procument Manager</option>
                       <option value="Receptionist">Receptionist</option>
                        <option value="Superuser">Superuser</option>
                    </select>

                    <script>

                        $(function() {
            $("#role").val("<?php echo $row['role']; ?>");
        });

        </script>

                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Branch</label>
                    <select name="branch" class="form-username form-control" id="branch" required>
                        <option value="#" readonly>Select branch</option>
                        <option value="Harare">Harare</option>
                        <option value="Bindura">Bindura</option>
                    </select>
                    <script>

                        $(function() {
    $("#branch").val("<?php echo $row['branch']; ?>");
});

</script>
                </div>


                <div>

                    <input class="btn btn-primary" type="submit" name="update_data" value="Modify user">

                </div>
            </form>

        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<?php
include('footerS7.php');
?>