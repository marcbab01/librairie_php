<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$selectlivres = $crud->select('livres');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Livres</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Livres</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Catégorie</th>
            <th>Année de publication</th>
        </tr>
        <?php
        foreach($selectlivres as $row){
        ?>
            <tr>
                <td><a href="livre-show.php?id=<?= $row['id']?>"><?= $row['titre']?></a></td>
                <td><?= $row['auteur']?></td>
                <td><?= $row['categorie']?></td>
                <td><?= $row['anneePublication']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>