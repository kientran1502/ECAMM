<?php include("../controls/adminlogin.php") ?>

<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/main.css">

    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            border-radius: 5%;
        }

        .custom-alert {
            position: fixed;
            top: 22px;
            right: 25px;
            animation: fadeOut 3s forwards;
            width: 300px;
        }
    </style>
</head>

<body class="bg-white">

    <div class="col-md-12 custom-alert" id="alert-login" style="display:none;">
        <div class="alert"></div>
    </div>

    <img style="height: 100%; width:100%;" src="../wp-content/uploads/2019/04/cropped-da-vinci-image-1263x722-3.png" alt="">
    <div class="login-form shadow bg-white overflow-hidden">

        <form action="login.php" method="POST" id="login">

            <div class="text-center">
                <h4 class="bg-secondary p-3 d-block">
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
                    <input name="adminPass" required type="password" class="form-control shadow-none text-center toggle-password" placeholder="Password">
                </div>

                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="displayPass">
                    <label class="form-check-label" for="displayPass">Show Password.</label>
                </div>

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-secondary text-white">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        LOGIN
                    </button>
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

    <script src="../conference/ECAMM2024/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../conference/ECAMM2024/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../conference/ECAMM2024/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>

    <script>
        $('#displayPass').on('change', function() {
            const type = this.checked ? 'text' : 'password';
            $('.toggle-password').attr('type', type);
        });

        $(document).ready(function() {
            $('#login').on('submit', function(e) {
                e.preventDefault();

                const formData = $(this).serialize();

                $.ajax({

                    url: '../controls/adminlogin.php',
                    data: formData,
                    type: 'POST',
                    success: function(response) {
                        try {
                            var res = JSON.parse(response);

                            // Hiển thị alert
                            showModalAlert(res.status, res.message);

                            // Nếu đăng nhập thành công thì redirect sau 1s
                            if (res.status === 'success' && res.redirect) {
                                setTimeout(function() {
                                    window.location.href = res.redirect;
                                }, 1000);
                            }
                        } catch (err) {
                            showModalAlert('danger', 'Unexpected server response');
                            console.error('JSON parse error:', err);
                            console.error('Raw response:', response);
                        }
                    },

                    error: function(xhr, status, error) {
                        showModalAlert('danger', 'AJAX error: ' + error);
                    }

                })
            });

            function showModalAlert(type, message) {
                const alertHtml = `
                    <div class="alert alert-${type} alert-dismissible fade show pb-3" role="alert">
                        <strong>${message}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;

                $('#alert-login .alert').html(alertHtml);
                $('#alert-login').fadeIn();

                // Tự động ẩn sau 3 giây
                setTimeout(function() {
                    $('#alert-login').fadeOut();
                }, 3000);
            }

        });
    </script>

</body>

</html>