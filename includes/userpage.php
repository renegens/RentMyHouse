<?php
//check if user is logged in to see this page if not the islooged will
//redirect elsewhere
require('islogged.php');

// if log in susscefoul
$title="User home page";
?>

<?php
include('includes/head.php');
include('includes/navbar.php');
?>

<div class="row">
    <div class="well-sm">
        <h3><?php echo $username?></h3>
        <h4>This is the user page when logged in</h4>
    </div>
</div>



<?php require('includes/footer.php'); ?>

