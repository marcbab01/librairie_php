<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('livres', $_POST);

header("location:livre-show.php?id=$insert");
?>