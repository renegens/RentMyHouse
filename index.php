<?php session_start(); ?>

<?php

$title = "Home Page";


require ("con_login.php");
require("head.php");
require("navbar.php");

?>


<!-------------------CAROUSEL--------------------------->
<!--====================================================-->

<div id="carousel-top" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-top" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-top" data-slide-to="1"></li>
        <li data-target="#carousel-top" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item active">
            <img src="img/carousel/carousel-1.jpg" alt="villa piano">
            <div class="carousel-caption">
                <h1>At vero eos</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>

        <div class="item">
            <img src="img/carousel/carousel-2.jpg" alt="villa by pool">
            <div class="carousel-caption">
                <h1>At vero eos</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>

        <div class="item">
            <img src="img/carousel/carousel-3.jpg" alt="villa tropica">
            <div class="carousel-caption">
                <h1>At vero eos</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#carousel-top" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-top" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<!-------------------ONE ROW------------------------------>
<!--====================================================-->


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>One Column Row Example</h1>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna</p>
            <a class="btn btn-lg btn-primary" href="http://www.responsivewebmobile.com">Back to RWM</a>
        </div>
    </div>
</div>


<!-------------------IMAGES------------------------------->
<!--====================================================-->

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" src="http://lorempixel.com/300/250/city" alt="" />
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" src="http://lorempixel.com/300/250/business" alt="" />
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" src="http://lorempixel.com/300/250/transport" alt="" />
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" src="http://lorempixel.com/300/250/abstract" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1512.255333044397!2d-74.01038531004586!3d40.70677344629345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a165bedccab%3A0x2cb2ddf003b5ae01!2sWall+St!5e0!3m2!1sen!2s!4v1402034792337" width="100%" height="400" frameborder="0" style="border:0"></iframe>



<?php include("footer.php");

?>





