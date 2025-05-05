<?php
include("../lib/session.php");
Session::checkSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Admin ECAMM</title>

    <style>
        .h-100vh{
            height: 100vh;
        }
    </style>
</head>

<body>
    <?php require('inc/header.php'); ?>


    <div class="bg-dark border-top d-flex">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="ms-1 nav-item px-2" role="presentation">
                <button class="nav-link text-white" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="false">Dashboard</button>
            </li>
            <li class="nav-item px-2" role="presentation">
                <button class="nav-link text-white" id="profile-user-tab" data-bs-toggle="tab" data-bs-target="#profile-user-tab-pane" type="button" role="tab" aria-controls="profile-user-tab-pane" aria-selected="false">Profile User</button>
            </li>
            <li class="nav-item px-2" role="presentation">
                <button class="nav-link text-white" id="change-pass-tab" data-bs-toggle="tab" data-bs-target="#change-pass-tab-pane" type="button" role="tab" aria-controls="change-pass-tab-pane" aria-selected="false">Change Password</button>
            </li>
            <li class="nav-item px-2" role="presentation">
                <button class="nav-link text-white" id="admin-management-tab" data-bs-toggle="tab" data-bs-target="#admin-management-tab-pane" type="button" role="tab" aria-controls="admin-management-tab-pane" aria-selected="false">Admin Management</button>
            </li>
        </ul>
        <a href="../conference/ECAMM2024/index.php" target="_blank" class="nav-link text-white px-3 text-decoration-none d-flex align-items-center link-to-my-web">
            Visit my website
        </a>
    </div>

    <div class="tab-content d-none border-top border-2" id="myTabContent">

        <?php require('inc/dashboard.php'); ?>
        
        <div class="tab-pane fade" id="profile-user-tab-pane" role="tabpanel" aria-labelledby="profile-user-tab" tabindex="0">
            <h1 class="text-dark">Profile content here</h1>
        </div>
        <div class="tab-pane fade" id="change-pass-tab-pane" role="tabpanel" aria-labelledby="change-pass-tab" tabindex="0">
            <h1 class="text-dark">Change password content</h1>
        </div>
        <div class="tab-pane fade" id="admin-management-tab-pane" role="tabpanel" aria-labelledby="admin-management-tab" tabindex="0">
            <h1 class="text-dark">admin-management content</h1>
        </div>
    </div>

    <div id="welcome-message" class="mt-5 text-center">
        <h1 class="text-dark">Welcome to Admin Panel</h1>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>