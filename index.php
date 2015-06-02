<?php


$title = "Home Page";

include_once ("config.php");
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
?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
// Standard google maps function
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var map = new google.maps.Map(mapCanvas);
        var mapOptions = {
            center: new google.maps.LatLng(39.638140, 22.450156),
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }

google.maps.event.addDomListener(window, 'load', initialize);

downloadUrl("con_xml-markers.php", function(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName("marker");
    for (var i = 0; i < markers.length; i++) {
        var point = new google.maps.LatLng(
            parseFloat(markers[i].getAttribute("lat")),
            parseFloat(markers[i].getAttribute("lng")));
        var marker = new google.maps.Marker({
            map: map,
            position: point

        });
        //bindInfoWindow(marker, map);
    }
});

function bindInfoWindow(marker, map) {
    google.maps.event.addListener(marker, 'click', function() {
        //infoWindow.setContent(html);
        infoWindow.open(map, marker);
    });
}
function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}


function doNothing() {}




</script>


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
            <a class="btn btn-lg btn-primary" href="http://www.responsivewebmobile.com">Back to Rent My House</a>
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

<div class="container-fluid" style="height: 500px; width: 1000px;" id="map-canvas"></div>




<?php include("view_footer.php");

?>





