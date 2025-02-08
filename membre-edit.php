<?php
if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];
    require_once('classes/CRUD.php');
    $crud = new CRUD;
    $selectId = $crud->selectId('membres', $id, 'id', 'membre-index');
    extract($selectId);
}else{
    header('location:membre-index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membre Edit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="membre-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <h2>Modifier Membre</h2>
            <label>Nom
                <input type="text" name="lname" value="<?= $lName; ?>">
            </label>
            <label>Address
                <input type="text" name="fname" value="<?= $fName; ?>">
            </label>
            <label>Phone
                <input type="email" name="email" value="<?= $email; ?>">
            </label>
            <label>Zip Code
                <input type="text" name="phone" value="<?= $phone; ?>">
            </label>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>