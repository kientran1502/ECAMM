<?php
    session_start();
    session_destroy();
    header("Location: login.php"); // quay lại trang login
    exit;
?>  