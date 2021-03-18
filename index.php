<!DOCTYPE HTML>

<html lang="de">
<head>
    <title>Cluster Kontakt Tagebuch</title>
    <link href="static/index.css" rel="stylesheet">
    <meta charset="UTF-8"/>
</head>
<body>
<header>
    <h1 class="page-title">Pandemie Cluster-Kontakt-Tagebuch</h1>
</header>
<main>
    <p>Helfen Sie Ihrem Gedächtnis auf die Sprünge und notieren Sie Situationen, in denen Sie sich nicht wohlgefühlt
        haben, etwa mit zu vielen Leuten in einem geschlossenen Raum. So können Sie später die <a href="#">Fallverfolgung</a>
        unterstützen.</p>

    <form action="action.php" method="post">
        <div class="form-group">
            <label for="firstNameInput">Vorname:</label><br/>
            <input id="firstNameInput" type="text" name="firstName"/><br/>
        </div>
        <div class="form-group">
            <label for="lastNameInput">Nachname:</label><br/>
            <input id="lastNameInput" type="text" name="lastName"/><br/>
        </div>
        <div class="form-group">
            <label for="situationInput">Situation/Ort:</label><br/>
            <textarea id="situationInput" name="situation"></textarea><br/>
        </div>
        <div class="form-group">
            <label for="dateInput">Nachname:</label><br/>
            <input id="dateInput" type="date" name="date"/><br/>
        </div>
        <button type="submit">Speichern</button>
    </form>
</main>
</body>
</html>