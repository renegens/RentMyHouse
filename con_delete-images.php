<?php
require_once "config.php";

$id = $_GET['id'];

if (isset($_SESSION['username'])){

    $query = "DELETE FROM images WHERE imageID=".$id;

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);

    }catch (PDOException $e) {
        echo 'PDO Exception: '.$e->getMessage();}

    if ($result==true) {
        header('Location: view_image-gallery.php?msg=Delete Successful');
        exit();
    } else {
        header('Location: view_image-gallery.php?msg=Problem');
        exit();
    }
}else header ("Location: index.php?msg=Please Login");
