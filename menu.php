<?php

session_start();

include("static/html/login-protected.php");

?>

<!Doctype HTML>
<html lang="de">
<?php include ("static/html/head.html")?>

<body>
<?php include ("static/html/header.php")?>
<main>
    <p>Hallo <?php echo $_SESSION["fname"];?>,</p>
    <p>Was willst du tun?</p>
    <ul>
        <li><a href="entry.php">Situation merken</a></li>
        <li><a href="list.php">Liste der Situationen anzeigen</a></li>
    </ul>
</main>
</body>
</html>
