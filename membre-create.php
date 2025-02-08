<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Membre</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="conteneur">
        <form action="membre-store.php" method="post">
            <h2>Nouveau Membre</h2>
            <label for="lname">Nom</label>
            <input type="text" name="lname" id="lname">
            <label for="fname">Prénom</label>
            <input type="text" name="fname" id="fname">
            <label for="email">Courriel</label>
            <input type="email" name="email" id="email">
            <label for="phone">Téléphone</label>
            <input type="tel" name="phone" id="phone">
            <input type="submit" class="bouton" value="save">
        </form>
    </div>
</body>
</html>