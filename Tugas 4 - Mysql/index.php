<?php 
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if(isset($_POST["search"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <div class="container">
        <div class="judul"><h1>Daftar Mahasiswa</h1></div>
            <div class="container2">
            <a href="tambah.php">Tambah Data Mahasiswa</a>
        <br><br>

        <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus placeholder="Enter Keyword..." autocomplete="off">
            <button type="submit" name="search">Search !</button>
        </form>
        <br><br>

        <table border ="1" cellpadding ="10" cellspacing ="0">
            <tr>
                <th>No. Urut</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach( $mahasiswa as $row ) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="ubah.php?id= <?= $row["id"]; ?>">edit</a> | 
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Sure ?');">delete</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                <td><?php echo $row["nim"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
            </div>
    </div>
</body>
</html>