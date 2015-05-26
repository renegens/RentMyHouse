<?php
/**
 * Created by PhpStorm.
 * User: renegens
 * Date: 5/22/15
 * Time: 00:07
 */

?>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <?php echo $_SESSION['username']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="secret.php">Upload House</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
        </ul>