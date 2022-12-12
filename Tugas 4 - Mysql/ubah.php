<?php 
require 'function.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id =$id")[0];
var_dump($mhs["nim"]);

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
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="NIM">NIM : </label>
                <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">nim : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
                <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type ="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
</body>
</html>