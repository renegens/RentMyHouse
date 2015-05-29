
            <ul class="nav navbar-nav navbar-right">
                <li><a href="view_register.php">Register</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                    <div class="dropdown-menu login-menu">
                        <form data-toggle="validator" role="form" method="post" action="con_login.php">
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
                            </div>
                        </form>
                    </div>
                </li>
            </ul>