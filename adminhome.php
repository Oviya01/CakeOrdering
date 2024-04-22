<?php
session_start();
$conn = mysqli_connect('localhost','root','','cake_user');
if(isset($_POST['add_product'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'images'.$product_image;
    $product_category = $_POST['category'];

    if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_category)){
        $message[] = 'please fill out all';
    }
    else{
        $insert = "INSERT INTO products(name,price,image,category) VALUES('$product_name','$product_price','$product_image','$product_category')";
        $upload = mysqli_query($conn,$insert);
        if($upload){
            move_uploaded_file($product_image_tmp_name,$product_image_folder);
            $message[] = 'New product added successfully';
        }else{
            $message[] = 'could not add the product';
        }
    }
	
};
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM products where id = $id");
    header('location:adminhome.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
<div class = "admin-product-form-container">
<form action="#" method="POST" enctype="multipart/form-data">
<h3>add new product</h3>
<input type = "text" placeholder="enter product name" name="product_name" class="box">
<input type = "text" placeholder="enter product price" name="product_price" class="box">
<input type = "file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
<select name= "category" class="box">
 <option value="Birthday">Birthday</option>
 <option value="Designer">Designer</option>
 <option value="Premium">Premium</option>
</select>

<input type = "submit" class="btn" name="add_product" value="add product">

</form>
</div>
<?php
$select = mysqli_query($conn,"SELECT * from products");

?>
<div class="product-display">
<table class="product-display-table">
<thead>
<tr>
<th>product images</th>
<th>product name</th>
<th>product price</th>
<th>product category</th>
<th>action</th>
</tr>
</thead>

<?php
 while($row = mysqli_fetch_assoc($select)){
     ?>
     <tr>
        <td><img src="images/<?php echo $row['image']; ?>" height="100" width="100" alt=""></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['category']; ?></td>
       <td>
        <a href="admin_update.php?edit=<?php echo $row['id'];?>" class="btn">Edit</a>        
        <a href="adminhome.php?delete=<?php echo $row['id'];?>" class="btn">Delete</a>
        </td>
     </tr>
<?php
 };
 ?>

</table>
</div>
</div>
<a href="logout.php">logout</a>
</body>
</html>