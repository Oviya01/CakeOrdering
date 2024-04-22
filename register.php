<?php
session_start();
$conn = mysqli_connect("localhost","root","","cake_user");
if($conn==false){
	die("connection_error");
}
if(isset($_POST['register'])){
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $psd1 = $_POST['psd1'];
  $psd2 = $_POST['psd2'];
  if($uname !="" && $email !="" && $psd1 !="" && $psd2 !="" ){
  if ($psd1 != $psd2) {
    echo "Error: Passwords do not match!";
    exit();
  }
  else{
    $sql="insert into register values('$uname', '$email', '$psd1', '$psd2')";
    if($conn->query($sql)){
        header("location:login.php");
    }
}
}
}
?>
<html>
<head><title>Register</title>
</head>
<style>
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.left {
    background-image: url(https://img.freepik.com/free-photo/frame-food-ingredients-baking-gently-pink-pastel-background-cooking-flat-lay-with-copy-space-top-view-baking-concept-flat-lay_127032-2200.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1698969600&semt=ais);
    width: 100%;
    height: 750px;
    position: absolute;
    background-repeat: no-repeat;
    background-size: cover;
}

.form-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50%;
    max-width: 400px; /* Set a maximum width if desired */
    padding: 15px;
    text-align: center;
    border: 3px solid gray; /* Add border */
    border-radius: 10px; 
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
    font-weight: bold;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 22px;
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensure padding and border are included in the width */
}

.btn-primary {
    background-color: gray;
    color: #fff;
    border: none;
    padding: 12px 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: deeppink;
}

a {
    text-decoration: none;
    color: deeppink;
}

a:hover {
    text-decoration: underline;
}
</style>

<body>
<div class="left">
<div class="form-container">
<h1>REGISTRATION</h1>
<form action="#" method="POST">
<div class="form-group">
<label for="Username">UserName:</label>
<input type="text" class="form-control" placeholder="Enter username" name="uname">
</div>
<div class="form-group">
<label for="Email">Email:</label>
<input type="email" class="form-control" placeholder="Enter email" name="email">
</div>

<div class="form-group">
<label for="Password1">Password:</label>
<input type="password" class="form-control" placeholder="Enter password" name="psd1">
</div>

<div class="form-group">
<label for="Password2">Confirm Password:</label>
<input type="password" class="form-control" placeholder="Enter password" name="psd2">
</div>
<button type="submit" class="btn btn-primary" name="register">Submit</button>
</form>
<br><br>
<p style="font-size:20px">Already have an account? <a href=login.php>Login Now</a></p>
</div>
</div>
</body>
</html>