<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$select = $crud->select('membres');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="conteneur">
        <h1>Membres</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Courriel</th>
                <th>Téléphone</th>
            </tr>
            <?php
            foreach($select as $row){
            ?>
                <tr>
                    <td><a href="membre-show.php?id=<?= $row['id']?>"><?= $row['lName']?></a></td>
                    <td><?= $row['fName']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['phone']?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>