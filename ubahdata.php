<?php
require 'fungsi.php';

$id =$_GET["id"];

$query = "SELECT * FROM mahasiswa WHERE id=$id";

if(isset($_POST["kirim"]))
{
       
       if(ubahdata($_POST)>0)
        {
      echo "
        <script>
        alert('Data Berhasil Diubah!');
        window.location.href='mahasiswa.php';
        </script>
        ";
        }
    else 
    {
        echo "
        <script>
        alert('Data Gagal Diubah!');
        window.location.href='mahasiswa.php';
        </script>
        ";
    }
}
?>     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA | DATA MAHASISWA</title>
</head>
<body>
        </title>
    </head>
      <link rel="stylesheet" href="assets/style.css">
    <body>
        <h1>
            WEB INFORMATIKA-ZULFA
        <hr>
        <table border="1" cellspacing="0" cellpadding="10px">
            <tr>
                <td>
                    <a href= "index.php">HOME</a></td>
                <td>
                     <a href= "profile.php">PROFILE</a></td>
                <td>
                     <a href= "kontak.php">KONTAK</a></td>
                <td >
                    <a href="mahasiswa.php">MAHASISWA</a></td>
            </tr>
        </table>
        <H2>Input Data</H2> 
            <form action="" method="post">
                    <table border="0" CellSpacing="5px" >
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td>:</td>
                            <td><input type="text" name ="nama" id="nama"value="<?$mhs[1]?>"required></td>
                        </tr>
                         <tr>
                            <td><label for="nim">nim</label></td>
                            <td>:</td>
                            <td><input type="number" name="nim"  id="nim"value="<?=$mhs[2]?>"required></td>
                        </tr>
                         <tr>
                            <td><label for="jurusan">jurusan</label></td>
                            <td>:</td>
                            <td><input type="text" name="jurusan"  id="jurusan"value="<?=$mhs[3]?>"required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>:</td>
                            <td><input type="text" name="email"  id="email" value="<?=$mhs[4]?>"></td>
                        </tr>
                        <tr>
                            <td><label for="no_hp">no_hp</label></td>
                            <td>:</td>
                            <td><input type="number" name="no_hp"  id="no_hp"value="<?=$mhs[5]?>"></td>
                        </tr>
            
                         <tr>
                            <td><label for="Foto">foto</label></td>
                            <td>:</td>
                            <td><input type="file" name="foto" value="<?=$mhs[6]?>"></td>
                        </tr>
                    </table>
                 <tr>
                            <table>
                                <br>
                                <input type="submit" name="kirim" value="kirim">
                            </table>

                        </tr>

                         </table>
                         </form>
            </body
            

            