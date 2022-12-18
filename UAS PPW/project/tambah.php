<?php 
require 'function.php';


if (isset($_POST["submit"])){
if (tambah($_POST) > 0){
    echo "
    <script>
        alert('Data Added is Success !');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Added is Failed !');
        document.location.href = 'index.php';
    </script>
    ";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Mahasiswa</title>
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
            text-align: center;
            width: 320px;
            padding-top: 10px;
            padding-bottom: 5px;
			padding-left: 40px;
			padding-right: 35px;
            height: 80px;
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
			padding-left: 15px;
			padding-right: 35px;
            width: 320px;
            height: 460px;
            border-radius: 20px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            box-sizing: border-box;
            position: relative;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
		}

		.container form #nama,#nim,#email,#jurusan,#gambar{
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
			width: 90px;
			text-align: center;
			margin: auto;
			margin-left: 60px;
			font-family: Georgia, 'Times New Roman', Times, serif;
			background-color: #8EC3B0;
			border-style: none;
			padding: 10px 15px;
			border-radius: 10px;
		}

	</style>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>

    <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <br>
                <input type="text" name="nama" id="nama">
            </li>
            <br>
            <li>
                <label for="nim">NIM : </label>
                <br>
                <input type="text" name="nim" id="nim">
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <br>
                <input type="text" name="email" id="email">
            </li>
            <br>
            <li>
                <label for="jurusan">Jurusan : </label>
                <br>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <br>
            <li>
                <label for="gambar">Gambar : </label>
                <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <br><br>
            <li>
                <button type ="submit" name="submit">Add Data</button>
            </li>
        </ul>
    </form>
    </div>
</body>
</html>