<?php

include('config.php');

// table name 
$tbl_name=temp_members_db;

// Random confirmation code 
$confirm_code=md5(uniqid(rand()));

// values sent from form 
$name=$_POST['name'];
$email=$_POST['email'];
$country=$_POST['country'];

// Insert data into database 
$sql="INSERT INTO $tbl_name(confirm_code, name, email, password, country)VALUES('$confirm_code', '$name', '$email', '$password', '$country')";
$result=mysql_query($sql);

// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
    $to=$email;

// Your subject
    $subject="Rent My House email verification";

// From
    $header="from: your name <your email>";

// Your message
    $message="Your Comfirmation link \r\n";
    $message.="Click on this link to activate your account \r\n";
    $message.="http://localhost:63342/RentMyHouse/confirmation.php?passkey=$confirm_code";

// send email
    $sentmail = mail($to,$subject,$message,$header);
}

// if not found 
else {
    echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
    echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
    echo "Cannot send Confirmation link to your e-mail address";
}
?>
