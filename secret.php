<?php

    require("config.php");
    if(empty($_SESSION['user']))
    {
        header("Location: index.php");
        die("Redirecting to index.php");
    }
//http://getbootstrap.com/css/#forms
include "head.php";
?>
    <body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="col-lg-offset-3">
        <h2 class="text-center">Admin Panel</h2>
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend class="text-center">Upload your house info</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="housename">House Name</label>
                    <div class="col-md-5">
                        <input id="housename" name="housename" type="text" placeholder="House at sea" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Select Multiple -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nomos">Select State</label>
                    <div class="col-md-5">
                        <select id="nomos" name="nomos" class="form-control" multiple="multiple">
                            <option value="1">Thraki</option>
                            <option value="2">Makedonia</option>
                            <option value="3">Thessalia</option>
                            <option value="4">Hpeiros</option>
                            <option value="5">Sterea Ellada</option>
                            <option value="6">Peloponissos</option>
                            <option value="7">Nisia Aigaiou</option>
                            <option value="8">Nisia Iouniou</option>
                            <option value="9">Kriti</option>
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
                    <label class="col-md-4 control-label" for="size">Square Meter</label>
                    <div class="col-md-5">
                        <input id="size" name="size" type="text" placeholder="42m^2" class="form-control input-md" required="">

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
                                <input type="checkbox" name="comforts" id="comforts-0" value="1">
                                Wifi
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="comforts-1">
                                <input type="checkbox" name="comforts" id="comforts-1" value="2">
                                Pool
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="comforts-2">
                                <input type="checkbox" name="comforts" id="comforts-2" value="3">
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
                    <label class="col-md-4 control-label" for="comments">Notes</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="comments" name="comments">A beautiful house by the sea..</textarea>
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
                    <label class="col-md-4 control-label" for="longtitute">Longtitude</label>
                    <div class="col-md-5">
                        <input id="longtitute" name="longtitute" type="text" placeholder="35.6938203" class="form-control input-md" required="">

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
include "footer.php";
?>