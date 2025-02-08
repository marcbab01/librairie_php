<?php
$id=$_POST['id'];
require_once('classes/Crud.php');
$crud = new Crud;
$delete = $crud->delete('membres', $id, "membre-index");
?>