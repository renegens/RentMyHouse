<div class="row">




    <!---SIGN IN FORM
    ===========================================-->
    <div class="well col-lg-4 col-lg-offset-1">
        <h3>Sign In</h3>
        <form data-toggle="validator" role="form" method="post" action="./controllers/userlogin.php">
            <div class="form-group">
                <label for="inputName" class="control-label">Username</label>
                <input type="text" class="form-control" id="inputName" name="username" placeholder="username" required>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="control-label">Password</label>
                <div class="form-group">
                    <input type="password" data-minlength="8" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
                    <span class="help-block">Minimum of 8 characters</span>
                </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
</div>


