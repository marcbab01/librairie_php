<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$update = $crud->update('livres', $_POST);
?>