<?php

$title = "Search Results";
require_once "config.php";
include "view_head.php";
include "view_navbar.php";

$recordsPerPage = 3;
if (isset($_GET['page']))   //αν υπάρχει παράμετρος στο URL
    $curPage = $_GET['page']; //τότε ότι λέει η παράμετρος
else                        //διαφορετικά είναι η πρώτη σελίδα
    $curPage = 1;
//Υπολόγισε τον δείκτη της πρώτης από τις εγγραφές που θέλουμε
$startIndex = ($curPage-1) * $recordsPerPage;

//get all rows
try {
$sql = "SELECT count(houseID) AS recCount FROM houses WHERE (price > :price/2 AND price < price*2)";
$statement = $db->prepare($sql);
$statement->execute(array(':price' => $_GET['price']));
$record = $statement->fetch(PDO::FETCH_ASSOC);
$pages = ceil($record['recCount'] / $recordsPerPage);
$totalResults = $record['recCount'];
$statement->closeCursor();


//query for results
$record = null;
$sql = "SELECT * FROM houses WHERE (price > :price/2 AND price < price*2) ORDER BY price ASC LIMIT $startIndex, $recordsPerPage ";
$statement = $db->prepare($sql);
$statement->execute(array(':price' => $_GET['price']));

?>

?>
<div class="container">

    <hgroup class="mb20">
        <h1>Search Results</h1>
        <h2 class="lead"><strong class="text-danger"><?php echo $totalResults ?></strong> results were found for the search <strong class="text-danger"><?php echo $_GET['price'] ?> &#x20AC; </strong></h2>
    </hgroup>
    <section class="col-md-12">


<?php

    while ($record = $statement->fetch((PDO::FETCH_ASSOC))){

    echo   '<article class="search-result row">';
    echo   '<div class="col-xs-12 col-sm-12 col-md-3">';
    echo '<a href="view_advanced-searchresults.php?houseID='.$record['houseID'].'" title="Lorem ipsum" class="thumbnail"><img src="'.$record['imageName'].'" alt="" /></a>';
    echo    '</div>';
    echo    '<div class="col-xs-12 col-sm-12 col-md-7 excerpet">';
    echo        '<h3><a href="view_advanced-searchresults.php?houseID='.$record['houseID'].'" title="">'.$record['name'].'</a></h3>';
    echo        '<p>'.$record['description'].'.</p>';
    //echo        '<span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>';
     echo '</div>';
     echo   '<span class="clearfix borda"></span>';
    echo '</article>';
    }

    $statement->closeCursor();
    $pdo = null;

}catch (PDOException $e) {
    print "Database Error: " . $e->getMessage() . "<br/>";
    die();
}

?>
    </section>



<hr/>
<div class="text-center">

    <?php
    for ($i=1; $i<=$pages; $i++) {
        // εάν δεν είναι η τρέχουσα σελίδα, φτιάξε link
        if ($i<>$curPage) { ?>

            <a href="model_advanced-search.php?page=<?php echo $i ?>&price=<?php echo $_GET['price'] ?>"><?php echo $i ?></a>&nbsp;&nbsp;

            <?php   // αν είναι η τρέχουσα σελίδα, τύπωσε απλά τον αριθμό της
        } else
            echo $i."&nbsp;&nbsp;";
    } ?>

</div>
<?php require "view_footer.php" ?>



