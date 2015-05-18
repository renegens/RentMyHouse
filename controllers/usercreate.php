<?php

//Checking if values exist

//if (isset($_POST['Email']) && isset($_POST['userid'])
//    && isset($_POST['password']) && isset($_POST['password2']))
//{
    //Variables for usercreation from
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['passwordinput'];
    $password2 = $_POST['passwordinput2'];

//}

if ($password == $password2){
    $passWordMatch = true;
}
else $passWordMatch = false;


echo $email;
echo $username;
echo $password;
echo $password2;
echo $passWordMatch;


?>

