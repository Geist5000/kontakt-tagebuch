<?php

session_start();
include("static/html/login-protected.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event = array();
    $event["place"] = $_POST["place"];
    $event["date"] = $_POST["date"];
    $_SESSION["events"][] = $event;
}

?>

<!Doctype HTML>
<html lang="de">
<?php include("static/html/head.html") ?>

<body>
<?php include("static/html/header.php") ?>
<main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ?>
        <p>Eintrag hinzugefügt!</p>

        <?php
    }
    ?>

    <h2>Eintrag hinzufügen:</h2>
    <form action="entry.php" method="post">
        <label for="place">Ort:</label><br>
        <input type="text" id="place" name="place" required><br>
        <label for="date">Datum:</label><br>
        <input type="date" id="date" name="date" required><br>
        <input type="submit" value="Absenden">
    </form>

</main>
</body>
</html>
