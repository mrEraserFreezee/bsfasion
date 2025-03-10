<?php

include "service/database.php";

if(isset($_POST["register"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

    if($db->query($sql)){
        echo "berhasil dimasukan";
    } echo "data gagal masuk";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - B.S Fashion</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .register-section {
            padding: 60px 0;
        }
        .register-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php include "includes/navbar.html"?>

    <!-- Registrasi Section -->
    <div class="register-section text-center bg-light">
        <div class="container">
            <h2 class="mb-4">Registrasi</h2>
            <div class="register-form">
                <!-- Formulir Registrasi -->
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                    </div>
                    <p>Sudah memiliki akun? <a href="login.php">Login disini</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Sertakan Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Validasi form sebelum submit
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (password !== confirmPassword) {
                alert("Kata sandi dan konfirmasi kata sandi tidak cocok.");
                event.preventDefault(); // Mencegah form untuk disubmit
            }
        });
    </script>

</body>
</html>
