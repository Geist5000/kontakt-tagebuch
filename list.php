<?php

session_start();

include("static/html/login-protected.php");

?>

<!Doctype HTML>
<html lang="de">
<?php include("static/html/head.html") ?>

<body>
<?php include("static/html/header.php") ?>
<main>

    <h2>Alle Ihre Einträge:</h2>
    <ol>
        <?php
        if (!empty($_SESSION["events"])) {
            foreach ($_SESSION["events"] as $event) {
                ?>
        <li>
            <p><span class="date"><?php echo $event["date"]; ?></span>: <?php echo $event["place"]; ?></p>
        </li>

                <?php
            }

        }else{
            ?>
            <li>
                <p>Keine Einträge!</p>
            </li>

            <?php
        }
        ?>
    </ol>


</main>
</body>
</html>