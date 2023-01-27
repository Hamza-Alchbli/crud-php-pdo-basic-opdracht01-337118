<?php

require_once "connect.php";

$id = $_GET["deleteid"];

try {
    // making the delete query
    $sql = "delete from Persoon where Id = $id";
    $pdo->exec($sql);
    // echo $pdo->exec($sql);
    echo "<br>record is succesvol verwijderd";
    header('Refresh:3; url=index.php');
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

