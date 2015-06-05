<?php
$title = "Advanced Search";
//the view to make an advanced search with forms

include ("view_head.php");
include ("view_navbar.php");

?>
<div class="row">
    <h4 class="well text-center">Advanced Search</h4>
</div>
<div class="col-lg-4 col-lg-offset-4">


    <form class="form-horizontal" method="get" action="model_advanced-search.php">
        <fieldset>

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
                    <input id="price" name="price" type="text" placeholder="€" class="form-control input-md" >

                </div>
            </div>


            <!-- Multiple Checkboxes -->
            <div class="form-group" >
                <label class="col-md-4 control-label" for="comforts">Comforts</label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="comforts-0">
                            <input onclick="ajaxFunction(this);" type="checkbox" name="wifi" id="comforts-0" value="1"><span id="ajaxWifi" class="badge"></span></a>
                            Wifi
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="comforts-1">
                            <input onclick="ajaxFunction(this);" type="checkbox" name="pool" id="comforts-1" value="1"><span id="ajaxPool"  class="badge"></span></a>
                            Pool
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="comforts-2">
                            <input onclick="ajaxFunction(this);"  type="checkbox" name="maid" id="comforts-2" value="1"><span id="ajaxMaid" class="badge"></span></a>
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

<script>


    function ajaxFunction() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else if (window.ActiveXObject) {
            // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        else {
            alert("Your browser does not support XMLHTTP!");
        }
        xmlhttp.onreadystatechange=function() {
            if(xmlhttp.readyState==4) {
                var responseArray = xmlhttp.responseText.split("||");
                document.getElementById("ajaxWifi").innerHTML = responseArray[0];
                document.getElementById("ajaxPool").innerHTML = responseArray[1];
                document.getElementById("ajaxMaid").innerHTML = responseArray[2];
            }
        };


        var url= "con_ajaxsearch.php";

        xmlhttp.open("GET",url,true);
        xmlhttp.send(null);
    }


</script>


<?php include ("view_footer.php"); ?>

