<?php



function searchForQueryString($queryString)
{
    $host="localhost"; // Host name
    $username="admin"; // Mysql username
    $password="admin"; // Mysql password no password for windows root password for mac
    $dbname="rentmyhouse"; // Database name




//Connect to server and select database.
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    try {
        $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
    }
    catch(PDOException $ex){
        die("Failed to connect to the database: " . $ex->getMessage());
    }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = "SELECT * FROM 'houses' WHERE ( 'houseid' like :queryString or 'name' like :queryString) ";

    $sth = $db->prepare($query);
    $queryString = '%' . $queryString . '%';
    $sth->bindParam('queryString', $queryString, PDO::PARAM_STR);

    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_OBJ);

    if(empty($result) or $result == false)
        return array();
    else
        return $result;
}



$search = $_GET['simpleSearch'];

searchForQueryString($search);
echo $result;

?>




<?php
/*try {
    $query = " SELECT *
                FROM houses WHERE
                houseid LIKE $search OR
                name LIKE $search OR
                stateLIKE $search OR
                address LIKE $search OR
                price LIKE $search OR
                meter LIKE $search OR
                telephone LIKE $search OR
                wifi LIKE $search OR
                pool LIKE $search OR
                maid LIKE $search OR
                description LIKE $search OR
                stars LIKE $search OR
                longitude LIKE $search OR
                latitude LIKE $search OR
                username LIKE $search
                ";

    $statement = $db->prepare($query);
    $statement->execute(array(':houses'=>$search));
    while ($row = $statement->fetch()) {
        echo '<p> - '.$row.'</p>';
    }
    $statement->closeCursor();
    $pdoObject = null;
}catch (PDOException $e) {
    header("Location:  index.php?msg=database-error");
}*/
?>


