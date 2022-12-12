<?php 

$db = mysqli_connect("localhost", "root", "", "phpdasar");

$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//while ($mhs = mysqli_fetch_array($result)){
//var_dump($mhs["nama"]);
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="#">edit</a> | 
                <a href="#">delete</a>
            </td>
            <td><img src="img/ <?php echo $row["gambar"]; ?>" width="50"></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>