<?php

require_once "connect.php";



if (isset($_POST['submit'])) {
    //check if form was submitted
    $naam = $_POST['naam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $haarkleur = $_POST['haarkleur'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $straatnaam = $_POST['straatnaam'];
    $huisnummer = $_POST['huisnummer'];
    $woonplaats = $_POST['woonplaats'];
    $postcode = $_POST['postcode'];
    $landnaam = $_POST['landnaam'];

    $sql = "INSERT INTO `Persoon` 
                            (Firstname, 
                            Infix, 
                            Lastname, 
                            Haircolor, 
                            Phone, 
                            Streetname, 
                            Huisnumber, 
                            City, 
                            Postalcode, 
                            Land)
                VALUES      (:Firstname, 
                            :Infix, 
                            :Lastname, 
                            :Haircolor, 
                            :Phone, 
                            :Streetname, 
                            :Huisnumber, 
                            :City, 
                            :Postalcode, 
                            :Land)";
    // We bereiden de sql-query voor met de method prepare
    $statement = $pdo->prepare($sql);

    $statement->bindValue(':Firstname', $naam, PDO::PARAM_STR);
    $statement->bindValue(':Infix', $tussenvoegsel, PDO::PARAM_STR);
    $statement->bindValue(':Lastname', $achternaam, PDO::PARAM_STR);
    $statement->bindValue(':Haircolor',  $haarkleur, PDO::PARAM_STR);
    $statement->bindValue(':Phone', $telefoonnummer, PDO::PARAM_STR);
    $statement->bindValue(':Streetname', $straatnaam, PDO::PARAM_STR);
    $statement->bindValue(':Huisnumber', $huisnummer, PDO::PARAM_STR);
    $statement->bindValue(':City', $woonplaats, PDO::PARAM_STR);
    $statement->bindValue(':Postalcode', $postcode, PDO::PARAM_STR);
    $statement->bindValue(':Land', $landnaam, PDO::PARAM_STR);

    // We vuren de sql-query af op de database
    $result = $statement->execute();

    if ($result) {
        echo "Er is een nieuw record gemaakt in de database.";
        header('Refresh:2; url=index.php');
    } else {
        echo "Er is geen nieuw record gemaakt.";
        header('Refresh:2; url=index.php');
    }
}
?>

<head>
    <link rel="stylesheet" href="./media/main.css">
</head>
<main>
    <form method="POST">
        <label for="naam">
            Voornaam:
        </label>
        <input type="text" name="naam" id="naam">
        <label for="tussenvoegsel">
            Tussenvoegsel:
        </label>
        <input type="text" name="tussenvoegsel" id="tussenvoegsel">
        <label for="achternaam">
            Achternaam:
        </label>
        <input type="text" name="achternaam" id="achternaam">

        <label for="haarkleur">
            Haarkleur:
        </label>
        <input type="text" name="haarkleur" id="haarkleur">

        <label for="telefoonnummer">
            Telefoonnummer:
        </label>
        <input type="text" name="telefoonnummer" id="telefoonnummer">

        <label for="straatnaam">
            Straatnaam:
        </label>
        <input type="text" name="straatnaam" id="straatnaam">

        <label for="huisnummer">
            Huisnummer:
        </label>
        <input type="text" name="huisnummer" id="huisnummer">

        <label for="woonplaats">
            Woonplaats:
        </label>
        <input type="text" name="woonplaats" id="woonplaats">

        <label for="postcode">
            Postcode:
        </label>
        <input type="text" name="postcode" id="postcode">

        <label for="landnaam">
            Land:
        </label>
        <input type="text" name="landnaam" id="landnaam">

        <input type="submit" value="submit" name="submit">
    </form>
</main>