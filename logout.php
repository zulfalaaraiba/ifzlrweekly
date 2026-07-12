<?php
session_start();

// Hapus semua data session
session_unset();
session_destroy();

// Pindahkan kembali ke halaman login
header("Location: login.php");
exit();
?>

<!DOCTYPE html>
<html lang="id">
<body>
    </div>
    <div style="margin: 50px auto; width: 300px; text-align: center;">
        <h2>Logout Berhasil</h2>
        <p>Anda telah berhasil logout. Klik tombol di bawah untuk kembali ke halaman login.</p>
        <a href="login.php" class="btn" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none;">Kembali ke Login</a>
    </div>  
    <div class="navigation-menu"> <a href="index.php" class="btn">Home</a>
        <a href="profile.php" class="btn">Profile</a>
        <a href="contact.php" class="btn">Contact</a>
        <a href="mahasiswa.php" class="btn">Data Mahasiswa</a>
        <a href="logout.php" class="btn" style="background-color: #dc3545; color: white;">Logout</a>
    </div>
</body>
</html>