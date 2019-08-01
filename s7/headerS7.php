<?php
session_start();
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';
if (!empty($sessData['status']['msg'])) {
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);

}
if (!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])) {
    include 'user.php';
    $user = new User();
    $conditions['where'] = array(
        'id' => $sessData['userID'],
    );
    $conditions['return_type'] = 'single';
    $userData = $user->getRows($conditions);
} else {
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SuperUser Portal</title>
    <!-- CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/jquery-ui.css">
    <!-- Calendar -->
    <link rel="stylesheet" href="assets/fullcalendar.css"/>
    <link rel="stylesheet" href="assets/bootstrap.css"/>
    <script src="assets/jquery-1.11.1.min.js"></script>
    <script src="assets/jquery-ui.min.js"></script>
    <script src="assets/moment.min.js"></script>
    <script src="assets/fullcalendar.min.js"></script>
    <script src="assets/bootstrap3-typeahead.min.js"></script>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
<!-- Top content -->

<div class="container">
    <div class="row">
    </div>

    <div class="row">
        <div class="form-box">
            <div class="form-top">
                <div class="form">
                    <br />
                    <a class="btn btn-link-2" href="registration.php">
                        Create Users
                    </a>
                    <a class="btn btn-link-2" href="index.php">
                        View Users
                    </a>

                <!--    <a class="btn btn-link-2" href="reports.php">
                        Hospital Reports
                    </a> -->


                    <!--<a class="btn btn-link-2" href="reports_pharmacy.php">
                        Pharmacy Reports
                    </a> -->


                    <a class="btn btn-link-2" href="backup.php">
                        Backup System
                    </a>

                    <a href="../userAccount.php?logoutSubmit=1" class="btn btn-link-2">Logout</a>
                </div>


            </div>
            <div class="form-bottom">
