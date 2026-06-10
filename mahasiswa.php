<?php

    require 'fungsi.php';
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa); ///menghasilkan data dalam wadah

    //$result = mysqli_query($koneksi, $query);///

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | WEB INFORMATIKA 2026</title>
</head>
<body>
      <h1>
            WEB INFORMATIKA-ZULFA
        </h1>
        <hr>
        <table border="1" cellspacing="0" cellpadding="10px">
            <tr>
                <td>
                    <a href="index.php">Home</a>
                </td>
                <td>
                    <a href="profile.php">Profile</a>
                </td>
                <td>
                    <a href="contact.php">Kontak</a>
                </td> 
                <td>
                    <a href="mahasiswa.php">Data Mahasiswa</a>
                </td>   
            </tr>
        </table>
        <h3>Data Mahasiswa</h3>
        <a href="inputdata.php">
            <button>Tambah Data</button>
        </a>
        <br>
        <br>
        <table border="1" cellpadding="5px">
            <tr>
                <th >No</th>
                <th >Nama</th>
                <th >NIM</th>
                <th >Jurusan</th>
                <th >Email</th>
                <th >No. HP</th>
                <th >Foto</th>
                <th >Aksi</th>
            </tr>
            <?php
            $no = 1;
                foreach($mahasiswas as $mhs)
                {
            ?>
            <tr>
                <td align="center"><?= $no ?></td>
                <td><?php echo $mhs[1] ?></td>
                <td align="center"><?= $mhs[2] ?></td>
                <td align="center"><?= $mhs[3] ?></td>
                <td align="center"><?= $mhs[4] ?></td>
                <td ><?= $mhs[5] ?></td>
                <td><img src="aset/images/<?= $mhs[6] ?>" width="70px" height="70px"/></td>
                 <td>
                    <a href="uabhdata.php" style=""><button>Edit</button></a> <a href="hapusdata.php"><button>Hapus</button></a>
                </td>
            </tr>
            <?php
            $no++;
                }
            ?>
        </table>
</body>
</html>