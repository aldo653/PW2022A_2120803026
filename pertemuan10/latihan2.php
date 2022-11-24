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
    <li><?= $mahasiswa[0]; ?></li>
    <li><?php print $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?php print $mahasiswa[3]; ?></li>
  </ul>
</body>
</html>