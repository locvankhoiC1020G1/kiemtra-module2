<?php
include_once "../Model/ProductManager.php";
$productManager = new ProductManager();
$id = $_REQUEST['id'];
$productManager->delete($id);
header('location:../index.php');
?>