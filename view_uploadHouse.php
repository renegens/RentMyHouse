<?php

    require("config.php");
    if(empty($_SESSION['user']))
    {
        header("Location: index.php");
        die("Redirecting to index.php");
    }
require "view_head.php";
require "view_navbar.php";
?>

    <div class="col-lg-4 col-lg-offset-4">
        <h2 class="text-center">Admin Panel</h2>
        <form class="form-horizontal" method="post" action="con_uploadhouse.php">
            <fieldset>

                <!-- Form Name -->
                <legend class="text-center">Upload your house info</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="housename">House Name</label>
                    <div class="col-md-5">
                        <input id="name" name="name" type="text" placeholder="House at sea" class="form-control input-md" required="">

                    </div>
                </div>

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
                    <label class="col-md-4 control-label" for="address">Adress</label>
                    <div class="col-md-5">
                        <input id="address" name="address" type="text" placeholder="Panagouli 7" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="price">Price</label>
                    <div class="col-md-5">
                        <input id="price" name="price" type="text" placeholder="€" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="meter">Square Meter</label>
                    <div class="col-md-5">
                        <input id="meter" name="meter" type="text" placeholder="42m^2" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="telephone">Telephone</label>
                    <div class="col-md-5">
                        <input id="telephone" name="telephone" type="text" placeholder="6973291041" class="form-control input-md" required="">

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

                <!-- Multiple Radios (inline) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="stars">Stars</label>
                    <div class="col-md-4">
                        <label class="radio-inline" for="stars-0">
                            <input type="radio" name="stars" id="stars-0" value="1" checked="checked">
                            1
                        </label>
                        <label class="radio-inline" for="stars-1">
                            <input type="radio" name="stars" id="stars-1" value="2">
                            2
                        </label>
                        <label class="radio-inline" for="stars-2">
                            <input type="radio" name="stars" id="stars-2" value="3">
                            3
                        </label>
                        <label class="radio-inline" for="stars-3">
                            <input type="radio" name="stars" id="stars-3" value="4">
                            4
                        </label>
                        <label class="radio-inline" for="stars-4">
                            <input type="radio" name="stars" id="stars-4" value="5">
                            5
                        </label>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description">Notes</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="description" name="description">A beautiful house by the sea..</textarea>
                    </div>
                </div>

                <!-- File Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="image">Upload Image</label>
                    <div class="col-md-4">
                        <input id="image" name="image" class="input-file" type="file">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="longitude">Longitude</label>
                    <div class="col-md-5">
                        <input id="longitude" name="longitude" type="text" placeholder="35.6938203" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="latitude">Latitude</label>
                    <div class="col-md-5">
                        <input id="latitude" name="latitude" type="text" placeholder="40.53646546" class="form-control input-md" required="">

                    </div>
                </div>


                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-8">
                        <button id="submit" name="submit" class="btn btn-success">Submit</button>
                        <button id="clear" name="clear" class="btn btn-default">Clear</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>




<?php
include "view_footer.php";
?>