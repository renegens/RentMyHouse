    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <?php echo $_SESSION['username']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="secret.php">Upload House</a></li>
                    <li><a href="edithouse.php">Edit House</a></li>
                    <li><a href="logout.php">Logout</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>