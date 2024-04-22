<?php
session_start();
$username=$_SESSION["NAME"];
$conn = mysqli_connect("localhost","root","","cake_user");
if($conn==false){
	die("connection_error");
}
$id = $_GET['cakeid'];
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $addr = $_POST['addr'];
  $quan = $_POST['quan'];
  $date = $_POST['date'];
  $msg = $_POST['msg'];
  if($name !="" && $phone !="" && $addr !="" && $quan !="" && $date !="" && $msg !=""){
    $sql="insert into orders values('$name', '$phone', '$addr', '$quan', '$date', '$msg')";
    if($conn->query($sql)){
        echo "Inserted";
    }
}
}


?>
<html>
<head><title>Order Now</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Carnival Delight Cakes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
<style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap');

        * {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
            outline: none;
            border: none;
            text-decoration: none;
            transition: all .2s linear;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 6rem;
            scroll-behavior: smooth;
        }

        body {
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin:0;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: hotpink;
            padding: 2rem 9%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

            .header .icons {
                font-size: 2.5rem;
                cursor: pointer;
                color: white;
            }

                .header .icons:hover {
                    color: dimgray;
                }

            .header .navbar a {
                color: floralwhite;
                font-size: 2rem;
                margin: 0 2rem;
            }

                .header .navbar a:hover {
                    text-decoration: underline;
                    text-underline-offset: 1rem;
                    color: dimgrey;
                }

            .header .icons2 {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1rem;
            }

                .header .icons2 span {
                    font-size: 2rem;
                    font-weight: lighter;
                }

        .btn-primary {
            background-color: hotpink;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .dropdown-menu {
            background-color: white;
        }

        .dropdow-menu .a {
            color: black;
            background-color: white;
        }

        .header .navbar .navbar-brand {
            font-family: 'Sans Serif Collection';
            font-weight: bolder;
            color: dimgrey;
            font-size: 2.5rem;
        }

        form {
            display: grid;
            gap: 10px;
            max-width: 700px;
            margin: 0 auto;
        }

        label {
            font-size: 17px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid black;
            border-color: black;
        }

        button {
            background-color: hotpink;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

            button:hover {
                background-color: deeppink; /* Button color on hover */
            }

        .dropdown:hover .btn-secondary {
            background-color: dimgray;
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

        .btn-secondary {
            width: 120px;
            background-color: hotpink;
            font-size: 20px;
            border: none;
        }

        .dropdown-menu {
            width: 120px; /* Set the width of the dropdown menu */
        }
        .footer{
            margin-top:auto;
        }
    </style>
<style>
body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

form {
    margin-bottom: 20px;
}

label,
input,
textarea {
    margin-bottom: 10px;
    width: 100%;
    padding: 8px;
    font-size: 16px;
}

button {
    background-color: hotpink;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 18px;
  }

button:hover {
    background-color: deeppink;
}
     
        .footer a{
            color:dimgray;
        }
        .footer a:hover{
            color:hotpink;
        }
        .footer p{
            color:hotpink;
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
            
        </nav>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" style="font-size:20px;">

                <span style="font-size:20px;" class="caret"> <?php echo $username; ?></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
<br><br><br><br><br><br><br>
<div class="container">
        <h2>Place Your Order</h2>
        <?php
$select = mysqli_query($conn,"SELECT * FROM products where id = $id");
while($row = mysqli_fetch_assoc($select)){
?>
            <div class="card">
                <img src="images/<?php echo $row['image'];?>" height="200" width="200" alt="Cake">
                <div class="card-body">
                   <h3 style="color:deeppink;class="card-title">Cake: <?php echo $row["name"];?></h3>
                        <h3 class="card-text">Price: <?php echo $row["price"];?></h3> 
                </div>
            </div>
 
        <form  method="POST" action="#" name="f1" id="orderForm">
        <label for="Name">Name:</label>
            <input type="text" id="name" name="name" min="1" required>
            <label for="phone no">Phone No:</label>
            <input type="number" id="phone" name="phone" min="1" required>
            <label for="address">Address:</label>
            <textarea id="addr" name="addr" rows="4"></textarea>
            
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quan" min="1" required>

            <label for="deliveryDate">Delivery Date:</label>
            <input type="date" id="deliveryDate" name="date" required>

            <label for="message">Special Message:</label>
            <textarea id="message" name="msg" rows="4"></textarea>
  
            <button type="submit" name="submit" onclick="myFunction()">Place Order </button>
        </form>
        <?php }; ?>

       
   </div>
   <section class="footer">
        <div class="container-fluid p-5">
            <div class="row p-5" style="font-size:20px;">
                <div class="col-lg-6">
                    <h3 style="font-size:30px;"><b>About us</b></h3>
                    <p>
                        At Carnival Delight, we believe in the power of celebration, the magic of togetherness,
                        and the joy that a delicious slice of cake can bring. Our story began with a simple yet profound
                        passion to create delectable, delightful cakes that not only tantalize your
                        taste buds but also become an integral part of your cherished moments.<br /><br /><br />
                    </p>
                </div>

                <div class="col-lg-3">
                    <h3 style="font-size:30px;"><b>Quick links</b></h3>
                    <a href="firstpage.html">home</a><br />
         
                    <a href="contact.php">contact</a><br />
                    <a href="register.php">register</a><br /><br /><br />
                </div>
                <div class="col-lg-3">
                    <h3 style="font-size:30px;"><b>Follow us</b></h3>
                    <a href="#">facebook</a><br />
                    <a href="#">instagram</a><br />
                    <a href="#">twitter</a><br />
               
                </div>
            </div>
        </div>
    </section>
     
</body>
</html>