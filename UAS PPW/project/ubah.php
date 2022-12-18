<?php 
require 'function.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])){
if (ubah($_POST) > 0){
    echo "
    <script>
        alert('Data Edited is Success !');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Edited is Failed !');
        document.location.href = 'index.php';
    </script>
    ";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Mahasiswa</title>
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
			padding-left: 30px;
			padding-right: 35px;
            height: 50px;
            text-align: center;
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
            height: 550px;
            position: fixed;
            border-radius: 20px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            box-sizing: border-box;
            position: relative;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
		}

		.container form #nim,#nama,#email,#jurusan,#gambar{
			outline-style: none;
			border-collapse: collapse;
			width: 220px;
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
			margin-left: 70px;
			font-family: Georgia, 'Times New Roman', Times, serif;
			background-color: #8EC3B0;
			border-style: none;
			padding: 10px 15px;
			border-radius: 10px;
		}

	</style>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>

    <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="NIM">NIM : </label>
                <br>
                <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>">
            </li>
            <br>
            <li>
                <label for="nama">Nama : </label>
                <br>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <br>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <br>
            <li>
                <label for="jurusan">Jurusan : </label>
                <br>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <br>
            <li>
                <label for="gambar">Gambar : </label>
                <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
            </li>
            <br><br>
            <li>
                <button type ="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
    </div>
</body>
</html>