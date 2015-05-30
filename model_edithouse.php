<?php
$title = "Edit House";
require "config.php";
if(empty($_SESSION['username']))
{
    header("Location: index.php");
    die("Redirecting to index.php");
}


$userid=-1;
// Check if the house is already taken
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
//die('Location: index.php?msg='.$userid);

$query = "SELECT * FROM houses WHERE users_id= ".$userid;

try {
    $statement = $db->prepare($query);
    $statement->execute( array(':username'=>$_SESSION['username'] ) );

    if ($row = $statement->fetch()) {
        $houseid = $row['houseID'];
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
        $imageLink  = $row['imageName'];
        $imageDescr = $row['imageDescr'];
        $imageLink2 = $row['imageName2'];
        $imageDescr = $row['imageDescr2'];
        $imageLink3 = $row['imageName3'];
        $imageDescr = $row['imageDescr3'];
        $imageLink4 = $row['imageName4'];
        $imageDescr = $row['imageDescr4'];
        $longitude  = $row['longitude'];
        $latitude = $row['latitude'];

    } else {
        header('Location: index.php?msg=access-denied');
        exit();
    }
} catch (PDOException $ex) {
    header('Location: index.php?msg=no-connection-to-server');
    exit();
}

require "view_head.php";
require "view_navbar.php";
?>

<div class="col-lg-6 col-lg-offset-2">
    <h2 class="text-center">Admin Panel</h2>
    <form class="form-horizontal" method="post" action="con_editupload.php" >
        <fieldset>

            <!-- Form Name -->
            <legend class="text-center">Edit your house info</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="housename">House Name</label>
                <div class="col-md-5">
                    <input id="name" name="name" type="text" placeholder="House at sea" value="<?php echo $name ?>" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Select Multiple -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="state">Select State</label>
                <div class="col-md-5">
                    <select id="state" name="state" class="form-control" multiple="multiple">

                        <option value="Thraki" <?php if ($state == 'Thraki') echo 'selected="selected"' ?>>Thraki</option>
                        <option value="Makedonia" <?php if ($state == 'Makedonia') echo 'selected="selected"' ?>>Makedonia</option>
                        <option value="Thessalia" <?php if ($state == 'Thessalia') echo 'selected="selected"' ?>>Thessalia</option>
                        <option value="Hpeiros" <?php if ($state == 'Hpeiros') echo 'selected="selected"' ?>>Hpeiros</option>
                        <option value="Sterea Ellada" <?php if ($state == 'Sterea Ellada') echo 'selected="selected"' ?>>Sterea Ellada</option>
                        <option value="Peloponissos" <?php if ($state == 'Peloponissos') echo 'selected="selected"' ?>>Peloponissos</option>
                        <option value="Nisia Aigaiou" <?php if ($state == 'Nisia Aigaiou') echo 'selected="selected"' ?>>Nisia Aigaiou</option>
                        <option value="Nisia Ioniou" <?php if ($state == 'Nisia Ioniou') echo 'selected="selected"' ?>>Nisia Ioniou</option>
                        <option value="Kriti" <?php if ($state == 'Kriti') echo 'selected="selected"' ?>>Kriti</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="address">Adress</label>
                <div class="col-md-5">
                    <input id="address" name="address" type="text" placeholder="Panagouli 7" class="form-control input-md" value="<?php echo $address ?>" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="price">Price</label>
                <div class="col-md-5">
                    <input id="price" name="price" type="text" placeholder="€" value="<?php echo $price ?>" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="meter">Square Meter</label>
                <div class="col-md-5">
                    <input id="meter" name="meter" type="text" placeholder="42m^2" value="<?php echo $meter ?>" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="telephone">Telephone</label>
                <div class="col-md-5">
                    <input id="telephone" name="telephone" type="text" placeholder="6973291041" value="<?php echo $telephone ?>" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="comforts">Comforts</label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="comforts-0">
                            <input type="checkbox" name="wifi"<?php if ($wifi == 1) echo 'checked="checked"' ?>id="comforts-0" value="1">
                            Wifi
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="comforts-1">
                            <input type="checkbox" name="pool" <?php if ($pool == 1) echo 'checked="checked"' ?>id="comforts-1" value="1">
                            Pool
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="comforts-2">
                            <input type="checkbox" name="maid" <?php if ($maid == 1) echo 'checked="checked"' ?> id="comforts-2" value="1">
                            Maid
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="stars">Stars</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="stars-0">
                        <input type="radio" name="stars" id="stars-0" value="1" checked="checked">
                        1
                    </label>
                    <label class="radio-inline" for="stars-1">
                        <input type="radio" name="stars" id="stars-1" value="2">
                        2
                    </label>
                    <label class="radio-inline" for="stars-2">
                        <input type="radio" name="stars" id="stars-2" value="3">
                        3
                    </label>
                    <label class="radio-inline" for="stars-3">
                        <input type="radio" name="stars" id="stars-3" value="4">
                        4
                    </label>
                    <label class="radio-inline" for="stars-4">
                        <input type="radio" name="stars" id="stars-4" value="5">
                        5
                    </label>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Notes</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="description" value="<?php echo $description ?>" name="description">A beautiful house by the sea..</textarea>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="image">Upload Image</label>
                <div class="col-md-4">
                    <input id="image" name="fileToUpload" class="input-file" type="file">
                </div>
                <div class="row">
                    <div class="col-xs-3">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo $imageLink ?>" alt="<?php echo $imageDescr ?>">
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo $imagelink2 ?>" alt="<?php echo $imageDescr2 ?>">
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo $imageLink3 ?>" alt="<?php echo $imageDescr3 ?>">
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#" class="thumbnail">
                            <img src="<?php echo $imageName4 ?>" alt="<?php echo $imageDescr4 ?>">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="latitude">Latitude</label>
                <div class="col-md-5">
                    <input id="latitude" name="latitude" type="text" value="<?php echo $latitude ?>" placeholder="40.53646546" class="form-control input-md" required="">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="longitude">Longitude</label>
                <div class="col-md-5">
                    <input id="longitude" name="longitude" value="<?php echo $longitude ?>" type="text" placeholder="35.6938203" class="form-control input-md" required="">

                </div>
            </div>



            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-8">
                    <button id="submit" name="submit" class="btn btn-success">Submit</button>
                    <button id="clear" name="clear" class="btn btn-default">Clear</button>
                </div>
            </div>

        </fieldset>
    </form>

</div>

<?php require("view_footer.php") ?>