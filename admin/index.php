<?php
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == "TambahData")
            $title = "Tambah Data";

        if ($_GET['hal'] == "EditData")
            $title = "Edit Data";

        if ($_GET['hal'] == "Profile")
            $title = "Profile";

        if ($_GET['hal'] == "EditProfile")
            $title = "Edit Profile";

    } else {
        $title = "Dashboard";
    }

    require("header.php"); 
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == "TambahData")
            require("tambah_data.php");

        if ($_GET['hal'] == "EditData")
            require("edit_data.php");

        if ($_GET['hal'] == "Profile")
            require("profile.php");

        if ($_GET['hal'] == "EditProfile")
            require("edit_profile.php");
    } else {
        require("dashboard.php");
    }
    require("footer.php"); 
?>