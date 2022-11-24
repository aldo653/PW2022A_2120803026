<?php 
    $mahasiswa = [
      [
        "nama" => "Muhammad Aldo Saputra",
        "NIM" => "2120803026",
        "Jurusan" => "Sistem Informasi",
        "email" => "maldosaputra05@gmail.com"
      ],
      [
        "nama" => "Antonio",
        "NIM" => "2122345678",
        "Jurusan" => "Sistem Informasi",
        "email" => "antonio@gmail.com"
      ],
      [
        "nama" => "Indah",
        "NIM" => "22345678",
        "Jurusan" => "Ekonomi",
        "email" => "indah@gmail.com"
      ]
    ]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
      <ul>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NIM : <?php echo $mhs["NIM"]; ?></li>
        <li>Jurusan : <?php echo $mhs["Jurusan"]; ?></li>
        <li>E-mail : <?php echo $mhs["email"]; ?></li>
      </ul>
    <?php } ?>
</body>
</html>

