<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST)) {

    $wifi = 0;
    $pool = 0;
    $maid = 0;
    $comments = "";

    //To do check image upload
    /*if (isset($_FILES['mainphoto'])) {
        $filename = $_FILES['mainphoto']['name'];
        $ext = strtolower(substr($filename, -3));
        $new_filename = uniqid("villasprifileimage-", true) . '.' . $ext;
        $copied = copy($_FILES['mainphoto']['tmp_name'], 'villasprofileimages/' . $new_filename);
    }*/

    if (isset($_POST['wifi'])) {
        $wifi = 1;
    }


    if (isset($_POST['pool'])) {
        $pool = 1;
    }

    if (isset($_POST['maid'])) {
        $maid = 1;
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    }


    try {
        require('config.php');
        //Connect to server and select database.
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $pdoObject = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
        }
        catch(PDOException $ex){
            die("Failed to connect to the database: " . $ex->getMessage());
        }

        $sql = 'INSERT INTO houses (
                  name,
                  state,
                  address,
                  telephone,
                  size,
                  price,
                  maid,
                  wifi,
                  pool,
                  stars,
                  description,
                  longitude,
                  latitude,
                  imageName
                  ) VALUES (
                    :name,
                    :state,
                    :address,
                    :telephone,
                    :size,
                    :price,
                    :wifi,
                    :pool,
                    :maid,
                    :stars,
                    :description,
                    :imageName
                    )';
        $statement = $pdoObject->prepare($sql);
        $myResult = $statement->execute( array(
            ':name' => $_POST['name'],
            ':state' => $_POST['state'],
            ':address' => $_POST['address'],
            ':longitude' => $_POST['longitude'],
            ':latitude' => $_POST['latitude'],
            ':telephone' => $_POST['telephone'],
            ':size' => $_POST['size'],
            ':price' => $_POST['price'],
            ':maid' => $maid,
            ':wifi' => $wifi,
            ':pool' => $pool,
            ':stars' => $_POST['stars'],
            ':description' => $description,
            ':imagename' => $new_filename,)
        );
        $statement->closeCursor();
        $pdoObject = null;
    } catch (PDOException $ex) {
        header('Location: index.php?msg=Αδύνατη η σύνδεση με τον server');
        exit();
    }

    if ($myResult) {
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

