<?php
if(!isset($_GET['id']) || $_GET['id']==null){
    header('location:livre-index.php');
    exit;
   }

$id=$_GET['id'];

require_once('classes/CRUD.php');
$crud = new CRUD;
$selectId = $crud->selectId('livres', $id, 'id', 'livre-index');
extract($selectId);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Livres</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container">
            <h1>Livres</h1>
            <p><strong>Titre: </strong><?= $titre; ?></p>
            <p><strong>Auteur: </strong><?= $auteur; ?></p>
            <p><strong>Catégorie: </strong><?= $categorie_id; ?></p>
            <p><strong>Annére de Publication: </strong><?= $anneePublication; ?></p>
            <a href="livre-edit.php?id=<?= $id; ?>" class="bouton">Edit</a>
            <form action="livre-delete.php" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <button type="submit" class="bouton">Delete</button>
            </form>
        </div>
    </body>
</html>