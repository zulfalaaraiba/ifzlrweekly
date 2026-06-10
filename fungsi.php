<?php

$koneksi = mysqli_connect("localhost", "root", "", "ifzweekly");

{
function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query); /// lemari
        $rows = []; /// wadah untuk menampung baju
        while($row = mysqli_fetch_row($result))
        {
            $rows[] = $row; /// ambil baju taruh ke dalam wadah
        }
        return $rows;
    }
}

function tambahdata($data)
{
        global $koneksi;
       $nama = htmlspecialchars($data["nama"]);
       $nim = htmlspecialchars($data["nim"]);
       $jurusan = htmlspecialchars($data["jurusan"]);
       $email = htmlspecialchars($data["email"]);
       $no_hp = htmlspecialchars($data["no_hp"]);
       $foto =htmlspecialchars($data["foto"]);
 
       $query = "INSERT INTO mahasiswa ( nama, nim , jurusan, email, no_hp, foto)
       VALUES ( '$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

       mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi); 
}
