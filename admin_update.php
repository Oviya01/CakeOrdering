<?php
session_start();
$conn = mysqli_connect('localhost','root','','cake_user');
$id = $_GET['edit'];

if(isset($_POST['update_product'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'images'.$product_image;
    $product_category = $_POST['category'];
    if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_category )){
        $message[] = 'please fill out all';
    }
    else{
        $update = "UPDATE products SET name='$product_name',price='$product_price',image='$product_image',category='$product_category' WHERE id=$id"; 
        $upload = mysqli_query($conn,$update);
        if($upload){
            move_uploaded_file($product_image_tmp_name,$product_image_folder);
        }else{
            $message[] = 'could not add the product';
        }
    }
	
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php

  if(isset($message)){
      foreach($message as $message){
          echo '<span class="message">'.$message.'</span>';
      }
  }
?>
<div class="container">
<div class = "admin-product-form-container centered">

<?php
$select = mysqli_query($conn,"SELECT * FROM products where id = $id");
while($row = mysqli_fetch_assoc($select)){
?>
<form action="#" method="POST" enctype="multipart/form-data">
<h3>update the product</h3>
<input type = "text" placeholder="enter product name" value="<?php $row['name'];?>" name="product_name" class="box">
<input type = "text" placeholder="enter product price" value="<?php $row['price'];?>" name="product_price" class="box">
<select name= "category" class="box">
 <option value="Birthday">Birthday</option>
 <option value="Designer">Designer</option>
 <option value="Premium">Premium</option>
</select>
<input type = "file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
<input type = "submit" class="btn" name="update_product" value="update product">
<a href = "adminhome.php" class="btn">Go back</a>
</form>
<?php }; ?>
</div>
</div>
</body>
</html>