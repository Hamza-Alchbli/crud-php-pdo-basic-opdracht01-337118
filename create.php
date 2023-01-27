<?php

require_once "connect.php";



if (isset($_POST['submit'])) { //check if form was submitted
    $naam = $_POST['naam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `Persoon` (naam, tussenvoegsel, achternaam)
        VALUES ('$naam', '$tussenvoegsel', '$achternaam')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        header('Location: index.php');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
?>





<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="naam">
        Name:
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

    <input type="submit" value="submit">
</form>