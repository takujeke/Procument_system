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
    <title>PROCUMENT</title>

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

                    <?php
                    if (!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
                    ?>
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Currently logged in</h3>
                            <p>Select your desired option</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>

                    <div class="form-bottom">
                        <?php

                        include 'user.php';
                        $user = new User();
                        $conditions['where'] = array(
                            'id' => $sessData['userID'],
                        );
                        $conditions['return_type'] = 'single';
                        $userData = $user->getRows($conditions);
                        ?>
                        <?php
                        if ($userData['role'] == "Manager") {
                            ?>

                            <div class="alert alert-success">
                                <p>Welcome :
                                    <b><?php echo $userData['first_name'] . ' ' . $userData['last_name'];; ?></b></p>
                                <p>Priviledge : <b><?php echo $userData['role']; ?></b></p>
                                <div class="alert alert-danger">
                                    <p><b>Thank you for verifying your account, please proceed to your portal or click
                                            logout to prevent unauthorized access to your account.</b></p>
                                </div>
                            </div>
                            <a href="userAccount.php?logoutSubmit=1" class="logout">
                                <button class="btn">Logout</button>
                            </a>
                            <a href="n3/index.php" class="btn btn-link-2">Proceed to
                                Portal</a>
                            <?php
                        } elseif ($userData['role'] == "Nurse") {
                            ?>
                            <div class="alert alert-success">
                                <p>Welcome :
                                    <b><?php echo $userData['first_name'] . ' ' . $userData['last_name'];; ?></b></p>
                                <p>Priviledge : <b><?php echo $userData['role']; ?></b></p>
                                <div class="alert alert-danger">
                                    <p><b>Thank you for verifying your account, please proceed to your portal or click
                                            logout to prevent unauthorized access to your account.</b></p>
                                </div>
                            </div>
                            <a href="userAccount.php?logoutSubmit=1" class="logout">
                                <button class="btn">Logout</button>
                            </a>
                            <a href="n3/index.php" class="btn btn-link-2">Proceed to
                                Portal</a>

                            <?php
                        } elseif ($userData['role'] == "Pharmacist") {
                            ?>
                            <div class="alert alert-success">
                                <p>Welcome :
                                    <b><?php echo $userData['first_name'] . ' ' . $userData['last_name'];; ?></b></p>
                                <p>Priviledge : <b><?php echo $userData['role']; ?></b></p>
                                <div class="alert alert-danger">
                                    <p><b>Thank you for verifying your account, please proceed to your portal or click
                                            logout to prevent unauthorized access to your account.</b></p>
                                </div>
                            </div>
                            <a href="userAccount.php?logoutSubmit=1" class="logout">
                                <button class="btn">Logout</button>
                            </a>
                            <a href="p4/index.php" class="btn btn-link-2">Proceed to
                                Portal</a>

                            <?php
                        } elseif ($userData['role'] == "Dentist") {
                            ?>
                            <div class="alert alert-success">
                                <p>Welcome :
                                    <b><?php echo $userData['first_name'] . ' ' . $userData['last_name'];; ?></b></p>
                                <p>Priviledge : <b><?php echo $userData['role']; ?></b></p>
                                <div class="alert alert-danger">
                                    <p><b>Thank you for verifying your account, please proceed to your portal or click
                                            logout to prevent unauthorized access to your account.</b></p>
                                </div>
                            </div>
                            <a href="userAccount.php?logoutSubmit=1" class="logout">
                                <button class="btn">Logout</button>
                            </a>
                            <a href="de1/index.php" class="btn btn-link-2">Proceed to
                                Portal</a>

                            <?php
                        } elseif ($userData['role'] == "Physiotherapist") {
                            ?>
                            <div class="alert alert-success">
                                <p>Welcome :
                                    <b><?php echo $userData['first_name'] . ' ' . $userData['last_name'];; ?></b></p>
                                <p>Priviledge : <b><?php echo $userData['role']; ?></b></p>
                                <div class="alert alert-danger">
                                    <p><b>Thank you for verifying your account, please proceed to your portal or click
                                            logout to prevent unauthorized access to your account.</b></p>
                                </div>
                            </div>
                            <a href="userAccount.php?logoutSubmit=1" class="logout">
                                <button class="btn">Logout</button>
                            </a>
                            <a href="ph2/index.php" class="btn btn-link-2">Proceed to
                                Portal</a>

                            <?php
                        } elseif ($userData['role'] == "Receptionist") {
                            ?>
                            <div class="alert alert-success">
                                <p>Welcome :
                                    <b><?php echo $userData['first_name'] . ' ' . $userData['last_name'];; ?></b></p>
                                <p>Priviledge : <b><?php echo $userData['role']; ?></b></p>
                                <div class="alert alert-danger">
                                    <p><b>Thank you for verifying your account, please proceed to your portal or click
                                            logout to prevent unauthorized access to your account.</b></p>
                                </div>
                            </div>
                            <a href="userAccount.php?logoutSubmit=1" class="logout">
                                <button class="btn">Logout</button>
                            </a>
                            <a href="d5/index.php" class="btn btn-link-2">Proceed to
                                Portal</a>

                            <?php
                        } else {
                            ?>
                            <div class="alert alert-success">
                                <p>Welcome :
                                    <b><?php echo $userData['first_name'] . ' ' . $userData['last_name'];; ?></b></p>
                                <p>Priviledge : <b><?php echo $userData['role']; ?></b></p>
                                <div class="alert alert-danger">
                                    <p><b>Thank you for verifying your account, please proceed to your portal or click
                                            logout to prevent unauthorized access to your account.</b></p>
                                </div>
                            </div>
                            <a href="userAccount.php?logoutSubmit=1" class="logout">
                                <button class="btn">Logout</button>
                            </a>
                            <a href="s7/index.php" class="btn btn-link-2">Proceed to
                                Portal</a>
                            <?php
                        }
                        ?>


                        <?php }else{ ?>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to our Portal</h3>
                                <p>Enter your username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>

                        <div class="form-bottom">


                            <?php echo !empty($statusMsg) ? '<div class = "alert alert-danger"><p class="' . $statusMsgType . '">' . $statusMsg . '</p></div>' : ''; ?>

                            <form role="form" action="userAccount.php" method="post" class="login-form">


                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="email" placeholder="email"
                                           class="form-username form-control" id="form-username">
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="password"
                                           class="form-password form-control" id="form-password">
                                </div>

                                <button type="submit" name="loginSubmit" class="btn">Login</button>

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
    <?php } ?>


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