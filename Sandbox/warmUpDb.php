<?php
$dbConnector = null;

$dsn = "mysql:host=localhost;port=3310;dbname=snows";
$usr = "snows-connector";
$pwd = "DanielFerreira";

try {
    $dbConnector = new PDO($dsn, $usr, $pwd,);

    $query = "SELECT * FROM snows";
    $queryResults = null;

    $statement = $dbConnector->prepare($query);
    $statement->execute();
    $queryResults = $statement->fetchAll();

    $dbConnexion = null;
    return $queryResults;
} catch (PDOException $ex) {
    print($ex);
}
