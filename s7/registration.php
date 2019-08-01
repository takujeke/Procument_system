<?php

include('headerS7.php');

 echo !empty($statusMsg)?'<div class="alert alert-success" align="center"><b><p class="'.$statusMsgType.'">'.$statusMsg.'</p></b></div>':''; 
?>

<div class="alert alert-info" align="center">
    <div class="row">
  
    <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <p align="center" class="alert alert-danger"><b>Create System Users</b></p>

            <form action="userAccount.php" method="post">

                <div class="form-group">
                    <label class="sr-only" for="form-username">First Name</label>
                    <input type="text" name="first_name" placeholder="First name" class="form-username form-control"
                        required>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Last Name</label>
                    <input type="text" name="last_name" placeholder="Last name" class="form-username form-control"
                        required>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-username form-control" required>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Phone Number</label>
                    <input type="text" name="phone" placeholder="Phone number" class="form-username form-control"
                        required>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="form-username">Secret key</label>
                    <input type="text" name="secret" placeholder="Secret key (i.e DF123y)" class="form-username form-control"
                        required>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">User role</label>
                    <select name="role" class="form-username form-control" required>
                        <option value="#" readonly>Select role</option>
                        <option value="Manager">Manager</option>
                       
                        <option value="Receptionist">Receptionist</option>
                     
                        <option value="Superuser">Superuser</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Branch</label>
                    <select name="branch" class="form-username form-control" required>
                        <option value="#" readonly>Select branch</option>
                        <option value="Harare">Harare</option>
                        <option value="Bindura">Bindura</option>
                    </select>
                </div>


                <div class="form-group">
                    <label class="sr-only" for="form-username">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-username form-control" id="form-username">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="form-username">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-username form-control"
                        id="form-username">
                </div>

                <div>
                    <div class="send-button">
                        <input class="btn btn-primary" type="submit" name="signupSubmit" value="Create user">
                    </div>
                </div>
            </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <?php
include('footerS7.php');
?>