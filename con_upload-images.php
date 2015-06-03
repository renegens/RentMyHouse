<?php
require "config.php";
        //Check if decrptions exists and then upload files.
        if(empty($_POST['imageDescr1']))
        { die("Please Enter an image description."); }
        if(empty($_POST['imageDescr2']))
        { die("Please Enter an image description.");}
         if(empty($_POST['imageDescr3']))
        { die("Please Enter an image description.");}

if(empty($_SESSION['username'])) exit();
$userid=-1;
$query = "
                        SELECT
                            id
                        FROM users
                        WHERE
                            username = :user
                    ";
$query_params = array( ':user' => $_SESSION['username'] );
try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
$row = $stmt->fetch();
if($row){ $userid=$row['id']; }



//get house id for this user

$query = "
                        SELECT
                            houseID
                        FROM houses
                        WHERE
                            users_id = :user_id
                    ";
$query_params = array( ':user_id' => $userid );
try {
    $stmt = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
$row = $stmt->fetch();
if($row){ $houseID=$row['houseID']; }



        //1 File check make a function of this if time
        if (isset($_FILES['fileToUpload1'])) {
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        }

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload1"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload1"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        //2 File check make a function of this if time
        if (isset($_FILES['fileToUpload2'])) {
            $target_dir = "upload/";
            $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file2, PATHINFO_EXTENSION);
        }

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file2)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload2"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
                echo "The file " . basename($_FILES["fileToUpload2"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }


        //3 File check make a function of this if time
        if (isset($_FILES['fileToUpload3'])) {
            $target_dir = "upload/";
            $target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file3, PATHINFO_EXTENSION);
        }

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file3)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload3"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
                echo "The file " . basename($_FILES["fileToUpload3"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }




        $query = "
                    INSERT INTO images (
                          imageName,
                          imageDescr,
                          houses_houseID


                          ) VALUES (
                            :imageName,
                            :imageDescr,
                            :houses_houseID
                          )
                ";

        $query_params =  array (
            'imageName' => $target_file,
            'imageDescr' => $_POST['imageDescr1'],
            ':houses_houseID' => $houseID

        );

        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);

        }
        catch(PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }

        $query = "
                    INSERT INTO images (
                          imageName,
                          imageDescr,
                          houses_houseID


                          ) VALUES (
                            :imageName,
                            :imageDescr,
                            :houses_houseID
                          )
                ";

        $query_params =  array (
            'imageName' => $target_file2,
            'imageDescr' => $_POST['imageDescr2'],
            ':houses_houseID' => $houseID

        );

        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);

        }
        catch(PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }



        $query = "
                    INSERT INTO images (
                          imageName,
                          imageDescr,
                          houses_houseID


                          ) VALUES (
                            :imageName,
                            :imageDescr,
                            :houses_houseID
                          )
                ";

        $query_params =  array (
            'imageName' => $target_file3,
            'imageDescr' => $_POST['imageDescr3'],
            ':houses_houseID' => $houseID

        );

        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);

        }
        catch(PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }

    header("Location: index.php?msg=Data Entry Success");
    die("Redirecting to index.php");




?>

