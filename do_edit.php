<?php
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
// exit();
$id = $_GET['id'];
include('../include/conn.php');
$name = $_POST['name'];
$price = $_POST['price'];
$count = $_POST['count'];
$description = $_POST['description'];
$category = $_POST['category'];
$brand = $_POST['brand'];

include('../include/conn.php');
if($_FILES['image']['error']===0){
$img_name = $_FILES['image']['name'];
$img_tmp = $_FILES['image']['tmp_name'];
$img_size = $_FILES['image']['size'];

$img_exp = explode("." , $img_name);
$img_ext = end($img_exp);

$allow_ext = ['jpg' , 'jpeg' , 'png' , 'bmp'];
;

if(!in_array($img_ext , $allow_ext)){
    echo 'no image';
}elseif($img_size > 30000000){
    echo 'image large';
}

$new_img = time() . rand(1,100000) . $img_name ;

move_uploaded_file($img_tmp , "../img/$new_img");
// echo '<pre>';
// print_r($new_img);
// exit();

$update = "UPDATE products12 SET name='$name',price='$price',cat='$category',
brand='$brand',count='$count',descr='$description',image='$new_img' WHERE id='$id'";
}else{
    $update = "UPDATE products12 SET name='$name',price='$price',cat='$category',
brand='$brand',count='$count',descr='$description' WHERE id='$id'";
}

$conn -> query($update);

header('location:../product.php');
?>