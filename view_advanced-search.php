<?php
//the view to make an advanced search with forms

include ("view_head.php");
include ("view_navbar.php");

?>

<div class="col-lg-4 col-lg-offset-4">
    <h2 class="text-center">Advanced Search</h2>
    <form class="form-horizontal" method="get" action="con_advanced-search.php">
        <fieldset>

            <!-- Form Name -->
            <legend class="text-center">Enter Search Criteria</legend>

            <!-- Select Multiple -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="state">Select State</label>
                <div class="col-md-5">
                    <select id="state" name="state" class="form-control" multiple="multiple">
                        <option value="Thraki">Thraki</option>
                        <option value="Makedonia">Makedonia</option>
                        <option value="Thessalia">Thessalia</option>
                        <option value="Hpeiros">Hpeiros</option>
                        <option value="Sterea Ellada">Sterea Ellada</option>
                        <option value="Peloponissos">Peloponissos</option>
                        <option value="Nisia Aigaiou">Nisia Aigaiou</option>
                        <option value="Nisia Ioniou">Nisia Ioniou</option>
                        <option value="Kriti">Kriti</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="price">Price</label>
                <div class="col-md-5">
                    <input id="price" name="price" type="text" placeholder="€" class="form-control input-md" required="">

                </div>
            </div>


            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="comforts">Comforts</label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="comforts-0">
                            <input type="checkbox" name="wifi" id="comforts-0" value="1">
                            Wifi
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="comforts-1">
                            <input type="checkbox" name="pool" id="comforts-1" value="1">
                            Pool
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="comforts-2">
                            <input type="checkbox" name="maid" id="comforts-2" value="1">
                            Maid
                        </label>
                    </div>
                </div>
            </div>


            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-8">
                    <button id="search" name="search" class="btn btn-success">Search</button>
                    <button id="clear" name="clear" class="btn btn-default">Clear</button>
                </div>
            </div>

        </fieldset>
    </form>

</div>


<?php include ("view_footer.php"); ?>

