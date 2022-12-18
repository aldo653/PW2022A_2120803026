<?php 
require 'function.php';

if( isset($_POST["register"]) ) {

	if(registrasi($_POST) > 0 ) {
		echo "<script>
				alert('new user success added');
			  </script>";
	} else {
		echo mysqli_error($db);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
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
            margin: 50px auto auto auto;
            width: 270px;
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
            margin : 30px auto auto auto;
            padding-top: 10px;
			padding-bottom: 10px;
			padding-left: -15px;
			padding-right: 40px;
            width: 270px;
            height: 320px;
            border-radius: 20px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            box-sizing: border-box;
            position: relative;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
		}

		.container form #username,#password,#password2{
			outline-style: none;
			border-collapse: collapse;
			width: 180px;
			color: #425F57;
			border-color: #DEF5E5;
			border-radius: 5px;
			padding-left: -20px;
		}

		.container form ul li{
			text-decoration: none;
			display: grid;
		}

		.container button{
			width: 85px;
			text-align: center;
			margin: auto;
			margin-left: 55px;
			font-family: Georgia, 'Times New Roman', Times, serif;
			background-color: #8EC3B0;
			border-style: none;
			padding: 10px 15px;
			border-radius: 10px;
		}
	</style>
</head>
<body>

<h2>Registrasi</h2>

<div class="container">
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
			<br>
			<li>
				<label for="password2">Konfirmasi Password :</label>
				<br>
				<input type="password" name="password2" id="password2">
			</li>
			<br><br>
			<li>
				<button type="submit" name="register">Sign Up</button>
			</li>
		</ul>
		
	</form>
</div>
</body>
</html>