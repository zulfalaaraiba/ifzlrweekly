<?php
require 'fungsi.php';

$qmahasiswa = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($qmahasiswa);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | WEB INFORMATIKA 2026</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <h1>WEB INFORMATIKA-ZULFA</h1>
    <hr>

    <table border="1" cellspacing="0" cellpadding="10px" width="100%">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="kontak.php">Kontak</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <h3>Data Mahasiswa</h3>

    <a href="inputdata.php">
        <button>Tambah Data</button>
    </a>

    <br><br>

    <table border="1" cellpadding="5px" width="100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        foreach($mahasiswas as $mhs){
        ?>

        <tr>
            <td align="center"><?= $no; ?></td>

            <td><?= $mhs[1]; ?></td>

            <td align="center"><?= $mhs[2]; ?></td>

            <td align="center"><?= $mhs[3]; ?></td>

            <td><?= $mhs[4]; ?></td>

            <td><?= $mhs[5]; ?></td>

            <td align="center">
                <img src="assets/images/<?= $mhs[6]; ?>"
                     width="70"
                     height="70"
                     alt="Foto Mahasiswa">
            </td>

            <td align="center">

                <a href="ubahdata.php?id=<?= $mhs[0]; ?>">
                    <button>Edit</button>
                </a>

                <a href="hapusdata.php?id=<?= $mhs[0]; ?>"
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    <button>Hapus</button>
                </a>

            </td>
        </tr>

        <?php
        $no++;
        }
        ?>

    </table>

</body>
</html>