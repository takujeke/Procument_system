<?php
include("headern3.php");

if(isset($_POST['send_email']))
{

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
?>
 
<div class="alert alert-info" >
<strong>Thank you for confirming your email meesage content, Click the button below to send your email message</strong><br />
<a href ="mailto:<?php echo $email;?>?subject=<?php echo $subject; ?>&body=<?php echo $body; ?>" class="btn btn-success">Click to send</a>
</div>
<?php

}   
?>


<div class="alert alert-info" >
<p align="center" class="alert alert-danger"><B>Email client for nurse</b></p>
<br />
<form id="contact-form" method="post" action="mail.php" >

    <div class="messages"></div>

    <div class="controls">

        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                    <label for="form_lastname">Subject *</label>
                    <input id="form_lastname" type="text" name="subject" class="form-control" placeholder="Please enter your subject *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="body" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="send_email" class="btn btn-success btn-send" value="Confirm message">
                <INPUT TYPE="HIDDEN" NAME="send_email" VALUE="TRUE" />
            </div>
        </div>
        <div class="row">

        </div>
    </div>

</form>
</div>
<?php
include("footern3.php");
?>