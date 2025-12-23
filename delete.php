<?php
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
// exit();
$id = $_GET['id'];
include('../include/conn.php');


$delete = "DELETE FROM products12 WHERE id='$id'";
$conn -> query($delete);

header('location:../product.php');
?>