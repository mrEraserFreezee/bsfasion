<?php

include "service/database.php";
session_start();

if(isset($_SESSION['is_login'])){
    header("location: dashboard_admin.php");
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);

    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;

        header("location: dashboard_admin.php");

    }else{
        echo "akun tidak ditemukan";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - B.S Fashion</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-section {
            padding: 60px 0;
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php include "includes/navbar.html"?>

    <!-- Login Section -->
    <div class="login-section text-center bg-light">
        <div class="container">
            <h2 class="mb-4">Login</h2>
            <div class="login-form">
                <!-- Formulir Login -->
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                    <p>Belum memiliki akun? <a href="register.php">Daftar disini</a></p>
                </form>
            </div>
        </div>
    </div>

   
</body>
</html>
