<?php
$title = "Activation Code";
include_once("config.php");
include_once "view_head.php";
include_once "view_navbar.php";

$query = "
            SELECT
                verificationCode
            FROM users
            WHERE
                username = :username
        ";
$query_params = array(
    ':username' => $_GET['user']
);

try{
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
    $code = $stmt->fetchColumn();
}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
?>

<div class="row">
    <h4 class="well text-center">Activation Code to complete registration: <?php echo $code?> </h4>
</div>
<div class="row text-center">
    <a href="view_verify.php">Press Here to verify your account</a>
</div>
<?php
include_once "view_footer.php";
?>


