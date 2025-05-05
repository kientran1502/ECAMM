<?php include("../classes/adminlogin.php") ?>

<?php
$class = new adminlogin();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adminUser = $_POST['adminUser'];
    $adminPass = md5($_POST['adminPass']);

    $login_check = $class->login_admin($adminUser, $adminPass);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            border-radius: 10%;
        }
    </style>
</head>

<body class="bg-white">
    <img style="height: 100%; width:100%;" src="../wp-content/uploads/2019/04/cropped-da-vinci-image-1263x722-3.png" alt="">
    <div class="login-form rounded shadow bg-white overflow-none ">

        <form action="login.php" method="POST">

            <div class="text-center">
                <h4 class="bg-dark text-white p-3">
                    ADMIN ECAMM
                </h4>
            </div>


            <div class="p-4">
                <div class="mb-5">
                    <div class="text-center">
                        <img class="mb-2" style="height: 100px;" src="../wp-content/uploads/2018/09//Logo.png" alt="">
                        <h5 class="">MSCS KEYLAB</h5>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="adminUser" class="form-label fw-bold">Name user:</label>
                    <input name="adminUser" required type="text" class="form-control shadow-none text-center" placeholder="Admin name">
                </div>

                <div class="mb-4">
                    <label for="adminPass" class="form-label fw-bold">Password:</label>
                    <input name="adminPass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>

                <div class="text-center">
                    <button name="login" type="submit" class="btn btn-secondary text-white">LOGIN</button>
                </div>
                
                <div class="note mt-3 text-center">
                    <p>
                        if you don't have an account?
                        <a href="admin_register.php" class="text-decoration-none text-danger" target="_blank">Registration here.</a>
                    </p>

                </div>
            </div>

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>