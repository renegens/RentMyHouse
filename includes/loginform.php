<div class="well well-sm">
    <form class="form-horizontal" role="form" data-toggle="validator" id="signInForm" method="post" action="./controllers/userlogin.php">
        <fieldset>

            <!-- Form Name -->
            <legend>Sign In</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="username">Username</label>
                <div class="col-md-4">
                    <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" data-minlength="3" required>

                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Password</label>
                <div class="col-md-4">
                    <input id="passwordinput" name="passwordinput" type="password" placeholder="************" class="form-control input-md" data-minlength="8" required>

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="signInButton" name="singlebutton" class="btn btn-primary">Sign In</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
<div class="well well-sm">
    <form class="form-horizontal" role="form" data-toggle="validator" method="post" action="./controllers/usercreate.php">
        <fieldset>

            <!-- Form Name -->
            <legend>Sign Up</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Name">Email</label>
                <div class="col-md-4">
                    <input id="Name" name="Name" type="text" placeholder="@" class="form-control input-md"  data-minlength="5" required>

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="username">Username</label>
                <div class="col-md-4">
                    <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" data-minlength="3" required>

                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Password</label>
                <div class="col-md-4">
                    <input id="passwordinput" name="passwordinput" type="password" placeholder="************" class="form-control input-md" data-minlength="8" required>

                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput2">Re-Enter Password</label>
                <div class="col-md-4">
                    <input id="passwordinput2" name="passwordinput2" type="password" placeholder="************" class="form-control input-md" data-minlength="8" required>

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="registerButton" name="singlebutton" class="btn btn-primary">Sign Up</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>

