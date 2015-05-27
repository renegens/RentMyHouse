<?php
require "con_search_simple_autocomplete.php";

if (!isset($_GET['keyword'])) {
    die();
}

$keyword = $_GET['keyword'];
$data = searchForKeyword($keyword);
echo json_encode($data);
?>