<?php

$host="localhost"; // Host name 
$username="admin"; // Mysql username
$password="admin"; // Mysql password no password for windows root password for mac
$dbname="rentmyhouse"; // Database name




//Connect to server and select database.
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
}
catch(PDOException $ex){
    die("Failed to connect to the database: " . $ex->getMessage());
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

header('Content-Type: text/html; charset=utf-8');
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// Example
if ( is_session_started() === FALSE ) session_start();

?>