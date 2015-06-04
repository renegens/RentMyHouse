<?php
require("config.php");

//check captcha - send to error.php if failed to match
    if ( $_SESSION['security_code'] !== $_POST['captcha'] ) { unset($_SESSION['security_code']);
    header("Location: view_register.php?msg=Captcha do not match! Please retry.");
        exit();}

if(!empty($_POST))
{
    // Ensure that the user fills out fields 
    if(empty($_POST['username']))
    { die("Please enter a username."); }
    if(empty($_POST['password']))
    { die("Please enter a password."); }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    { die("Invalid E-Mail Address"); }
    if(empty($_POST['captcha']))
    { die("Invalid Captcha"); }

    // Check if the username is already taken
    $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        ";
    $query_params = array( ':username' => $_POST['username'] );
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
    $row = $stmt->fetch();
    if($row){ die("This username is already in use"); }
    $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        ";
    $query_params = array(
        ':email' => $_POST['email']
    );
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());}
    $row = $stmt->fetch();
    if($row){ die("This email address is already registered"); }

    //Sent Mail to user not working due to host reasons
    $active = 0;
    $code = rand(10000,99999);
    $subject = "Rent My House Email Verification";
    $message = "Hello, this the the activation code".$code;
    $result = mail($_POST['email'], $subject , $message);


    // Add row to database 
    $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email,
                active,
                verificationCode
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email,
                :active,
                :verificationCode
            ) 
        ";

    // Security measures updated for SHA 512 with salt 6
    $salt = '$6$'.rand(10000000,99999999).'$';
    //$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
    $password = crypt($_POST['password'], $salt); //encrypt the password
    //$password = hash('sha256', $_POST['password'] . $salt);
    //for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); }
    $query_params = array(
        ':username' => $_POST['username'],
        ':password' => $password,
        ':salt' => $salt,
        ':email' => $_POST['email'],
        ':active' => $active,
        ':verificationCode' => $code

    );
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }


    if ($result){
        //store in cookie the username for late
        $user = $_POST['username'];
        header("Location: view_activationcode.php?user=".$user);
    }
    die("Redirecting to index.php");

}
?>