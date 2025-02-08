<?php
$id=$_POST['id'];
require_once('class/Crud.php');
$crud = new Crud;
$delete = $crud->delete('livres', $id, "livre-index");
?>