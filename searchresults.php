<?php
require("config.php");
require("head.php");
require("navbar.php");

$query = ("SELECT * FROM houses WHERE name=:name");
try {
    $statement = $db->prepare($query);
    $statement->execute(array(':name'=> $_GET['simpleSearch']));
    echo "Search Results";
    while ($row = $statement->fetch()) {
        $name = $row['name'];
        $state = $row['state'];
        $address = $row['address'];
        $price = $row['price'];
        $meter = $row['meter'];
        $telephone = $row['telephone'];
        $wifi = $row['wifi'];
        $pool = $row['pool'];
        $maid = $row['maid'];
        $description = $row['description'];
        $stars = $row['stars'];
        $longitude  = $row['longitude'];
        $latitude = $row['latitude'];

    }
} catch (PDOException $ex) {
   // header('Location: index.php?msg=no-connection-to-server');
    exit();
}

?>

    <div class="container">
    <ul class="list-group">
        <li class="list-group-item">Name: <?php echo $name ?></li>
        <li class="list-group-item">State: <?php echo $state ?></li>
        <li class="list-group-item">Address: <?php echo $address ?></li>
        <li class="list-group-item">Price: <?php echo $price ?></li>
        <li class="list-group-item">Meter: <?php echo $meter ?></li>
        <li class="list-group-item">Telephone: <?php echo $name ?></li>
        <li class="list-group-item">Wifi: <?php echo $wifi ?></li>
        <li class="list-group-item">Pool: <?php echo $pool ?></li>
        <li class="list-group-item">Maid: <?php echo $maid ?></li>
        <li class="list-group-item">Description: <?php echo $description ?></li>
        <li class="list-group-item">Stars: <?php echo $stars ?></li>
        <li class="list-group-item">Longitude: <?php echo $longitude ?></li>
        <li class="list-group-item">Latitude: <?php echo $latitude ?></li>
    </ul>
    </div>

    <div class="container">
       <div style="width:1000px;height:500px;" id="map-canvas"></div>
    </div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBzsksClNr1SdvprMZYGY29cPnTv0QodR0"></script>
<script type="text/javascript">
    var map;
    var Lat = '<?php echo $latitude ?>';
    var Long = '<?php echo $longitude ?>';
    var myCenter = new google.maps.LatLng(Lat, Long);
    var marker;

    function initialize() {
        var myLatlng = new google.maps.LatLng(Lat,Long);
        var mapOptions = {
            zoom: 16,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php require ("footer.php"); ?>

