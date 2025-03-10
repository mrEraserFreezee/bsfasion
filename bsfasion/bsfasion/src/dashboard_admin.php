<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - B.S Fashion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .admin-dashboard {
            padding: 40px 0;
        }
        .admin-sidebar {
            background-color: #f8f9fa;
            height: 100vh;
            padding-top: 20px;
        }
        .admin-sidebar a {
            text-decoration: none;
            color: #000;
            padding: 10px;
            display: block;
        }
        .admin-sidebar a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">B.S Fashion - Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="admin.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 admin-sidebar">
                <h4>Menu Admin</h4>
                <a href="admin.php">Dashboard</a>
                <a href="manage_products.php">Kelola Produk</a>
                <a href="manage_categories.php">Kelola Kategori</a>
                <a href="manage_orders.php">Kelola Pesanan</a>
            </div>

            <!-- Konten Utama -->
            <div class="col-md-9 admin-dashboard">
                <h2>Dashboard <?= $_SESSION["username"]?></h2>

                <h3>Daftar Produk</h3>
                <a href="add_product.php" class="btn btn-success mb-3">Tambah Produk</a>
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td>
                                    <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
