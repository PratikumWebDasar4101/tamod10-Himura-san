<?php
    session_start();

    if ($_SESSION['sukses'] == NULL) {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TA 10 : Admin - <?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="..\asset\css\bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- Karena saya belum menemukan Sidebar versi Bootstrap.. -->
            <a class="navbar-brand" href="index.php">TA 10</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if($_GET['hal'] == NULL) { echo "active"; } ?>">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item  <?php if($_GET['hal'] == "TambahData") { echo "active"; } ?>">
                        <a class="nav-link" href="?hal=TambahData">Tambah Data</a>
                    </li>
                    <li class="nav-item <?php if($_GET['hal'] == "Profile") { echo "active"; } ?>">
                        <a class="nav-link" href="?hal=Profile">Profile</a>
                    </li>
                    <li class="nav-item <?php if($_GET['hal'] == "EditProfile") { echo "active"; } ?>">
                        <a class="nav-link" href="?hal=EditProfile">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php?logout=sukses">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>