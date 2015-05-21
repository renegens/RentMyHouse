<?php
/**
 * Created by PhpStorm.
 * User: renegens
 * Date: 5/18/15
 * Time: 22:18
 */



//include ('config.php');

//Check if user is logged in from session or post
if ( !isset($_SESSION['username']) && isset($_POST['username'], $_POST['password']) ) {
    // get username and password from post table
    $username = $_POST['username'];
    $password = $_POST['password'];


    //flag for user
    $authorised = false;

    //Logic for connection to database now dummy with username test

    if ($username == 'test') {
        $authorised = true;
        session_start();
        //get the username from the session table
        $_SESSION['username'] = $username;
    }

    // Authoriization for false data
    if ($authorised == true) {
        header('Location: index.php');
        exit();
    } else {
        header('Location: /index.php?msg=Wrong User data');
        exit();
    }
}else {
    session_start();
    session_destroy();
    header('Location: /index.php?msg=Error - try again');
    exit();
}




?>





