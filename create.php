<?php

require_once "connect.php";



if (isset($_POST['submit'])) { //check if form was submitted
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
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `Persoon` (Firstname, Infix, Lastname, Haircolor, Phone, Streetname, Huisnumber, City, Postalcode, Land)
        VALUES ('$naam', '$tussenvoegsel', '$achternaam','$haarkleur', '$telefoonnummer', '$straatnaam','$huisnummer', '$woonplaats', '$postcode', '$landnaam')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        header('Location: index.php');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
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