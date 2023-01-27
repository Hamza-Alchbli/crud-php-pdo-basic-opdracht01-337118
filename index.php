<?php

require_once "connect.php";

try {
    // making the select query
    $sql = 'select * from Persoon';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>

