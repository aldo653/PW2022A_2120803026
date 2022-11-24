<?php 
$mahasiswa = [["Muhammad Aldo Saputra", "2120803026", "Sistem Informasi", "maldosaputra05@gmail.com"], 
              ["Antonio", "20987654", "Akuntansi", "antoni@gmail.com",],
              ["Indah", "223456782", "Biologi", "indahh@gmail.com",],
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $mhs) {?>
    <ul>
      <li><?php echo $mhs[0]; ?></li>
      <li><?php echo $mhs[1]; ?></li>
      <li><?php echo $mhs[2]; ?></li>
      <li><?php echo $mhs[3]; ?></li>
    </ul>
  <?php } ?>
</body>
</html>