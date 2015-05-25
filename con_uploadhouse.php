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
        $pdoObject = new PDO("mysql:host=$dbhost; dbname=$dbname;", $dbuser, $dbpass);
        $pdoObject->exec('set names utf8');
        $sql = 'INSERT INTO houses
            (name,state,address,telephone,size,price,maid,wifi,pool,stars,description,longitude,latitude,imageName,userUsername)
              VALUES (:housesname,:state,:address,:telephone,:size,:price,:wifi,:pool,:maid,:stars,:description,:imageName,:userUsername)';
        $statement = $pdoObject->prepare($sql);
        $myResult = $statement->execute(array(':housesname' => $_POST['housename'],
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
            ':imagename' => $new_filename,
            ':username' => $_SESSION['username']));
        $statement->closeCursor();
        $pdoObject = null;
    } catch (PDOException $e) {
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

