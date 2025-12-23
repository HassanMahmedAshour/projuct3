<form action="fun/do_add.php" method="POST" enctype="multipart/form-data">
<div class="from-control">
    <label for="floatingInput">Product Name :</label>
  <input type="text" class="form-control" id="floatingInput" placeholder="Product Name" name="name" >
</div>
<div class="from-control">
  <label for="floatingInput">price :</label>
  <input type="number" class="form-control" id="floatingPassword" placeholder="price" name="price">
</div>
<div class="from-control">
  <label for="floatingInput">count :</label>
  <input type="text" class="form-control" id="floatingPassword" placeholder="count" name="count">
</div>

<div class="from-control">
  <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
</div>

<div class="form-group">
    <label for="image" style="font-weight: bold;" >Image :</label>
  <input type="file" class="form-control-file" name="image" >
</div>
<br>
<div class="mb-3" >
  <label for="CategorySelect" class="form-label"> Category :</label>
  <select class="form-control" id="CategorySelect" name="category">
<?php
$select_cat = "SELECT * FROM category";
$result_cat = $conn -> query($select_cat);
while($cat = $result_cat -> fetch_assoc()){
?>

    <option value='<?= $cat['id']?>'><?= $cat['name']?></option>
<?php
}
?>
</select>
</div>

<div class="mb-3">
  <label for="brandSelect" class="form-label">Brand :</label>
  <select class="form-control" id="brandSelect" name="brand">
<?php
$select_brand = "SELECT * FROM brand";
$result_brand = $conn -> query($select_brand);
while($brand = $result_brand -> fetch_assoc()){
?>

    <option value='<?= $brand['id']?>'><?= $brand['name']?></option>
<?php
}
?>
  </select>
</div>
<br>

<div class="col-12">
    <button type="submit" class="btn btn btn-success btn-lg btn-block" >Updete</button>
  </div>
</form>
