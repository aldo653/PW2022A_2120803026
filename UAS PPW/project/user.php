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
    <title>Halaman User</title>
    <style>
        body{
        background-color: #DEF5E5;
        color : #425F57;
        }

        label{
            display: block;
        }

        .container{
            background-color: #DEF5E5;
            text-align: center;
            text-decoration: none;
        }

        .container .judul{
            color: #425F57;
            background-color: white;
            margin: auto;
            width: 1000px;
            padding-top: 1px;
            padding-bottom: 5px;
            height: 75px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-sizing: border-box;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px ;
        }

        .container2{
            background-color: white;
            margin : auto;
            padding: 25px;
            width: 1000px;
            height: 1200px;
            border-radius: 20px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            box-sizing: border-box;
            position: relative;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .container .container2 table{
            color:#425F57 ;
        }

        .container .container2 a{
            text-decoration: none;
            color: #333;
        }

        .container .container2 .awal{
            width: 80px;
			text-align: center;
			font-family: Georgia, 'Times New Roman', Times, serif;
			background-color: #8EC3B0;
			border-style: none;
			padding: 5px 10px;
			border-radius: 5px;
        }

        .container .container2 a:hover{
            color: #425F57;
        }
        
        .container .container2 form button{
            width: 80px;
			text-align: center;
			font-family: Georgia, 'Times New Roman', Times, serif;
			background-color: #8EC3B0;
			border-style: none;
			padding: 5px 10px;
			border-radius: 5px;
        }
        .container .container2 form input{
            margin-top: 10px;
            outline-style: none;
			border-collapse: collapse;
			width: 200px;
			color: #425F57;
			border-color: #DEF5E5;
			border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="judul"><h1>Daftar Mahasiswa</h1></div>
            <div class="container2">

            <form action="" method="post">
                <label for="keyword">Cari Data :</label>
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
                        <a href="detail.php?id=<?= $row["id"]; ?>">detail</a>
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