<?php
session_start();
$username=$_SESSION["NAME"];
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
    <link rel="stylesheet" href="styles.css">
    <style>

        .bake {
            background-size: cover;
            width: 1500px;
            height: 800px;
            display: flex;
        }

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
        .footer a {
            color: dimgray;
        }

            .footer a:hover {
                color: hotpink;
            }

        .footer p {
            color: hotpink;
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
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">

                <span style="font-size:20px;" class="caret"> <?php echo $username; ?></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

    </header>
    <div class="container-fluid">
        <div class="bake" style="background-image: url(https://img.freepik.com/premium-photo/birthday-cake-with-candles-balloons-pink-background_535844-7142.jpg);">
        </div>
        <h1 style="font-size: 50px; position: absolute; top: 150px; left: 300px; text-shadow: 1px 0px 0px deeppink, -1px 0px 0px deeppink, 0px 1px 0px deeppink, 0px -1px 0px deeppink; color: white; "><b>WELCOME TO CARNIVAL DELIGHT!!!</b></h1>
        <h2 style="font-size: 30px; position: absolute; top: 250px; left: 600px; text-shadow: 1px 0px 0px deeppink, -1px 0px 0px deeppink, 0px 1px 0px deeppink, 0px -1px 0px deeppink; color: black; " "><b>A little bliss in every bite</b></h2>
    </div>
    <br /><br /><br />
    <section class="footer">
        <div class="container">
            <div class="row" style="font-size:20px;">
                <div class="col-lg-6">
                    <h2 style="font-size:30px;"><b>About Us</b></h2>
                    <p>
                        At Carnival Delight, we believe in the power of celebration, the magic of togetherness,
                        and the joy that a delicious slice of cake can bring. Our story began with a simple yet profound
                        passion – to create delectable, delightful cakes that not only tantalize your
                        taste buds but also become an integral part of your cherished moments.<br /><br /><br />
                    </p>
                </div>

                <div class="col-lg-3">
                    <h2 style="font-size:30px"><b>Quick links</b></h2>
                    <a href="firstpage.html">home</a><br />
                    <a href="contact.php">contact</a><br />
                    <a href="register.php">register</a><br /><br /><br />
                </div>
                <div class="col-lg-3">
                    <h2 style="font-size:30px;"><b>Follow us</b></h2>
                    <a href="#">facebook</a><br />
                    <a href="#">instagram</a><br />
                    <a href="#">twitter</a><br />
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>



