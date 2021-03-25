<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["events"] = array();
    header("Location: ./menu.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<?php include ("static/html/head.html")?>

<body>
<?php include("static/html/header.php")?>

<main>
    <h2>Login</h2>
    <p>Helfen Sie Ihrem Gedächtnis auf die Sprünge und notieren Sie Situationen, in denen Sie sich nicht wohlgefühlt
        haben, etwa mit zu vielen Leuten in einem geschlossenen Raum. So können Sie später die <a href="#">Fallverfolgung</a>
        unterstützen.</p>
    <form action="login.php" method="post">
        <label for="fname">Vorname:</label><br>
        <input type="text" id ="fname" name="fname"><br>
        <label for="lname">Nachname:</label><br>
        <input type="text" id ="lname" name="lname"><br>
        <input type="submit" value="Login">
    </form>
</main>
</body>
</html>