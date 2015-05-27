<?php

// This is the 'search' function that will return all possible rows starting with the keyword sent by the user
function searchForKeyword($keyword) {
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

    $stmt = $db->prepare("SELECT name as name FROM houses WHERE name LIKE ? ORDER BY name");

    $keyword = $keyword . '%';
    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();

    $results = array();

    if ($isQueryOk) {
        $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } else {
        trigger_error('Error executing statement.', E_USER_ERROR);
    }

    $db = null;

    return $results;
    //OR state OR address OR price OR wifi OR pool OR maid OR description OR stars
}
?>







