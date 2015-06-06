<?php
$title = "Image Gallery";
if(empty($_SESSION['username'])) header ("Location index.php?msg=Need to Login");
require_once "config.php";
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
if($row){
    $houseID=$row['houseID']; } else {
    header ("Location: view_imageUpload.php?msg=Upload_pics_first");
    die("Redirecting to: view_imageUpload.php");}



$query = "
                    SELECT *
                    From images
                    WHERE
                    houses_houseID = ".$houseID;

try {
    $statement = $db->prepare($query);
    $statement->execute( array(':houses_houseID'=>$houseID ) );}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }

    foreach ($statement as $row) {
        $imageID[] = $row['imageID'];
        $image[] = $row['imageName'];
        $imageDescr[] = $row['imageDescr'];
        }

require_once "view_head.php";
require_once "view_navbar.php";

?>
<div class="row">
    <h4 class="well text-center">Image Gallery </h4>
</div>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#">
                        <img class="thumbnail img-responsive" src="<?php if (!empty($image[0])) echo $image[0]; else echo "img/no_image.gif" ?>" alt="<?php echo $imageDescr[0] ?>" />
                    </a>
                    <h3 class="lead text-center"><?php if (!empty($imageDescr[0])) echo $imageDescr[0]; else echo "No Image" ?></h3>
                    <form name="deleteImageX" method="GET" action="con_delete-images.php">
                        <input type="hidden" name="id" value="<?php echo $imageID[0] ?>" />
                        <input type="hidden" name="imageName" value="<?php echo $image[0] ?>" />
                        <input class="btn btn-danger center-block" type="submit" value="delete"/>
                    </form>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <img class="thumbnail img-responsive"src="<?php if (!empty($image[1])) echo $image[1]; else echo "img/no_image.gif" ?>" alt="<?php echo $imageDescr[1] ?>" />
                    </a>
                    <h3 class="lead text-center"><?php if (!empty($imageDescr[1])) echo $imageDescr[1]; else echo "No Image" ?></h3>
                    <form name="deleteImageX" method="GET" action="con_delete-images.php">
                        <input type="hidden" name="id" value="<?php echo $imageID[1] ?>" />
                        <input type="hidden" name="imageName" value="<?php echo $image[1] ?>" />
                        <input class="btn btn-danger center-block" type="submit" value="delete"/>
                    </form>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <img class="thumbnail img-responsive"src="<?php if (!empty($image[2])) echo $image[2]; else echo "img/no_image.gif" ?>" alt="<?php echo $imageDescr[2] ?>" />
                    </a>
                    <h3 class="lead text-center"><?php if (!empty($imageDescr[2])) echo $imageDescr[2]; else echo "No Image" ?></h3>
                    <form name="deleteImageX" method="GET" action="con_delete-images.php">
                        <input type="hidden" name="id" value="<?php echo $imageID[2] ?>" />
                        <input type="hidden" name="imageName" value="<?php echo $image[2] ?>" />
                        <input class="btn btn-danger center-block" type="submit" value="delete"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>

                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php
require_once "view_footer.php";
?>