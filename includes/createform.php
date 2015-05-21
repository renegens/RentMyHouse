<?php
/**
 * Created by PhpStorm.
 * User: renegens
 * Date: 5/21/15
 * Time: 16:06
 */
?>
<!---SIGN UP FORM
   ===========================================-->
<div class="row">
    <div class="well col-lg-4 col-lg-offset-1">
        <h3>Sign Up</h3>
        <form data-toggle="validator" role="form" method="post" action="./controllers/usercreate.php">
            <div class="form-group">
                <label for="inputName" class="control-label">Username</label>
                <input type="text" class="form-control" id="inputName" name="username" placeholder="username" maxlength="20" required>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="That email address is invalid" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="control-label">Password</label>
                <div class="form-group">
                    <input type="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Password" required>
                    <span class="help-block">Minimum of 8 characters</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>