<?php
$title = "Verification";
include("view_head.php");
include("view_navbar.php");

?>
    <div class="row">
        <h4 class="well text-center">Verify Account</h4>
    </div>

    <!--               SIGN UP FORM
       ===========================================-->
    <div class="row">
        <div class="well col-lg-4 col-lg-offset-4">

            <form data-toggle="validator" id="verify" role="form" method="post" action="con_verify-account.php">
                <div class="form-group">
                    <label for="inputName" class="control-label">Username</label>
                    <input type="text" class="form-control" id="inputName" name="username" placeholder="username" maxlength="20" required>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="control-label">Password</label>
                    <input type="password" data-minlength="8" class="form-control" name="password" id="password" placeholder="Password" required>
                    <span class="help-block">Minimum of 8 characters</span>
                </div>

                <div class="form-group">
                    <label for="verification" class="control-label">Verification Code</label>
                    <input type="text" class="form-control" id="verification" name="verification" placeholder="56851" maxlength="5" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>




<?php include "view_footer.php"; ?>