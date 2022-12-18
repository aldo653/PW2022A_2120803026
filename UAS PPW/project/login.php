<?php 
require 'function.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($result) === 1 ) {

		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			header("Location: index.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style>
		label{
			display: block;
		}

		body{
        background-color: #DEF5E5;
        color : #425F57;
        }
		
		h2{
			background-color: white;
            margin: 30px auto auto auto;
            width: 320px;
            padding-top: 10px;
            padding-bottom: 5px;
			padding-left: 80px;
			padding-right: 35px;
            height: 50px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-sizing: border-box;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px ;
		}

		.container{
			background-color: white;
            margin : auto;
            padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 5px;
			padding-right: 35px;
            width: 320px;
            height: 450px;
            border-radius: 20px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            box-sizing: border-box;
            position: relative;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
		}

		img{
			width: 200px;
			height: 150px;
			margin-right: 30px;
			margin-left: 60px;
		}

		.container form #username,#password{
			outline-style: none;
			border-collapse: collapse;
			width: 200px;
			color: #425F57;
			border-color: #DEF5E5;
			border-radius: 5px;
		}

		.container form ul li{
			text-decoration: none;
			display: grid;
		}

		.container button{
			width: 65px;
			text-align: center;
			margin: auto;
			margin-left: 83px;
			font-family: Georgia, 'Times New Roman', Times, serif;
			background-color: #8EC3B0;
			border-style: none;
			padding: 10px 15px;
			border-radius: 10px;
		}

	</style>
</head>
<body>

<h2>Halaman Login</h2>
<div class="container">
<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic; text-align: center; margin-left: 30px">username/password is false</p>
<?php endif; ?>


<img src="img/gambar.png" alt="gambar">

<form action="" method="post">

	<ul>
		<li>
			<label for="username">Username :</label>
			<br>
			<input type="text" name="username" id="username">
		</li>
		<br>
		<li>
			<label for="password">Password :</label>
			<br>
			<input type="password" name="password" id="password">
		</li>
		<br><br>
		<li>
			<button type="submit" name="login">Login</button>
		</li>
	</ul>
	
</form>
</div>

</body>
</html>