<?php
include ("head.php");

?>


    <!-------------------NAVIGATION--------------------------->
    <!--====================================================-->

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!---SIGN UP FORM
   ===========================================-->
<div class="row">
    <br>
    <br>
    <br>
    <div class="well col-lg-4 col-lg-offset-4">
        <h3>Sign Up</h3>
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
                <div class="form-group">
                    <input type="password" data-minlength="8" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
                    <span class="help-block">Minimum of 8 characters</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <img src="captcha/CaptchaSecurityImages.php?width=83&height=36&characters=5" /> <input type="text" id="captcha" name="captcha" size="8" maxlength="25" required/>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>




<?php include "footer.php"; ?>