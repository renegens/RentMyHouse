<?php
$title = "Search Results";
require("config.php");



if (isset($_GET['simpleSearch'])){
    $query = ("SELECT * FROM houses WHERE state=:state ");
    try {
        $statement = $db->prepare($query);
        $statement->execute(array(':state'=> $_GET['simpleSearch']));
        if ($statement->rowCount() > 0){
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
            $imageLink = $row['imageName'];
            $longitude  = $row['longitude'];
            $latitude = $row['latitude'];

            }
        }else header('Location: view_advanced-search.php');
    } catch (PDOException $ex) {
        header('Location: index.php?msg=no-connection-to-server');
        exit();
    }


}else header('Location: view_advanced-search.php');

require("view_head.php");
require("view_navbar.php");

?>
<div class="row">
    <h4 class="well text-center">Search Result for <?php echo $state?> </h4>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">Name: <?php echo $name ?></li>
                    <li class="list-group-item">State: <?php echo $state ?></li>
                    <li class="list-group-item">Address: <?php echo $address ?></li>
                    <li class="list-group-item">Price: <?php echo $price.'&#8364' ?></li>
                    <li class="list-group-item">Meter: <?php echo $meter.'&#13217' ?></li>
                    <li class="list-group-item">Telephone: <?php echo $name ?></li>
                    <li class="list-group-item">Wifi: <?php if ($wifi==1){echo "Yes";} else {echo "No";} ?></li>
                    <li class="list-group-item">Pool: <?php if ($pool==1){echo "Yes";} else {echo "No";} ?></li>
                    <li class="list-group-item">Maid: <?php if ($maid==1){echo "Yes";} else {echo "No";} ?></li>
                    <li class="list-group-item">Description: <?php echo $description ?></li>
                    <li class="list-group-item">Stars: <?php echo $stars ?></li>
                </ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-rounded" src="<?php echo $imageLink; ?>">
            </div>
        </div>
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

<?php require("view_footer.php"); ?>

