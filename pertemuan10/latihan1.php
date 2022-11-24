<?php 
$mahasiswa = ["Muhammad Aldo Saputra", "2120803026", "Sistem Informasi", "maldosaputra05@gmail.com"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coba Array</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <li><?php print $mhs; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>