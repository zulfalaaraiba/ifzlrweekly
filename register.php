<?php
include 'fungsi.php'; 

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $check_user = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
    
    if (mysqli_num_rows($check_user) > 0) {
        echo "<script>alert('Username sudah digunakan! Silakan cari yang lain.');</script>";
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Register Berhasil! Silakan Login.'); window.location='login.php';</script>";
        } else {
            echo "Gagal register: " . mysqli_error($koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - LAEWEEKLY</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .register-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px 30px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 340px;
            text-align: center;
            backdrop-filter: blur(10px);
        }
        .register-container h2 {
            color: #6f42c1;
            margin-bottom: 30px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 15px;
            outline: none;
            box-sizing: border-box;
            transition: 0.3s;
        }
        .input-group input:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 8px rgba(111, 66, 193, 0.2);
        }
        .btn-register {
            width: 100%;
            padding: 12px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-register:hover {
            background: #218838;
            transform: translateY(-2px);
        }
        .login-link {
            background: #fce4ec;
            padding: 15px;
            border-radius: 20px;
            margin-top: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .login-link a {
            color: #6f42c1;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2> DAFTAR AKUN</h2>
        <form action="" method="POST">
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="register" class="btn-register">Register</button>
        </form>
        
        <div class="login-link">
            <p style="margin: 0; font-size: 14px; color: #555;">Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </div>
    </div>
</body>
</html>