<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - B.S Fashion</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-section {
            padding: 60px 0;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php include "includes/navbar.html"?>

    <!-- Kontak Section -->
    <div class="contact-section text-center bg-light">
        <div class="container">
            <h2 class="mb-4">Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan, silakan kirim pesan kepada kami melalui formulir di bawah ini.</p>
            <div class="contact-form">
                <!-- Formulir Kontak -->
                <form action="process_contact.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Informasi Kontak -->
    <div class="container text-center my-5">
        <h3>Informasi Kontak</h3>
        <p>Alamat: Jl. Contoh Alamat No. 123, Jakarta, Indonesia</p>
        <p>Email: <a href="mailto:info@bsfashion.com">info@bsfashion.com</a></p>
        <p>Telepon: +62 123 456 789</p>
    </div>

    <!-- Sertakan Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
