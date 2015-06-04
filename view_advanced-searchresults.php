<?php
$title = "Advanced Search Results";
require_once "config.php";
if (isset($_GET['search'])) {

    if (isset($_GET['state'])) {
        $state = $_GET['state'];
    }

    if (isset($_GET['price'])) {
        $price = $_GET['price'];
    }

    if (empty($_GET['wifi'])) {
        $wifi = 0;
    } else $wifi = 1;

    if (empty($_GET['pool'])) {
        $pool = 0;
    } else $pool = 1;

    if (empty($_GET['maid'])) {
        $maid = 0;
    } else $maid = 1;


        $sql = 'SELECT * FROM houses';
        $where = array();
        $params = array();

        if (!empty($_GET['state'])) {
            $where[] = "state = :state";
            $params[':state'] = $_GET['state'];
        }

        if (!empty($_GET['wifi'])) {
            $where[] = "wifi = :wifi";
            $params[':wifi'] = $_GET['wifi'];
        }
        if (!empty($_GET['poll'])) {
            $where[] = "poll = :poll";
            $params[':poll'] = $_GET['poll'];
        }

        if (!empty($_GET['maid'])) {
            $where[] = "maid = :maid";
            $params[':maid'] = $_GET['maid'];


        if(count($where) > 0)
            $sql .= ' WHERE ' . implode(' AND ', $where);

        $stmt = $db->prepare($sql);

        foreach($params as $param => $value) {
            $stmt->bindParam($param, $value);
        }

        $stmt->execute();
        $data = $stmt->fetchAll();


                    $name = $data['name'];
                    $state = $data['state'];
                    $address = $data['address'];
                    $price = $data['price'];
                    $meter = $data['meter'];
                    $telephone = $data['telephone'];
                    $wifi = $data['wifi'];
                    $pool = $data['pool'];
                    $maid = $data['maid'];
                    $description = $data['description'];
                    $stars = $data['stars'];
                    $imageLink = $data['imageName'];
                    $longitude  = $data['longitude'];
                    $latitude = $data['latitude'];


    }

   /* $query = $db->prepare("SELECT * FROM houses WHERE state = ? OR price LIKE ? OR maid = ? OR pool = ? OR maid = ?");
    $query->bindValue(1, $state, PDO::PARAM_STR);
    $query->bindValue(2, $price, PDO::PARAM_INT);
    $query->bindValue(3, $maid, PDO::PARAM_INT);
    $query->bindValue(4, $pool, PDO::PARAM_INT);
    $query->bindValue(5, $maid, PDO::PARAM_INT);

    $query->execute();

    if ($query->rowCount() > 0) {
        while ($row = $query->fetch()) {
            $name = $row['name'];
            $state = $row['state'];
            $address = $row['address'];
            $price = $row['price'];
            $meter = $row['meter'];
            $telephone = $row['telephone'];
            $maid = $row['maid'];
            $pool = $row['pool'];
            $wifi = $row['wifi'];
            $description = $row['description'];
            $stars = $row['stars'];
            $imageLink = $row['imageName'];
            $longitude = $row['longitude'];
            $latitude = $row['latitude'];

        }
    }

    $num_rows = count($query);
    echo $query->rowCount();*/
}

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
