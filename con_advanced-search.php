<?php

if (empty($_GET)) {header ("Location: view_advanced-search.php?msg=No-search data entered");}

if (isset($_GET['state'])){$state = $_GET['state'];}

if (isset($_GET['price'])){$price = $_GET['price'];}

if (isset($_GET['wifi'])){$wifi = $_GET['wifi'];}

if (isset($_GET['pool'])){$state = $_GET['pool'];}

if (isset($_GET['maid'])){$state = $_GET['maid'];}



$query = "
            SELECT
                *
            FROM houses
            WHERE
              state LIKE :state
            ";


$query_params = array( ':state' => $state,
                        ':price => ');
try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
$row = $stmt->fetch();









