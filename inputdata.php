<?php
require 'fungsi.php';
if(isset($_POST["kirim"]))
{
       
       if(tambahdata($_POST)>0)
        {
        echo "<script>
          alert('Data Berhasil Ditambahkan!);
          window.location.href='mahasiswa.php';
          <script>";
        }
    else 
    {
        echo "<script>
          alert('Data gagal Ditambahkan!);
          window.location.href='mahasiswa.php';
          <script>";
    }
}
?>     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA | DATA MAHASISWA</title>
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
                            <td><input type="text" nama="nama" id="nama"/></td>
                        </tr>
                         <tr>
                            <td><label for="nim">nim</label></td>
                            <td>:</td>
                            <td><input type="number" nama="nim"  id="nim"/></td>
                        </tr>
                         <tr>
                            <td><label for="jurusan">jurusan</label></td>
                            <td>:</td>
                            <td><input type="text" nama="jurusan"  id="jurusan"/></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>:</td>
                            <td><input type="text" nama="email"  id="email"/></td>
                        </tr>
                        <tr>
                            <td><label for="no_hp">no_hp</label></td>
                            <td>:</td>
                            <td><input type="number" nama="no_hp"  id="no_hp"/></td>
                        </tr>
            
                         <tr>
                            <td><label for="Foto">foto</label></td>
                            <td>:</td>
                            <td><input type="text" nama="foto" id="foto"></td>
                        </tr>
                    </table>
                 <tr>
                            <table>
                                <br>
                                <input type="submit" nama="kirim" value="kirim">
                            </table>
                        </tr>

                         </table>
                         </form>
            </body
            

            