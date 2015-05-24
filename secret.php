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

    <div class="well-lg">
        <h2>Admin Panel</h2>
        <form id="houseform" name="houseform"  enctype="multipart/form-data" action="uploadvillahandler.php" method="POST">
            <table style="width:100%;">

                <tr>
                    <td width="25%">&nbsp</td>
                    <td style = "font-size: 1.2em;"><em>Τα πεδία με * είναι υποχρεωτικά!</em></td>

                </tr>

                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr>
                    <td class="right" style = "padding: 0 0 25px 60px; font-size: 1.2em;">* Όνομα Βίλας</td>
                    <td><input style="width: 215px; height: 17px; " class="inputs" type="text" id="villaname" name="villaname" size="25" maxlength="25"></td>
                </tr>

                <tr>
                    <td class="right"  style = "padding: 0 0 25px 75px; font-size: 1.2em;">* Νομός</td>
                    <td>
                        <select style="width: 235px; font-size: 1em; height: 30px; " class="inputs" id="area" name="area">
                            <option value="-1" style="color:red;" selected="selected">--Επιλέξτε Νομό--</option>
                            <optgroup label="Θράκη">
                                <option value="Θράκη-Έβρος-Αλεξανδρούπολη">Ν.Έβρου - Αλεξανδρούπολη</option>
                                <option value="Θράκη-Ροδόπη-Κομοτηνή">Ν.Ροδόπης - Κομοτηνή</option>
                                <option value="Θράκη-Ξάνθη">Ν.Ξάνθης - Ξάνθη</option>
                            </optgroup>
                            <optgroup label="Μακεδόνια">
                                <option value="Μακεδονία-Καβάλα">Ν.Καβάλας - Καβάλα</option>
                                <option value="Μακεδονία-Δράμα">Ν.Δράμας - Δράμα</option>
                                <option value="Μακεδονία-Σέρρες">Ν.Σερρών - Σέρρες</option>
                                <option value="Μακεδονία-Κιλκίς">Ν.Κιλκίς - Κιλκίς</option>
                                <option value="Μακεδονία-Θεσσαλονίκη">Ν.Θεσσαλονίκης - Θεσσαλονίκη</option>
                                <option value="Μακεδονία-Χαλκιδική-Πολύγυρος">Ν.Χαλκιδικής - Πολύγυρος</option>
                                <option value="Μακεδονία-Πέλλα-Έδεσσα">Ν.Πέλλης - Έδεσσα</option>
                                <option value="Μακεδονία-Ημαθία-Βέροια">Ν.Ημαθίας - Βέροια</option>
                                <option value="Μακεδονία-Φλώρινα">Ν.Φλώρινας - Φλώρινα</option>
                                <option value="Μακεδονία-Κοζάνη">Ν.Κοζάνης - Κοζάνη</option>
                                <option value="Μακεδονία-Καστοριά">Ν.Καστοριάς - Καστοριά</option>
                                <option value="Μακεδονία-Πιερία-Κατερίνη">Ν.Πιερίας - Κατερίνη</option>
                                <option value="Μακεδονία-Γρεβενά">Ν.Γρεβενών - Γρεβενά</option>
                            </optgroup>
                            <optgroup label="Θεσσαλία">
                                <option value="Θεσσαλία-Λάρισα">Ν.Λαρίσης - Λάρισα</option>
                                <option value="Θεσσαλία-Μαγνησία-Βόλος">Ν.Μαγνησίας - Βόλος</option>
                                <option value="Θεσσαλία-Καρδίτσα">Ν.Καρδίτσας - Καρδίτσα</option>
                                <option value="Θεσσαλία-Τρίκαλα">Ν.Τρικάλων - Τρίκαλα</option>
                            </optgroup>
                            <optgroup label="Ήπειρος">
                                <option value="Ήπειρος-Ιωάννινα">Ν.Ιωαννίνων - Ιωάννινα</option>
                                <option value="Ήπειρος-Θεσπρωτία-Ηγουμενίτσα">Ν.Θεσπρωτίας - Ηγουμενίτσα</option>
                                <option value="Ήπειρος-Πρέβεζα">Ν.Πρεβέζης - Πρέβεζα</option>
                                <option value="Ήπειρος-Άρτα">Ν.Άρτης - Άρτα</option>
                            </optgroup>
                            <optgroup label="Στερεά Ελλάδα">
                                <option value="Στερεά Ελλάδα-Αττική-Αθήνα">Ν.Αττικής - Αθήνα</option>
                                <option value="Στερεά Ελλάδα-Βοιωτία-Λιβαδιά">Ν.Βοιωτίας - Λιβαδιά</option>
                                <option value="Στερεά Ελλάδα-Φθιώτιδα-Λαμία">Ν.Φθιώτιδα - Λαμία</option>
                                <option value="Στερεά Ελλάδα-Φωκίδα-Άμφισσα">Ν.Φωκίδας - Άμφισσα</option>
                                <option value="Στερεά Ελλάδα-Αιτωλοακαρνανία-Μεσολόγγι">Ν.Αιτωλοακαρνανίας - Μεσολόγγι</option>
                                <option value="Στερεά Ελλάδα-Ευρυτανία-Καρπενήσι">Ν.Ευρυτανίας - Καρπενήσι</option>
                                <option value="Στερεά Ελλάδα-Εύβοια-Χαλκίδα">Ν.Ευβοίας - Χαλκίδα</option>
                            </optgroup>
                            <optgroup label="Πελοπόννησος">
                                <option value="Πελοπόννησος-Κόρινθος">Ν.Κορινθίας - Κόρινθος</option>
                                <option value="Πελοπόννησος-Αχαΐα-Πάτρα">Ν.Αχαΐας - Πάτρα</option>
                                <option value="Πελοπόννησος-Ηλεία-Πύργος">Ν.Ηλείας - Πύργος</option>
                                <option value="Πελοπόννησος-Αρκαδία-Τρίπολη">Ν.Αρκαδίας - Τρίπολη</option>
                                <option value="Πελοπόννησος-Αργολίδα-Ναύπλιο">Ν.Αργολίδος - Ναύπλιο</option>
                                <option value="Πελοπόννησος-Μεσσηνία-Καλαμάτα">Ν.Μεσσηνίας - Καλαμάτα</option>
                                <option value="Πελοπόννησος-Λακωνία-Σπάρτη">Ν.Λακωνίας - Σπάρτη</option>
                            </optgroup>

                            <optgroup label="Νησιά Αιγαίου">

                                <option value="Αιγαίο-Λέσβος">Λέσβος</option>
                                <option value="Αιγαίο-Χίος">Χίος</option>
                                <option value="Αιγαίο-Σάμος">Σάμος</option>
                                <option value="Αιγαίο-Λήμνος">Λήμνος</option>
                                <option value="Αιγαίο-Θάσος">Θάσος</option>
                                <option value="Αιγαίο-Ικαρία">Ικαρία</option>
                                <option value="Αιγαίο-Σκιάθος">Σκιάθος</option>
                                <option value="Αιγαίο-Σκόπελος">Σκόπελο</option>
                                <option value="Αιγαίο-Σπέτσες">Σπέτσες</option>
                                <option value="Αιγαίο-Ύδρα">Ύδρα</option>
                                <option value="Αιγαίο-Σύρος">Σύρος</option>
                                <option value="Αιγαίο-Κυκλάδες-Νάξος">Νάξος</option>
                                <option value="Αιγαίο-Κυκλάδες-Σαντορίνη">Σαντορίνη</option>
                                <option value="Αιγαίο-Κυκλάδες-Πάρος">Πάρος</option>
                                <option value="Αιγαίο-Κυκλάδες-Μύκονος">Μύκονος</option>
                                <option value="Αιγαίο-Κυκλάδες-Φολέγανδρος">Φολέγανδρος</option>
                                <option value="Αιγαίο-Δωδεκάνησα-Ρόδος">Ρόδος</option>
                                <option value="Αιγαίο-Δωδεκάνησα-Κως">Κώς</option>
                                <option value="Αιγαίο-Δωδεκάνησα-Κάλυμνος">Κάλυμνος</option>
                                <option value="Αιγαίο-Δωδεκάνησα-Κάρπαθος">Κάρπαθος</option>
                                <option value="Αιγαίο-Δωδεκάνησα-Πάτμος">Πάτμος</option>
                                <option value="Αιγαίο-Δωδεκάνησα-Αστυπάλαια">Αστυπάλαια</option>
                            </optgroup>

                            <optgroup label="Νησιά Ιονίου">
                                <option value="Ιόνιο-Κέρκυρα">Κέρκυρα</option>
                                <option value="Ιόνιο-Ζάκυνθος">Ζάκυνθος</option>
                                <option value="Ιόνιο-Κεφαλονιά">Κεφαλονία</option>
                                <option value="Ιόνιο-Λευκάδα">Λευκάδα</option>
                                <option value="Ιόνιο-Κύθυρα">Κύθυρα</option>
                                <option value="Ιόνιο-Ιθάκη">Ιθάκη</option>
                                <option value="Ιόνιο-Παξούς">Παξούς</option>
                            </optgroup>

                            <optgroup label="Κρήτη">
                                <option value="Αιγαίο-Κρήτη-Χανιά">Ν.Χανιών - Χανιά</option>
                                <option value="Αιγαίο-Κρήτη-Ρέθυμνο">Ν.Ρεθύμνης - Ρέθυμνο</option>
                                <option value="Αιγαίο-Κρήτη-Ηράκλειο">Ν.Ηρακλείου - Ηράκλειο</option>
                                <option value="Αιγαίο-Κρήτη-Λασίθι-Άγιος Νικόλαος">Ν.Λασιθίου - Άγιος Νικόλαος</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 0 0 25px 75px; font-size: 1.2em;">* Διεύθυνση</td>
                    <td><input style="width: 215px; height: 17px; " class="inputs" type="text" id="address" name="address" size="25" maxlength="25"> <input style="width: 30px; height: 17px;" class="inputs" type="text" id="addressno" name="addressno" size="3" maxlength="3"></td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 0 0 25px 95px; font-size: 1.2em;">* Τ.Κ</td>
                    <td><input class="inputs" style="width: 80px; height: 17px;  " type="text" id="postalcode" name="postalcode" size="25" maxlength="25"></td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 0 0 25px 95px; font-size: 1.2em;">* Τιμή</td>
                    <td><input class="inputs" style="width: 65px; height: 17px; " type="text" id="price" name="price" size="7" maxlength="7">&nbsp;&euro;</td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 0 0 25px 20px; font-size: 1.2em;">* Τετραγωνικά μέτρα</td>
                    <td><input class="inputs" style="width: 65px; height: 17px; " type="text" id="squaremeter" name="squaremeter" size="4" maxlength="4">&nbsp;τετρ. μέτρα</td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 0 0 25px 75px; font-size: 1.2em;">* Τηλέφωνο</td>
                    <td><input class="inputs" style="width: 95px; height: 17px; " type="text" id="telephone" name="telephone" size="10" maxlength="10"></td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 0 0 25px 40px; font-size: 1.2em;">Κινητό Τηλέφωνο</td>
                    <td><input class="inputs" style="width: 95px; height: 17px; " type="text" id="mobilephone" name="mobilephone" size="10" maxlength="10"></td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 0 0 25px 55px; font-size: 1.2em;">* Χωρητικότητα</td>
                    <td><input class="inputs" style="width: 35px; height: 17px; " type="text" id="capacity" name="capacity" size="3" maxlength="3">&nbsp;άτομα</td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 20px 0 25px 50px; font-size: 1.2em;">* Εγκαταστάσεις</td>
                    <td>
                        <label><input type="checkbox" id="garage" name="garage" value="1" >Γκαράζ</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="checkbox" id="wifi" name="wifi" value="1" >Wi-Fi</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="checkbox" id="pool" name="pool" value="1" >Πισίνα</label>
                        <br/><br/>
                        <label><input type="checkbox" id="jacuzzi" name="jacuzzi" value="1" >Τζακούζι</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="checkbox" id="spa" name="spa" value="1" >Spa</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="checkbox" id="gym" name="gym" value="1" >Γυμναστήριο</label>

                    </td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 20px 0 25px 75px; font-size: 1.2em;">* Αστέρων</td>
                    <td>
                        <div class="rating">
                            <input type="radio" name="rating" value="0" checked /><span id="hide"></span>
                            <input type="radio" name="rating" value="1" /><span></span>
                            <input type="radio" name="rating" value="2" /><span></span>
                            <input type="radio" name="rating" value="3" /><span></span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="right" style = "padding: 10px 0 90px 90px; font-size: 1.2em;">Επιπλέον Περιγραφή</td>
                    <td>
                        <textarea class="inputs" style="margin-bottom: 0;" id="comments" name="comments" rows="5" onkeyup="check_limit('comments', 150, 'chars_left_counter');"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="right" style = "padding: 0 0 25px 70px; font-size: 1.2em;">* Κύρια Φωτογραφία</td>
                    <td><input class="custom-file-input" accept="image/jpeg" style="margin-bottom: 20px;" name="mainphoto" id="mainphoto" type="file" value="Browse.."></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn"  type="button" value="Πρόσθεσε στον χάρτη"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn"  type="submit" value="Καταχώρηση"></td>
                </tr>

            </table>
        </form>
    </div>




<?php
include "footer.php";
?>