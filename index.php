<?php

require_once "connect.php";

try {
    // making the select query
    $sql = "SELECT 
                    `Id`, 
                    `Firstname`, 
                    `Infix`, 
                    `Lastname`, 
                    `Haircolor`, 
                    `Phone`, 
                    `Streetname`, 
                    `Huisnumber`, 
                    `City`, 
                    `Postalcode`, 
                    `Land` 
     FROM `Persoon`";

    // Maak de sql-query gereed om te worden uitgevoerd op de database
    $statement = $pdo->prepare($sql);

    // Voer de sql-query uit op de database
    $statement->execute();
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>

<head>
    <link rel="stylesheet" href="./media/main.css">
</head>
<main>
    <table>
        <tr>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Haarkleur</th>
            <th>Telefoonnummer</th>
            <th>Straatnaam</th>
            <th>Huisnummer</th>
            <th>Woonplaats</th>
            <th>Postcode</th>
            <th>Landnaam</th>
            <th>Opties</th>
        </tr>
        <?php while ($row = $q->fetch()) : ?>
            <tr>
                <td><?= htmlspecialchars($row["Firstname"]) ?></td>
                <td><?= htmlspecialchars($row["Infix"]) ?></td>
                <td><?= htmlspecialchars($row["Lastname"]) ?></td>
                <td><?= htmlspecialchars($row["Haircolor"]) ?></td>
                <td><?= htmlspecialchars($row["Phone"]) ?></td>
                <td><?= htmlspecialchars($row["Streetname"]) ?></td>
                <td><?= htmlspecialchars($row["Huisnumber"]) ?></td>
                <td><?= htmlspecialchars($row["City"]) ?></td>
                <td><?= htmlspecialchars($row["Postalcode"]) ?></td>
                <td><?= htmlspecialchars($row["Land"]) ?></td>
                <td>
                    <button class="btn btn-update"><a href="delete.php?updateid=<?= $row['Id'] ?>">Update</a></button>
                    <button class="btn btn-delete"><a href="delete.php?deleteid=<?= $row['Id'] ?>">Delete</a></button>
                </td>
            </tr>
        <?php endwhile ?>
    </table>
    <button class="btn"><a href="create.php">Create New record</a></button>
</main>