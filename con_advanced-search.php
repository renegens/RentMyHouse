<?php

//needs fixing and implementations
if (empty($_GET)) {header ("Location: view_advanced-search.php?msg=No-search data entered");}

if (isset($_GET['state'])){$state = $_GET['state'];}

if (isset($_GET['price'])){$price = $_GET['price'];}

if(empty($_GET['wifi']))
{$wifi = 0;}
else $wifi = 1;

if(empty($_GET['pool']))
{$pool = 0;}
else $pool = 1;

if(empty($_GET['maid']))
{$maid = 0;}
else $maid = 1;

require "config.php";

$sql = "SELECT * FROM houses WHERE state LIKE :state AND price LIKE :price
        AND wifi LIKE :wifi AND pool LIKE :pool AND maid LIKE :maid";
$statement = $db->prepare($sql);
//πέρασμα παραμέτρων και εκτέλεση ερωτήματος
$statement->execute( array( ':state'=>$state,
                            ':price' =>$price,
                            ':wifi' =>$wifi,
                            ':pool' =>$pool,
                            ':maid' =>$maid ) );

while ( $record = $statement-> fetch() ) {

    echo $record['name'];

}
$statement->closeCursor();
$pdoObject = null;

?>



