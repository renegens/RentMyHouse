<?php
$title = "Search Results";
require("config.php");
include "view_head.php";
include "view_navbar.php";

if (isset($_GET['simpleSearch'])){

$recordsPerPage = 3;
if (isset($_GET['page']))   //αν υπάρχει παράμετρος στο URL
    $curPage = $_GET['page']; //τότε ότι λέει η παράμετρος
else                        //διαφορετικά είναι η πρώτη σελίδα
    $curPage = 1;
//Υπολόγισε τον δείκτη της πρώτης από τις εγγραφές που θέλουμε
$startIndex = ($curPage - 1) * $recordsPerPage;

//get all rows
try {
$sql = "SELECT count(houseID) AS recCount FROM houses where state LIKE :state";
$statement = $db->prepare($sql);
$statement->execute(array(':state' => $_GET['simpleSearch']));
$record = $statement->fetch(PDO::FETCH_ASSOC);
$pages = ceil($record['recCount'] / $recordsPerPage);
$totalResults = $record['recCount'];
$statement->closeCursor();

//query for results
$record = null;
$sql = "SELECT * FROM houses WHERE state=:state LIMIT $startIndex, $recordsPerPage";
$statement = $db->prepare($sql);
$statement->execute(array(':state' => $_GET['simpleSearch']));

?>
<div class="container">

    <hgroup class="mb20">
        <h1>Search Results</h1>

        <h2 class="lead"><strong class="text-danger"><?php echo $totalResults ?></strong> results were found for the
            search <strong class="text-danger"><?php echo $_GET['simpleSearch'] ?></strong></h2>
    </hgroup>
    <section class="col-md-12">


        <?php

        while ($record = $statement->fetch((PDO::FETCH_ASSOC))) {
            $rowCount = count($record);

            echo '<article class="search-result row">';
            echo '<div class="col-xs-12 col-sm-12 col-md-3">';
            echo '<a href="view_advanced-searchresults.php?houseID=' . $record['houseID'] . '" title="Lorem ipsum" class="thumbnail"><img src="' . $record['imageName'] . '" alt="" /></a>';
            echo '</div>';
            echo '<div class="col-xs-12 col-sm-12 col-md-7 excerpet">';
            echo '<h3><a href="view_advanced-searchresults.php?houseID=' . $record['houseID'] . '" title="">' . $record['name'] . '</a></h3>';
            echo '<p>' . $record['description'] . '.</p>';
            //echo        '<span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>';
            echo '</div>';
            echo '<span class="clearfix borda"></span>';
            echo '</article>';
        }

        $statement->closeCursor();
        $pdo = null;

        } catch (PDOException $e) {
            print "Database Error: " . $e->getMessage() . "<br/>";
            die();
        }


        ?>
    </section>
    <!-- Button (Double) -->
    <div class="form-group">
        <div class="col-md-8">
            <a class="btn btn-lg btn-default" href="view_advanced-search.php">Advanced Search</a>
        </div>
    </div>


    <hr/>
    <div class="text-center">

        <?php
        for ($i = 1; $i <= $pages; $i++) {
            // εάν δεν είναι η τρέχουσα σελίδα, φτιάξε link
            if ($i <> $curPage) { ?>

                <a href="model_advanced-search.php?page=<?php echo $i ?>&simpleSearch=<?php echo $_GET['simpleSearch'] ?>"><?php echo $i ?></a>&nbsp;&nbsp;

                <?php // αν είναι η τρέχουσα σελίδα, τύπωσε απλά τον αριθμό της
            } else
                echo $i . "&nbsp;&nbsp;";
        }
        }
        ?>

    </div>
    <?php require "view_footer.php" ?>

