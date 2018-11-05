<?php
// =============================================================
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == "Register")
            $title = "Register";
    } else {
        $title = "Login";
    }
// =============================================================
    require("default/header.php");
// =============================================================
    if (isset($_GET['hal'])) {
        if ($_GET['hal'] == "Register")
            require("default/register.php");
    } else {
        require("default/login.php");
    }
// =============================================================
    require("default/footer.php");
// =============================================================
?>