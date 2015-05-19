<?php
/**
 * Created by PhpStorm.
 * User: renegens
 * Date: 5/19/15
 * Time: 16:12
 */
// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
session_start();
if( isset($_SESSION[$myusername]) ){
    header("location:main_login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>

