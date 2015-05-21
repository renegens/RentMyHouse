<?php
/**
 * Created by PhpStorm.
 * User: renegens
 * Date: 5/21/15
 * Time: 16:14
 */
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php?msg=Need to log in");
    exit();
}
?>