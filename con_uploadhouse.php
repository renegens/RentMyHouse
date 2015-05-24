<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST)) {

    $garage = 0;
    $wifi = 0;
    $pool = 0;
    $jacuzzi = 0;
    $spa = 0;
    $gym = 0;
    $comments = "";
    if (isset($_FILES['mainphoto'])) {
        $filename = $_FILES['mainphoto']['name'];
        $ext = strtolower(substr($filename, -3));
        $new_filename = uniqid("villasprifileimage-", true) . '.' . $ext;
        $copied = copy($_FILES['mainphoto']['tmp_name'], 'villasprofileimages/' . $new_filename);
    }



    if (isset($_POST['garage'])) {
        $garage = 1;
    }


    if (isset($_POST['wifi'])) {
        $wifi = 1;
    }



    if (isset($_POST['pool'])) {
        $pool = 1;
    }


    if (isset($_POST['jacuzzi'])) {
        $jacuzzi = 1;
    }

    if (isset($_POST['spa'])) {
        $spa = 1;
    }

    if (isset($_POST['gym'])) {
        $gym = 1;
    }

    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    }

    try {
        require('config.php');
        $pdoObject = new PDO("mysql:host=$dbhost; dbname=$dbname;", $dbuser, $dbpass);
        $pdoObject->exec('set names utf8');
        $sql = 'INSERT INTO houses (houseName,area,address,addressNumber,postalCode,coords,telephone,mobilePhone,squareMeter,price,capacity,garage,wifi,pool,jacuzzi,spa,gym,rating,villasDescr,mainImageName,users_username)
            VALUES (:housesname,:area,:address,:addressnumber,:postalcode,:coords,:telephone,:mobilephone,:squaremeter,:price,:capacity,:garage,:wifi,:pool,:jacuzzi,:spa,:gym,:rating,:villadescr,:imagename,:username)';
        $statement = $pdoObject->prepare($sql);
        $myResult = $statement->execute(array(':villasname' => $_POST['housename'],
            ':area' => $_POST['area'],
            ':address' => $_POST['address'],
            ':addressnumber' => $_POST['addressno'],
            ':postalcode' => $_POST['postalcode'],
            ':coords' => $_POST['coords'],
            ':telephone' => $_POST['telephone'],
            ':mobilephone' => $_POST['mobilephone'],
            ':squaremeter' => $_POST['squaremeter'],
            ':price' => $_POST['price'],
            ':capacity' => $_POST['capacity'],
            ':garage' => $garage,
            ':wifi' => $wifi,
            ':pool' => $pool,
            ':jacuzzi' => $jacuzzi,
            ':spa' => $spa,
            ':gym' => $gym,
            ':rating' => $_POST['rating'],
            ':villadescr' => $comments,
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

