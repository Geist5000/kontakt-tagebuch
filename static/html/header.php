<header>
    <h1  class="page-title"><a href="./index.php">Pandemie Cluster-Kontakt-Tagebuch</a></h1>
    <?php if(
        session_status() == PHP_SESSION_NONE or
        session_status() == PHP_SESSION_DISABLED or
        (!isset($_SESSION["fname"])) or
        empty($_SESSION["fname"])){?>
    <?php
    }else{?>

        <a class="btn" href="logout.php">Logout</a>
    <?php
    }

    ?>

</header>