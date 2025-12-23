<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">category</th>
      <th scope="col">brand</th>
      <th scope="col">controls</th>
    </tr>
  </thead>
  <tbody>
<?php

$select = "SELECT * FROM products12";
$result = $conn -> query($select);
while($pro = $result -> fetch_assoc()){
?>

    <tr>
      <th scope="row"><?= $pro['id']?></th>
      <td><?= $pro['name']?></td>
      <td><?= $pro['price']?></td>
      <td><img src="img/<?= htmlspecialchars($pro['image'])?>" style="width: 80px ; height: 80px ; bordor-radius:10px"></td>
      <td><?php $pro_cat=$pro['cat'];
      $select_cat = "SELECT * FROM category WHERE id='$pro_cat'";
      $result_cat = $conn -> query($select_cat);
      $cat = $result_cat -> fetch_assoc();
      echo $cat['name'];
      
      
      ?></td>
      <td><?php $pro_brand=$pro['brand'];
      $select_brand = "SELECT * FROM brand WHERE id='$pro_brand'";
      $result_brand = $conn -> query($select_brand);
      $brand = $result_brand -> fetch_assoc();
      echo $brand['name'];
      
      
      ?></td>
      <td>
        <a href="?more=edit&id=<?= $pro['id']?>" class="btn btn-success">Edit</a>
        <a href="des/delete.php?id=<?= $pro['id']?>" class="btn btn-danger">Delete</a>

      </td>
    </tr>
<?php
}
?>
  </tbody>
</table>
<a href="?more=add" class="btn btn-primary">Add Prodect</a>