<?php
$title = "Register";
include("view_head.php");
include("view_navbar.php");

?>
    <div class="row">
        <h4 class="well text-center">Register</h4>
    </div>
<!--               SIGN UP FORM
   ===========================================-->
<div class="row">

    <div class="well col-lg-4 col-lg-offset-4">

        <form data-toggle="validator" id="signUpForm" role="form" method="post" action="con_register.php">
            <div class="form-group">
                <label for="inputName" class="control-label">Username</label>
                <input type="text" class="form-control" id="inputName" name="username" placeholder="username" maxlength="20" required>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="control-label">Password</label>
                <input type="password" data-minlength="8" class="form-control" name="password" id="password" placeholder="Password" required>
                <span class="help-block">Minimum of 8 characters</span>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="passwordConfirm" data-match="#password" data-match-error="Whoops, these don't match" placeholder="Confirm">
                <div class="help-block with-errors"></div>
            </div>

            <img src="captcha/CaptchaSecurityImages.php?width=83&height=36&characters=5" alt="captcha"/>
            <input type="text" id="captcha"  name="captcha" size="8" maxlength="25" required/>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>




<?php include "view_footer.php"; ?>