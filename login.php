<?php
include "conn.php";

if (isset($_POST['submit'])) {
    // Ambil dan sanitasi input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mendapatkan data pengguna
    $query = mysqli_query($conn, "SELECT * FROM tb_login WHERE username = '$username'");

    if (mysqli_num_rows($query) > 0) {

        // Verifikasi password
        echo "
            <script>
            alert('Login Berhasil');
            window.location.href='obat/tampil_obat.php';
            </script>";
    } else {
        echo "
        <script>
        alert('Username / Password tidak ditemukan');
        window.location.href='login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: rgb(34, 193, 195);
            background: linear-gradient(120deg, rgba(34, 193, 195, 1) 0%, rgba(237, 45, 253, 1) 100%);
        }

        .login-container {
            /* Semi-transparent white background */
            padding: 30px;
            max-width: 360px;
            width: 100%;
            text-align: center;
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .login-container h2 {
            margin: 0 0 20px;
            color: #ffffff;
            font-size: 26px;
            font-weight: 700;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #ffffff;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            /* Semi-transparent border */
            border-radius: 8px;
            font-size: 16px;
            color: #ffffff;
            background: rgba(255, 255, 255, 0.2);
            /* Semi-transparent background */
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-color: #ffffff;
            outline: none;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .login-container input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .login-container input[type="submit"]:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>