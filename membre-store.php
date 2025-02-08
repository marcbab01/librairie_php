<?php
require_once('classes/CRUD.php');
$crud = new CRUD;
$insert = $crud->insert('membres', $_POST);
header("location:membre-show.php?id=$insert");
?>