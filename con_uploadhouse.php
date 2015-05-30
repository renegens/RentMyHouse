<?php
require("config.php");

if(!empty($_POST))
{
    // Ensure that the user fills out fields
    if(empty($_POST['name']))
    { die("Please enter a house name."); }
    if(empty($_POST['state']))
    { die("Please enter a state."); }
    if(empty($_POST['address']))
    { die("Please enter an address."); }
    if(empty($_POST['meter']))
    { die("Please enter a house size."); }
    if(empty($_POST['price']))
    { die("Please enter a price."); }
    if(empty($_POST['stars']))
    { die("Please enter a rating."); }
    if(empty($_POST['description']))
    { die("Please enter a description."); }
    if(empty($_POST['longitude']))
    { die("Please enter a longitude."); }
    if(empty($_POST['latitude']))
    { die("Please enter a latitude."); }
    if(empty($_POST['wifi']))
    {$wifi = 0;}
    else $wifi = 1;
    if(empty($_POST['pool']))
    {$pool = 0;}
    else $pool = 1;
    if(empty($_POST['maid']))
    {$maid = 0;}
    else $maid = 1;

    //1 File check make a function of this if time
    if(isset($_FILES['fileToUpload'])){
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    }

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
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
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    //2 File check make a function of this if time
    if(isset($_FILES['fileToUpload2'])){
        $target_dir = "upload/";
        $target2_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target2_file,PATHINFO_EXTENSION);
    }

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target2_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload2"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target2_file)) {
            echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    //3 File check make a function of this if time
    if(isset($_FILES['fileToUpload3'])){
        $target_dir = "upload/";
        $target3_file = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target3_file,PATHINFO_EXTENSION);
    }

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target3_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload3"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target3_file)) {
            echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    //4 File check make a function of this if time
    if(isset($_FILES['fileToUpload4'])){
        $target_dir = "upload/";
        $target3_file = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target4_file,PATHINFO_EXTENSION);
    }

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target4_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload4"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target4_file)) {
            echo "The file ". basename( $_FILES["fileToUpload4"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }




            //Check for username to be same with session
            //get session username

            if (empty($_SESSION['username'])) exit();
            $userid = -1;
            // Check if the house is already taken
            $query = "
            SELECT
                id
            FROM users
            WHERE
                username = :user
        ";
            $query_params = array(':user' => $_SESSION['username']);
            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute($query_params);
            } catch (PDOException $ex) {
                die("Failed to run query: " . $ex->getMessage());
            }
            $row = $stmt->fetch();
            if ($row) {
                $userid = $row['id'];
            }


            // Check if the house is already taken
            $query = "
            SELECT
                1
            FROM houses
            WHERE
                name = :name
        ";
            $query_params = array(':name' => $_POST['name']);
            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute($query_params);
            } catch (PDOException $ex) {
                die("Failed to run query: " . $ex->getMessage());
            }
            $row = $stmt->fetch();
            if ($row) {
                die("This housename is already in use");
            }


            // Add row to database
            // to do add imageName to both
            $query = "
            INSERT INTO houses (
                  name,
                  state,
                  address,
                  meter,
                  price,
                  telephone,
                  wifi,
                  pool,
                  maid,
                  description,
                  stars,
                  longitude,
                  latitude,
                  imageName,
                  imageDescr,
                  imageName2,
                  imageDescr2,
                  imageName3,
                  imageDescr3,
                  imageName4,
                  imageDescr4,
                  users_id

                  ) VALUES (
                    :name,
                    :state,
                    :address,
                    :meter,
                    :price,
                    :telephone,
                    :wifi,
                    :pool,
                    :maid,
                    :description,
                    :stars,
                    :longitude,
                    :latitude,
                    :imageName,
                    :imageDescr,
                    :imageName2,
                    :imageDescr2,
                    :imageName3,
                    :imageDescr3,
                    :imageName4,
                    :imageDescr4,
                    :username
                     )
        ";

            $query_params = array(
                ':name' => $_POST['name'],
                ':state' => $_POST['state'],
                ':address' => $_POST['address'],
                ':meter' => $_POST['meter'],
                ':price' => $_POST['price'],
                ':telephone' => $_POST['telephone'],
                ':wifi' => $wifi,
                ':pool' => $pool,
                ':maid' => $maid,
                ':description' => $_POST['description'],
                ':stars' => $_POST['stars'],
                ':longitude' => $_POST['longitude'],
                ':latitude' => $_POST['latitude'],
                ':imageName' => $target_file,

                ':username' => $userid
            );

            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute($query_params);

            } catch (PDOException $ex) {
                die("Failed to run query: " . $ex->getMessage());
            }


            header("Location: index.php?msg=Data Entry Success");
            die("Redirecting to index.php");

        } else {
            header('Location: view_uploadHouse.php?msg=wrong data');
            exit();

        }

?>