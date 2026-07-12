<?php
include 'fungsi.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php"); 
    exit();
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("Location: index.php"); 
            exit();
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - LAEWEEKLY</title>
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
        .login-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px 30px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 340px;
            text-align: center;
            backdrop-filter: blur(10px);
        }
        .login-container h2 {
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
        .btn-login {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-login:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }
        .register-link {
            background: #fce4ec;
            padding: 15px;
            border-radius: 20px;
            margin-top: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .register-link a {
            color: #6f42c1;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>FORM LOGIN</h2>
        
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; margin-bottom: 15px;">Username atau Password salah!</p>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn-login">Login</button>
        </form>
        
        <div class="register-link">
            <p style="margin: 0; font-size: 14px; color: #555;">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>