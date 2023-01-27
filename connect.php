<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Opdracht01-p3";
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    // making the select query
    $sql = 'select * from Persoon';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}