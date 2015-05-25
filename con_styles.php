<?php

$default = 'style.css'; // define stylesheets
$custom = 'customStyle.css';


$expire = time()+60*60*24*30; // how long to remember css choice (60*60*24*30 = 30 days)

if ( (isset($_GET['css'])) && ($_GET['css'] == $custom) ) { // set cookie for light css
    $_SESSION['css'] = $_GET['css'];
    setcookie('css', $_GET['css'], $expire);
}

if ( (isset($_GET['css'])) && ($_GET['css'] == $default) ) { // set cookie for default css
    $_SESSION['css'] = $_GET['css'];
    setcookie('css', $_GET['css'], $expire);
}

if (isset($_COOKIE['css'])) { // check for css stored in cookie
    $savedcss = $_COOKIE['css'];
} else {
    $savedcss = $default;
}

if (isset($_SESSION['css'])) { // use session css else use cookie css
    $css = $_SESSION['css'];
} else {
    $css = $savedcss;
}

// the filename of the stylesheet is now stored in $css

echo '<link rel="stylesheet" href="css/'.$css.'">';
?>