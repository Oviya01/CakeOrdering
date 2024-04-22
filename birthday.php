<?php
session_start();
$username=$_SESSION["NAME"];
$conn = mysqli_connect("localhost","root","","cake_user");
if($conn==false){
	die("connection_error");
}
$category = $_GET['category'];
echo $category;
$sql = "SELECT * FROM products where category = '$category'";
$select = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cake Ordering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="birthday.css">
   <style>
           .dropdown:hover .btn-secondary {
            background-color: dimgray;
            color: white;
        }

        .btn-secondary {
            width: 120px;
            background-color: hotpink;
            font-size: 20px;
            border: none;
        }

        .dropdown-menu {
            width: 120px; /* Set the width of the dropdown menu */
        }

            .dropdown-menu a {
                text-align: center;
                color: dimgray;
                font-size: 20px;
                 text-decoration: none;
                display: inline-block;
            }

            .dropdown-menu .dropdown-item {
                font-size: 20px;
                background-color: dimgray;
                border: none;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

                .dropdown-menu .dropdown-item:hover {
                    width: 120px;
                    background-color: white;
                    color: dimgray;
                }
                .btn-primary{
                    background-color:hotpink;
                    border:pink;
                }
                .btn-primary:hover{
                    background-color:deeppink;
                }
                </style>
</head>
<body>
<header class="header">
        
        <nav class="navbar">
            <span class="navbar-brand mb-0 h1">CARNIVAL DELIGHT</span>
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" name="dropdownMenuButton id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="birthday.php?category=Birthday" class="dropdown-item">Birthday</a>
                    <a href="birthday.php?category=Premium" class="dropdown-item">Premium</a>
                    <a href="birthday.php?category=Designer" class="dropdown-item">Designer</a>
                </div>
            </div>
           
            <a href="contact.php">Contact</a>
            <a href="adminlogin.php">Admin</a>
        </nav>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">

                <span style="font-size:20px;" class="caret"> <?php echo $username; ?></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

    </header>
  <br><br><br><br><br><br><br>
   <div class="container">
    <div class="card-columns">

  <?php

while($row = mysqli_fetch_assoc($select)){
?>
                <div class="card ">
                <div class="card-body text-center">
                <div class="card-text">
                    <img src="images/<?php echo $row['image']; ?>"  height="200" width="200" alt="">
             
                        <h3><b><?php echo $row["name"]; ?></b></h3>
                        <h3><?php echo $row["price"]; ?></h3>
                        <h3><?php echo $row["category"]; ?></h3>
                        <a href="order.php?cakeid=<?php echo $row['id'];?>"  class="btn btn-primary">Order Now</a>
                        
                    </div>
                </div>
                </div> 
            <?php
            }
  
            ?>
        </div>
    </div>
</body>
</html>