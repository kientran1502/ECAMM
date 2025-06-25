<?php
include("../controls/adminRegistration.php");
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

        <form action="admin_register.php" method="POST" id="admin-form" enctype="multipart/form-data">

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

                <div class="col-md-12" id="alert-admin" style="display:none;">
                    <div class="alert"></div>
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
                    <label for="adminAvatar" class="form-label fw-bold">Enter Avatar:</label>
                    <input type="file" name="adminAvatar" accept="adminAvatar/*" class="form-control shadow-none text-center" required>
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
                    <button type="submit" name="submit" class="btn btn-secondary text-white">Register</button>
                </div>
            </div>
        </form>
    </div>


    <script src="../conference/ECAMM2024/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../conference/ECAMM2024/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../conference/ECAMM2024/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>

    <script>
        $(document).ready(function() {
            //sử lý form post data
            $("#admin-form").on("submit", function(e) {
                
                e.preventDefault();

                const formData = new FormData(this); // Get data from form

                $.ajax({
                    type: "POST",
                    url: "../controls/adminRegistration.php",
                    data: formData,
                    processData: false, // Quan trọng để gửi file
                    contentType: false, // Quan trọng để gửi file
                    success: function(response) {
                        const res = JSON.parse(response);
                        showModalAlert(res.status, res.message);
                        if (res.status === 'success') {
                            $('#admin-form')[0].reset();
                        }
                    },
                    error: function() {
                        showModalAlert('danger', 'Có lỗi xảy ra. Vui lòng thử lại.');
                    }
                });
            });

            function showModalAlert(type, message) {
                const alertHtml = `
                    <div class="alert alert-${type} alert-dismissible fade show pb-3" role="alert">
                        <strong>${message}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;

                $('#alert-admin').html(alertHtml).slideDown();

                // Tự động ẩn alert sau 3 giây
                setTimeout(function() {
                    $('#alert-admin .alert').alert('close');
                }, 3000);
            }
        });
    </script>


</body>

</html>