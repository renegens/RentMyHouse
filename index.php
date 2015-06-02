<?php


$title = "Home Page";

include_once("config.php");
require ("con_login.php");
require("view_head.php");
require("view_navbar.php");


//getting latest images
$query = 'SELECT imageName FROM images ORDER BY imageID DESC LIMIT 4';
$statement = $db->prepare($query);
$statement->execute();
foreach ($statement as $row) {
    $image[] = $row['imageName'];
}

//getting all marker
$query = 'SELECT longitude,latitude FROM houses';
$statement = $db->prepare($query);
$statement->execute();
foreach ($statement as $row) {
    $latitude[] = $row['latitude'];
    $longitude[] = $row['longitude'];

}


?>


<!--                  CAROUSEL                          -->
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

<!--                  ONE ROW                           -->
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


<!--                 IMAGES                             -->
<!--====================================================-->

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" style="width: 100%" src="<?php echo $image[0] ?>" alt="" />
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" style="width: 100%" src="<?php echo $image[1] ?>" alt="" />
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" style="width: 100%" src="<?php echo $image[2] ?>" alt="" />
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="thumbnail">
                    <img class="img-square img-responsive" style="width: 100%" src="<?php echo $image[3] ?>" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>
<div style="display: none;" id="myArrayLatitude">
    <?php
    echo '<span id="myArrayLatitude.count">'.sizeof($latitude).'</span>';
    for ($i = 0; $i < sizeof($latitude); $i++) {
        echo '<span id="myArrayLatitude.'.$i.'">'.$latitude[$i].'</span>';
    }
    ?>
</div>
<div style="display: none;" id="myArrayLongitude">
    <?php
    echo '<span id="myArrayLongitude.count">'.sizeof($longitude).'</span>';
    for ($i = 0; $i < sizeof($longitude); $i++) {
        echo '<span id="myArrayLongitude.'.$i.'">'.$longitude[$i].'</span>';
    }
    ?>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<div class="container-fluid" style="height: 500px; width: 1000px;" id="map-canvas"></div>
<script type="text/javascript">
    var myArrayLatitude = [];
    var myArrayLongitude = [];
    //needs to be fixed. Logic is store the php array inside a javascript array and loop through it.
    for(i = 0; i < document.getElementById('myArrayLatitude.count').innerHTML; i++) {
        myArrayLatitude.add(document.getElementById('myArrayLatitude.'+i)
        document.write(document.getElementById('myArrayLatitude.'+i).innerHTML);
    }
    for(i = 0; i < document.getElementById('myArrayLongitude.count').innerHTML; i++) {
        document.write(document.getElementById('myArrayLongitude.'+i).innerHTML);
    }

    // Standard google maps function
    function initialize() {
        var myLatlng = new google.maps.LatLng(myArrayLatitude[i], myArrayLongitude[i]);
        var myOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }

    // Function for adding a marker to the page.
    function addMarker(location) {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    for (i=0; i<myArrayLatitude.length; i++){
        // Testing the addMarker function
        CentralPark = new google.maps.LatLng(myArrayLatitude[i], myArrayLongitude[i]);
        addMarker(CentralPark);
    }



</script>



<?php include("view_footer.php");

?>





