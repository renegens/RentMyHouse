<?php
if(empty($_SESSION['username'])) exit();
$userid=-1;
$query = "
                        SELECT
                            id
                        FROM users
                        WHERE
                            username = :user
                    ";
$query_params = array( ':user' => $_SESSION['username'] );
try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
$row = $stmt->fetch();
if($row){ $userid=$row['id']; }


//get house id for this user

$query = "
                        SELECT
                            houseID
                        FROM houses
                        WHERE
                            users_id = :user_id
                    ";
$query_params = array( ':user_id' => $userid );
try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
$row = $stmt->fetch();
if($row){ $houseID=$row['houseID']; }

$query = "
                    SELECT *
                    From images
                    WHERE
                    houses_houseID = :houseID
                ";

$query_params =  array (
    'imageName' => $row['imageName'],
    'imageDescr' => $row['imageDecr']
);

try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);

}
catch(PDOException $ex) {
    die("Failed to run query: " . $ex->getMessage());
}
?>


<div class="row">
    <div class="col-lg-9">
        <img src="<?php echo $image1 ?>" alt="<?php echo $description1 ?> ">
        <img src="<?php echo $image2 ?>" alt="<?php echo $description2 ?> ">
        <img src="<?php echo $image3 ?>" alt="<?php echo $description3 ?> ">
    </div>
</div>
