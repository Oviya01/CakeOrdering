<?php
session_start();
$conn = mysqli_connect("localhost","root","","cake_user");
if($conn==false){
	die("connection_error");
}
if(isset($_POST['login'])){
	$uname = $_POST["username"];
	$psd = $_POST["password"];

	$sql = "select * from register where uname = '".$uname."'AND psd1 = '".$psd."'";
	$result = mysqli_query($conn,$sql);
	
	$adname = "admin";
	$adpsd = "1357";
	if($uname == $adname && $psd == $adpsd){
		header("location:adminhome.php");
	}
	else if($row = mysqli_fetch_array($result)){
        $_SESSION["NAME"]=$uname;
        header("location:index.php");
    }
	else{
		echo "username or password is incorrect";
	}
}
?>
<html>
<div class="cake-bg">
</div>
<head><title>Login</title>
<style>
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.cake-bg{
   background-image: url(https://media.karousell.com/media/photos/products/2023/9/19/2tier_cake_stand_1695098643_db9c0eba_progressive.jpg);
   width: 50%;
   position: absolute;
   left: 0px;
   height: 100%;
   
}
.right{
   width: 50%;
   position: absolute;
   right: 0px;
   height:100%;
   background-color:#ffccdd;
}
.form-container{
  padding:15px;
  text-align:center;
}
.form-group {
    margin-bottom: 10px;
    
}
label {
  display: block;

  margin-bottom: 10px;
  font-size:22px;
}
.form-control {
    width: 50%;
    padding: 10px;
    font-size: 16px;
    border: 2px solid black;
    border-radius: 30px;  
    box-sizing: border-box;
}
.btn-primary {
    background-color: hotpink;
    color: #fff;
    border: none;
    padding: 12px 20px;
    font-size: 18px;
    border-radius: 5px;
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
</head>
<body>
<div class="right">
<div class="form-container" >
<h1 style="font-size:40px; color:deeppink">Login Form</h1>
<form action="#" method="POST">
<div class="form-group">
<label for="Username">Username:</label>
<input type="text" class="form-control" placeholder="Enter username" name="username">
</div>
<div class="form-group">
<label for="Password">Password:</label>
<input type="password" class="form-control" placeholder="Enter password" name="password">
</div>
<button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>
<p style="font-size:22px;">Don't have an account? <a href=register.php>Sign Up</a></p>
</div>
</div>
</body>
</html>


