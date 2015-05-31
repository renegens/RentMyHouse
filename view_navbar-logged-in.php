    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <?php echo $_SESSION['username']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="view_uploadHouse.php">Upload House</a></li>
                    <li><a href="model_edithouse.php">Edit House</a></li>
                    <li><a href="view_imageUpload.php">Upload Images</a></li>

                    <li class="divider"></li>
                    <li><a href="con_logout.php">Logout</a></li>

                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>