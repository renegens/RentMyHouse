<?php session_start(); ?>

<?php

$title = "Home Page";



//Main index file including every page element

include("includes/head.php");
include("includes/navbar.php");
include("includes/carousel.php");
include("includes/onerow.php");
include("includes/images.php");
include("includes/maps.php");
//form for login or create
if ( !isset($_SESSION['username'])) {
    include("includes/createform.php");
    include "includes/loginform.php";
}else{
    echo '<h1>Hello '.$_SESSION['username'].'</h1>';


}

include("includes/footer.php");

?>





