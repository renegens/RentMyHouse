<?php
$title = "Upload Images";

require("config.php");
if(empty($_SESSION['user']))
{
    header("Location: index.php");
    die("Redirecting to index.php");
}

include "view_head.php";
include "view_navbar.php";
?>

<h2 class="text-center">Upload Images</h2>
<form class="form-horizontal" method="post" action="con_upload-images.php" enctype="multipart/form-data">
    <fieldset>
        <!-- File Button 1-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="image">Upload Image</label>
            <div class="col-md-4">
                <input id="image" name="fileToUpload1" class="input-file" type="file">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">Image Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="imageDescr" name="imageDescr1" placeholder="A beautiful house by the sea.."></textarea>
            </div>
        </div>

        <!-- File Button 2-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="image">Upload Image</label>
            <div class="col-md-4">
                <input id="image" name="fileToUpload2" class="input-file" type="file">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">Image Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="imageDescr" name="imageDescr2" placeholder="A beautiful house by the sea.."></textarea>
            </div>
        </div>

        <!-- File Button 3-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="image">Upload Image</label>
            <div class="col-md-4">
                <input id="image" name="fileToUpload3" class="input-file" type="file">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">Image Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="imageDescr" name="imageDescr3" placeholder="A beautiful house by the sea.."></textarea>
            </div>
        </div>

    </fieldset>
    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
            <button id="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>


<?php

include "view_footer.php";
?>