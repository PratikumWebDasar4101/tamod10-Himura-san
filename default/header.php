<?php
// =============================================================
    session_start();
// =============================================================
    if (isset($_SESSION['sukses'])) {
        header("Location: admin/index.php");
    }
// =============================================================
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
    }
// =============================================================
?>
<!DOCTYPE html>
<html>
<!-- ============================================================= -->
    <head>
        <title>TA 10 - <?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="asset\css\bootstrap.min.css">
    </head>
<!-- ============================================================= -->
    <body>
<!-- ============================================================= -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">TA</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if($_GET['hal'] == NULL) { echo "active"; } ?>">
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
                    <li class="nav-item <?php if($_GET['hal'] == "Register") { echo "active"; } ?>">
                        <a class="nav-link" href="?hal=Register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
<!-- ============================================================= -->
        <div class="container w-25">