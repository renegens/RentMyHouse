<!--                 NAVIGATION                         -->
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
            <a class="navbar-brand" href="index.php">Rent My House</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="housestatic.xml">Static XML</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>


            <form class="navbar-form navbar-left" method="get" action="searchresults.php" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name="simpleSearch" id="keyword" placeholder="Search" list="results" autocomplete="off">
                    <datalist id="results"> </datalist>

                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <form class="navbar-form navbar-left" action="con_styles.php" method="get">
                <select class="form-control" title="change style" onchange="if(this.value)window.location.href=this.value">
                    <option value="">Change Style</option>
                    <option value="?css=<?php echo $default;?>">Default</option>
                    <option value="?css=<?php echo $custom;?>">Holiday</option>
                </select>
            </form>

            <!--Logic to display different nav bar to user when logged in -->
            <?php if (isset($_SESSION['username'])) {
                include "navbar_logged_in.php";
            }else{
                include ("navbar_login.php");
            }?>

        </div>
    </div>
</nav>