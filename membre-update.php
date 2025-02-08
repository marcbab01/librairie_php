<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$update = $crud->update('membres', $_POST);
header("location:membre-show.php?id=$insert");
?>