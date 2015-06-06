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
//echo $_GET['pricexml'];
//query for results

$sql = "SELECT * FROM houses WHERE (price > :price/2 AND price < price*2) ORDER BY price LIMIT 3";
$statement = $db->prepare($sql);
$statement->execute(array(':price' => $_GET['pricexml']));

header("Content-Type: text/xml; charset=UTF-8");


echo '<?xml version="1.0" encoding="UTF-8"?' . '>' . "\r\n";

// Start XML file, echo parent node
echo '<!DOCTYPE houses [';
echo '        <!ELEMENT houses (house)*>';
echo '        <!ELEMENT house (#PCDATA)>';
echo '        <!ATTLIST house';
echo '                address CDATA #REQUIRED';
echo '                description CDATA #REQUIRED';
echo '                houseID CDATA #REQUIRED';
echo '                lat CDATA #REQUIRED';
echo '                lng CDATA #REQUIRED';
echo '                maid CDATA #REQUIRED';
echo '                meter CDATA #REQUIRED';
echo '                pool CDATA #REQUIRED';
echo '                price CDATA #REQUIRED';
echo '                stars CDATA #REQUIRED';
echo '                state CDATA #REQUIRED';
echo '                telephone CDATA #REQUIRED';
echo '                wifi CDATA #REQUIRED>';
echo '        ]>';
echo '<houses>';

// Iterate through the rows, printing XML nodes for each
foreach ($statement as $row) {
    echo '<house ';
    echo "\r\n".'houseID="' . $row['houseID'] . '" ';
    echo "\r\n".'state="' . parseToXML($row['state']) . '" ';
    echo "\r\n".'address="' . parseToXML($row['address']) . '" ';
    echo "\r\n".'price="' . $row['price'] . '" ';
    echo "\r\n".'meter="' . $row['meter'] . '" ';
    echo "\r\n".'telephone="' . $row['telephone'] . '" ';
    echo "\r\n".'wifi="' . $row['wifi'] . '" ';
    echo "\r\n".'pool="' . $row['pool'] . '" ';
    echo "\r\n".'maid="' . $row['maid'] . '" ';
    echo "\r\n".'description="' . parseToXML($row['description']) . '" ';
    echo "\r\n".'stars="' . $row['stars'] . '" ';
    echo "\r\n".'lat="' . $row['latitude'] . '" ';
    echo "\r\n".'lng="' . $row['longitude'] . '" ';
    echo '/>';

}

// End XML file
echo '</houses>';

?>
