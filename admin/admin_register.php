<?php 
    include("../classes/adminRegistration.php");
?>

<?php
$rgt = new register();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $insertAdmin= $rgt->insert_admins($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <style>
        div.register-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            border-radius: 10%;
        }
    </style>
</head>

<body class="bg-white">
    <img style="height: 100%; width:100%;" src="../wp-content/uploads/2019/04/cropped-da-vinci-image-1263x722-3.png" alt="">
    <div class="register-form rounded shadow bg-white overflow-none ">

        <form action="admin_register.php" method="POST">

            <div class="text-center">
                <h4 class="bg-dark text-white p-3">
                    REGISTER FORM
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
                    <label for="adminUser" class="form-label fw-bold">User Name:</label>
                    <input type="text" name="adminUser" placeholder="Username" class="form-control shadow-none text-center" required>
                </div>

                <div class="mb-3">
                    <label for="adminName" class="form-label fw-bold">Admin Name:</label>
                    <input type="text" name="adminName" placeholder="Admin Name" class="form-control shadow-none text-center" required>
                </div>

                <div class="mb-3">
                    <label for="adminEmail" class="form-label fw-bold">Your Email:</label>
                    <input type="email" name="adminEmail" placeholder="Email" class="form-control shadow-none text-center" required>
                </div>

                <div class="mb-3">
                    <label for="adminPass" class="form-label fw-bold">Enter Password:</label>
                    <input type="password" name="adminPass" placeholder="Password" class="form-control shadow-none text-center" required>
                </div>

                <div class="mb-5">
                    <label for="confirmPass" class="form-label fw-bold">Confirm Password:</label>
                    <input type="password" name="confirmPass" placeholder="Confirm Password" class="form-control shadow-none text-center" required>
                </div>

                <div class="text-center mb-3">
                    <button type="submit" name="submit"  class="btn btn-secondary text-white">Register</button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>