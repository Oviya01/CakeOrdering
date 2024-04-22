<?php
if(isset($_POST['submit'])){
	$uname = $_POST["username"];
	$psd = $_POST["password"];
	$adname = "admin";
	$adpsd = "1357";
	if($uname == $adname && $psd == $adpsd){
		header("location:adminhome.php");
	}
	else{
		echo "Invalid Username or password";
	}
}

?>



<html>
<head><title>Admin Login</title>
<style>
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}
.container {
            max-width: 800px; /* Adjust the max-width as needed */
            margin: 0 auto;
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 30px;
        }
.form-group {
    margin-bottom: 15px;
    text-align:left;
}
.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
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
<center>
<div class="container">
<h1 ">Admin Login</h1>
<br>
<form action="#" method="POST">
<div class="form-group">
<label for="Username">Username:</label>
<input type="text" class="form-control" placeholder="Enter username" name="username"required> 
</div>
<div class="form-group">
<label for="Password">Password:</label>
<input type="password" class="form-control" placeholder="Enter password" name="password" required>
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</center>
</div>
</body>
</html>