<?php
require("config.php");

if(!empty($_POST))
{
    // Ensure that the user fills out fields
    if(empty($_POST['name']))
    { die("Please enter a house name."); }
    if(empty($_POST['state']))
    { die("Please enter a state."); }
    if(empty($_POST['address']))
    { die("Please enter an address."); }
    if(empty($_POST['meter']))
    { die("Please enter a house size."); }
    if(empty($_POST['price']))
    { die("Please enter a price."); }
    if(empty($_POST['stars']))
    { die("Please enter a rating."); }
    if(empty($_POST['description']))
    { die("Please enter a description."); }
    if(empty($_POST['longitude']))
    { die("Please enter a longitude."); }
    if(empty($_POST['latitude']))
    { die("Please enter a latitude."); }
    if(empty($_POST['wifi']))
    {$wifi = 0;}
    else $wifi = 1;
    if(empty($_POST['pool']))
    {$pool = 0;}
    else $pool = 1;
    if(empty($_POST['maid']))
    {$maid = 0;}
    else $maid = 1;



    //Check for username to be same with session
    //get session username

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

    //Fist me must delete the row
    $query = "DELETE FROM houses
              WHERE
              users_id= ".$userid; //"SELECT * FROM houses WHERE users_id= ".$userid;
    $query_params = ( array( ":users_id" => $userid ) ); //(':username'=>$_SESSION['username'] )
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }



    // Add row to database
    // to do add imageName to both
    $query = "
            INSERT INTO houses (
                  name,
                  state,
                  address,
                  meter,
                  price,
                  telephone,
                  wifi,
                  pool,
                  maid,
                  description,
                  stars,
                  longitude,
                  latitude,
                  users_id

                  ) VALUES (
                    :name,
                    :state,
                    :address,
                    :meter,
                    :price,
                    :telephone,
                    :wifi,
                    :pool,
                    :maid,
                    :description,
                    :stars,
                    :longitude,
                    :latitude,
                    :username
                     )
        ";

    $query_params =  array (
        ':name' => $_POST['name'],
        ':state' => $_POST['state'],
        ':address' => $_POST['address'],
        ':meter' => $_POST['meter'],
        ':price' => $_POST['price'],
        ':telephone' => $_POST['telephone'],
        ':wifi' => $wifi,
        ':pool' => $pool,
        ':maid' => $maid,
        ':description' => $_POST['description'],
        ':stars' => $_POST['stars'],
        ':longitude' => $_POST['longitude'],
        ':latitude' => $_POST['latitude'],
        ':username' => $userid
    );

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);

    }
    catch(PDOException $ex) {
        die("Failed to run query: " . $ex->getMessage());
    }



    header("Location: index.php?msg=Data Entry Success");
    die("Redirecting to index.php");






    //To do check image upload
    /*if (isset($_FILES['mainphoto'])) {
        $filename = $_FILES['mainphoto']['name'];
        $ext = strtolower(substr($filename, -3));
        $new_filename = uniqid("villasprifileimage-", true) . '.' . $ext;
        $copied = copy($_FILES['mainphoto']['tmp_name'], 'villasprofileimages/' . $new_filename);
    }*/

    if ($query_params) {
        header('Location: secret.php?msg=success');
        exit();
    } else {
        header('Location: secret.php?msg=problem');
        exit();
    }
} else {
    header('Location: secret.php?msg=wrong data');
    exit();

}
?>


