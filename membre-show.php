<?php
if(!isset($_GET['id']) || $_GET['id']==null){
    header('location:membre-index.php');
    exit;
   }

$id=$_GET['id'];

require_once('classes/CRUD.php');
$crud = new CRUD;
$selectId = $crud->selectId('membres', $id, 'id', 'membre-index');
extract($selectId);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Membre</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="conteneur">
            <h1>Membre</h1>
            <p><strong>Nom: </strong><?= $lName; ?></p>
            <p><strong>Prénom: </strong><?= $fName; ?></p>
            <p><strong>Courriel: </strong><?= $email; ?></p>
            <p><strong>Téléphone: </strong><?= $phone; ?></p>
            <a href="membre-edit.php?id=<?= $id; ?>" class="bouton">Edit</a>
            <form action="membre-delete.php" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <button type="submit" class="bouton">Delete</button>
            </form>
        </div>
    </body>
</html>