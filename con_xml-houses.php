<?php
require("config.php");

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}

//getting all marker
$query = 'SELECT * FROM houses';
$statement = $db->prepare($query);
$statement->execute();

header("Content-type: text/xml");
echo '<'.'?xml version="1.0" encoding="utf-8"?'.'>';

// Start XML file, echo parent node
echo '<houses>';

// Iterate through the rows, printing XML nodes for each
foreach ($statement as $row) {
    echo '<house ';
    echo 'houseID="' . $row['houseID'] . '" ';
    echo 'state="' . parseToXML($row['state']) . '" ';
    echo 'address="' . parseToXML($row['address']) . '" ';
    echo 'price="' . $row['price'] . '" ';
    echo 'meter="' . $row['meter'] . '" ';
    echo 'telephone="' . $row['telephone'] . '" ';
    echo 'wifi="' . $row['wifi'] . '" ';
    echo 'pool="' . $row['pool'] . '" ';
    echo 'maid="' . $row['maid'] . '" ';
    echo 'description="' . parseToXML($row['description']) . '" ';
    echo 'stars="' . $row['stars'] . '" ';
    echo 'lat="' . $row['latitude'] . '" ';
    echo 'lng="' . $row['longitude'] . '" ';
    echo '/>';

}

// End XML file
echo '</houses>';

?>