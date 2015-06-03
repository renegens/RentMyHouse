<?php

//needs fixing and implementations
if (empty($_GET)) {header ("Location: view_advanced-search.php?msg=No-search data entered");}

if (isset($_GET['state'])){$state = $_GET['state'];}

if (isset($_GET['price'])){$price = $_GET['price'];}

if (isset($_GET['wifi'])){$wifi = $_GET['wifi'];}

if (isset($_GET['pool'])){$pool = $_GET['pool'];}

if (isset($_GET['maid'])){$maid = $_GET['maid'];}

require "config.php";

$sql = "select * from houses";
$c=0;
$pricestate = false;
$locationstate = false;

if($price!=null){
    $sql += "WHERE price = :price"; $count+=10; $pricestate = true;}
if($location != null)
{
    $locationstate = true;
    if($count != 0)
    {
        $sql += "  AND location = :location";
    }else {
        $sql += "WHERE location = :location";
    }
    $count+=20;
}


?>



