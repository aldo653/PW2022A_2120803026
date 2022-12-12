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
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type ="submit" name="submit">Add Data</button>
            </li>
        </ul>
    </form>
</body>
</html>