<?php

require_once "connect.php";

// Maak een delete query voor het verwijderen van een record
$sql = "DELETE FROM Persoon
        WHERE Id = :Id";

// Bereid de query voor om de placeholder te vervangen voor een id-waarde
$statement = $pdo->prepare($sql);

// Vervang de placeholder voor een id-waarde
$statement->bindValue(':Id', $_GET['deleteid'], PDO::PARAM_INT);

// Voer de query uit op de mysql-database
$result = $statement->execute();

if ($result) {
    echo "Het record is verwijderd";
    header('Refresh:3; url=index.php');
} else {
    echo "Het record is niet verwijderd";
    header('Refresh:3; url=index.php');
}
