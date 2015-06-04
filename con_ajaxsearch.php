<?php
require "config.php";

if (isset($_GET['wifi'])){$wifi = $_GET['wifi'];}

if (isset($_GET['pool'])){$pool = $_GET['pool'];}

if (isset($_GET['maid'])){$maid = $_GET['maid'];}


$query = "SELECT wifi,pool,maid From houses";
$statement = $db->prepare($query);
$statement->execute();

// Iterate through the rows, printing XML nodes for each
foreach ($statement as $row) {
        $wifi[] = $row['wifi'];
        $pool[] = $row['pool'];
        $maid[] = $row['maid'];
}

$wifiSum =  array_sum($wifi);
$poolSum = array_sum($pool);
$maidSum = array_sum($maid);

echo $wifiSum;
echo " || ";
echo $poolSum;
echo " || ";
echo $maidSum;
?>

