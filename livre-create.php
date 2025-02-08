<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('categories');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de Livre</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="conteneur">
        <form action="livre-store.php" method="post">
            <h2>Nouveau Livre</h2>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre">
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" id="auteur">
            <label for="categorie_id">Catégorie</label>
            <select name="categorie_id" id="categorie_id">
                <option value="">Sélectionne une Catégorie</option>
                <?php 
            foreach($select as $row){

            ?>
                <option value="<?=$row['id']?>"><?= $row['categorie'];?></option>
                <?php
                }
            ?>
            </select>
            <label for="anneePublication">Année de Publication</label>
            <input type="text" name="anneePublication" id="aneePublication">
            <input type="submit" class="bouton" value="save">
        </form>
    </div>
</body>
</html>