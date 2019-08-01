<?php session_start();
        
$email = $_POST['email'];
//echo $email;      




    ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procument Management System</title>

    <!-- CSS -->


  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>


    <?php

    //national id
    $filename1 = $_FILES["file1"]["name"];
    $file_basename1 = substr($filename1, 0, strripos($filename1, '.')); // get file extention
    $file_ext1 = substr($filename1, strripos($filename1, '.')); // get file name
    $filesize1 = $_FILES["file1"]["size"];
    $allowed_file_types1 = array('.pdf');

   $filename2 = $_FILES["file2"]["name"];
    $file_basename2 = substr($filename2, 0, strripos($filename2, '.')); // get file extention
    $file_ext2 = substr($filename2, strripos($filename2, '.')); // get file name
    $filesize2 = $_FILES["file2"]["size"];
    $allowed_file_types = array('.pdf');
    
   
    ?>
<p class="h1" align="center" style="color:white">DevTech Procument Portal</p> <br/>

<div class="container-fluid">
<div class="col-md-12 col-md-offset-">
		
	
		<div class="alert alert-success" role="alert">
<p align="center">Thank you for processin your application<br/>

<b>Our team will evaluate your application and get back to you on <b><?php echo $email;?> </b></b></p>

    <div class="alert alert-info" >
                 
        <table class="table table-info" align="center">
            <tr>
                <td align="center"><a href="input.php" class="btn btn-success btn-lg" title="Go Back to Uploads Page">Back to Home Page</a>
</td>
            </tr>
            <tr>
                <td class="w3-center">
                           <br>
                    <?php
                    if(empty($filename1) && empty($filename2) && empty($filename3) && empty($filename4)
                      && empty($filename5) && empty($filename6) && empty($filename7) && empty($filename8)
                       && empty($filename9)
                      ){
                        ?>
                    <a href="tes.php?username=<?php echo $email; ?>" title="Go Back to Uploads Page">
                   <div class="container" align="center"> <button  class="btn btn-success" >
                       
                        <b> Nothing to upload.<br> Please go back and attach at least one upload.</b>
                       
                    </button></div>
                    </a>
                    <?php
                    }
                    else{
						?>
						</td>
						</tr>
						<tr>
                <td class="">
						<?php
                    
                    if (in_array($file_ext1, $allowed_file_types1) && ($filesize1 < 10000000)) {
                        // Rename file
						$idupload1="idupload1";
                        $newfilename1 = $email . $idupload1 .$file_ext1;
                        if (file_exists("Upload/" . $newfilename1)) {
                            // file already exists error
                             echo "<br />";
                            echo "<b>Quotation file has already been uploaded</b>";
                            echo "<br />";
                        } else {
                            move_uploaded_file($_FILES["file1"]["tmp_name"], "Upload/" . $newfilename1);
                        
                           echo "<br />";
                            echo "<div class='container' align='center'><b>Quotation file has been uploaded successfully</b></div>";
                                    echo "<br />";
                        }
                    } elseif (empty($file_basename1)) {
                        // file selection error
                        // echo "Please select a file to upload.";
                    } elseif ($filesize1 > 10000000) {
                        // file size error
                       
                        echo "<br />";
                        echo "<b>Quotation file size is too large</b>";
                        echo "<br />";
                    } else {
                        // file type error
                        echo "Only this file type is allowed for upload: " . implode(', ', $allowed_file_types1);
                        unlink($_FILES["file1"]["tmp_name"]);
                    }
                    ?>
                </td>
            </tr>
            <tr>
            <td class="w3-center">
                <?php
                            if (in_array($file_ext2, $allowed_file_types) && ($filesize2 < 10000000)) {
                    // Rename file
					$idupload2="idupload2";
                    $newfilename2 = $email . $idupload2 . $file_ext2;
                    if (file_exists("Upload/" . $newfilename2)) {
                        // file already exists error
                        echo "<b>Company Profile has already been uploaded</b>";
                        echo "<br />";
                    } else {
                        move_uploaded_file($_FILES["file2"]["tmp_name"], "Upload/" . $newfilename2);
                        echo "<div class='container' align='center'><b>Company Profile has been uploaded successfully</b></div>";
                        echo "<br />";
                    }
                } elseif (empty($file_basename2)) {
                    // file selection error
                    //echo "Please select a file to upload.";
                } elseif ($filesize2 > 10000000) {
                    // file size error
                    echo "<b>Company Profile file size is too large</b>";
                    echo "<br />";
                } else {
                    // file type error
                    echo "Only these file types are allowed for upload: " . implode(', ', $allowed_file_types);
                    unlink($_FILES["file2"]["tmp_name"]);
                }
					}
?>
                </td>
            </tr>
         
            
          
            
           
           
            
            
          
           

        </table>
    </div>
</div>


</div>

</script>
 


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