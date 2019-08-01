<?php
session_start();
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';
if (!empty($sessData['status']['msg'])) {
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devtech</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>DevTech Procument Portal</strong></h1>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <br/>

                        <?php
                        if (isset($_POST['update_data'])) {
                            include_once('dbcon.php');
//formdata variables


                            $email = $_POST['email'];
                            $secret = $_POST['secret'];
                            $password = md5($_POST['password']);
                            //echo $password;

                            $query1 = "SELECT * FROM users WHERE secret = '$secret' AND email='$email'";
                            $result = mysqli_query($conn, $query1);

                            if ($result->num_rows > 0) {

                                //updating the table
                                $sql = "UPDATE users SET password = '$password' WHERE secret = '$secret' AND email = '$email'";

                                if ($conn->query($sql) == TRUE) {
                                    ?>
                                    <!--success-->
                                    <div class="alert alert-success"></b> Password has been updated</b></div>
                                    <?php
                                } else {
                                    ?>

                                    <div class="alert alert-success"> <?php echo mysqli_error($conn); ?>
                                        <!--failure--> </b>Password reset has failed.</b>
                                    </div>
                                    <?php


                                }
                                $conn->close();
                            } else {
                                ?>
                                <div class="alert alert-danger">
                                    <!--failure--> <b>Password reset has failed. Please check your secret key and email
                                        aunthenticity</b>
                                </div>
                                <?php
                            }
                        }
                        ?>


                        <div class="form-top-left">
                            <h3>Login to  Portal</h3>
                            <p>Enter your username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">


                        <form role="form" action="reset.php" method="post" class="login-form">


                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="email" placeholder="email" class="form-username form-control"
                                       id="form-username">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="form-password">Secret Key</label>
                                <input type="text" name="secret" placeholder="secret key"
                                       class="form-username form-control" id="form-username">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="password"
                                       class="form-password form-control" id="form-password">
                            </div>

                            <button type="submit" name="update_data" class="btn">Reset</button>

                        </form>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 social-login">

                    <div class="social-login-buttons">
                        <a class="btn btn-link-2" href="reset.php">
                            Reset Password
                        </a>
                        <a class="btn btn-link-2" href="index.php">
                            System Login
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>