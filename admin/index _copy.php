<?php
include("../lib/session.php");
Session::checkSession();
$level = Session::get('level');
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <title>Admin ECAMM</title>

    <style>
        .h-100vh {
            height: 100vh;
        }
    </style>

</head>

<body>

    <?php require('inc/header.php'); ?>


    <div class="bg-dark border-top d-flex">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="ms-1 nav-item px-2" role="presentation">
                <button class="nav-link text-white active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true">Dashboard</button>
            </li>
            <li class="nav-item px-2" role="presentation">
                <button class="nav-link text-white" id="profile-user-tab" data-bs-toggle="tab" data-bs-target="#profile-user-tab-pane" type="button" role="tab" aria-controls="profile-user-tab-pane" aria-selected="false">Profile User Admin</button>
            </li>
            <li class="nav-item px-2" role="presentation">
                <button class="nav-link text-white" id="change-pass-tab" data-bs-toggle="tab" data-bs-target="#change-pass-tab-pane" type="button" role="tab" aria-controls="change-pass-tab-pane" aria-selected="false">Change Password</button>
            </li>
            <li class="nav-item px-2" role="presentation">
                <button class="nav-link text-white" id="change-background-tab" data-bs-toggle="tab" data-bs-target="#change-background-tab-pane" type="button" role="tab" aria-controls="change-background-tab-pane" aria-selected="false">Change Background & Logo</button>
            </li>
            <?php
            if ($level == 0) {
            ?>
                <li class="nav-item px-2" role="presentation">
                    <button class="nav-link text-white" id="admin-management-tab" data-bs-toggle="tab" data-bs-target="#admin-management-tab-pane" type="button" role="tab" aria-controls="admin-management-tab-pane" aria-selected="false">Admin Management</button>
                </li>
                <li class="nav-item px-2" role="presentation">
                    <button class="nav-link text-white" id="check-request-tab" data-bs-toggle="tab" data-bs-target="#check-request-tab-pane" type="button" role="tab" aria-controls="check-request-tab-pane" aria-selected="false">Check Request</button>
                </li>
            <?php
            }
            ?>
        </ul>
        <a href="../conference/ECAMM2024/index.php" target="_blank" class="nav-link text-white px-3 text-decoration-none d-flex align-items-center link-to-my-web">
            Visit my website
        </a>
    </div>

    <div class="tab-content border-top border-2" id="myTabContent">

        <?php require('inc/dashboard.php'); ?>

        <?php require('inc/profile_admin.php'); ?>

        <?php require('inc/changePassword.php'); ?>

        <?php require('inc/change_background.php'); ?>

        <?php require('inc/admin_management.php'); ?>

        <?php require('inc/checkRequest.php'); ?>

    </div>

    <!-- <div id="welcome-message" class="mt-5 text-center">
        <h1 class="text-dark">Welcome to Admin Panel</h1>
    </div> -->

    <script src="js/main.js"></script>
    <script src="../conference/ECAMM2024/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../conference/ECAMM2024/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../conference/ECAMM2024/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        $(document).on('click', '.edit-admin', function(e) {

            e.stopPropagation();

            const admin_id = $(this).data('id');

            $.ajax({
                url: '../controls/get_admin.php',
                data: {
                    admin_id
                },
                method: 'GET',
                success: function(response) {
                    const res = JSON.parse(response);

                    if (res.status === 'success') {
                        $('#edit-admin-id').val(res.data.admin_id);
                        $('#edit-name-admin').val(res.data.adminName);
                        $('#edit-user-admin').val(res.data.adminUser);
                        $('#editModal').modal('show');
                    } else {
                        showModalAlert('danger', 'fail!');
                    }
                }
            });
        });

        $('#edit-form').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: '../controls/update_admin.php',
                data: formData,
                type: 'POST',
                processData: false, // Quan trọng để gửi file
                contentType: false, // Quan trọng để gửi file
                success: function(response) {
                    var res = JSON.parse(response);

                    showModalAlert(res.status, res.message);
                    if (res.status === 'success') {
                        showModalAlert(res.status, res.message);
                        $('#editModal').modal('hide'); // Ẩn modal sau khi lưu thành công
                        location.reload(); // Reload lại trang để cập nhật dữ liệu
                    }

                }
            })
        });

        $(document).on('click', '.delete-admin', function(e) {

            e.stopPropagation();

            const admin_id = $(this).data('id');

            const confirmDelete = confirm("Bạn có chắc chắn muốn xóa quản trị viên này?");
            if (!confirmDelete) return;

            $.ajax({
                url: '../controls/delete_admin.php',
                data: {
                    admin_id
                },
                method: 'GET',
                success: function(response) {
                    const res = JSON.parse(response);
                    showModalAlert(res.status, res.message);
                    if (res.status === 'success') {
                        showModalAlert(res.status, res.message);
                        location.reload();
                    }
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

            setTimeout(function() {
                $('#alert-admin .alert').alert('close');
            }, 3000);
        }

        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Nhập nội dung header tại đây...',
                height: 500,
                toolbar: [
                    ['style', ['style']],

                    // Font: in đậm, nghiêng, gạch chân, gạch ngang, chỉ số trên/dưới
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],

                    // Font name và cỡ chữ
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],

                    // Màu chữ và màu nền
                    ['color', ['color']],

                    // Danh sách và định dạng đoạn văn
                    ['para', ['ul', 'ol', 'paragraph']],

                    // Căn chỉnh
                    ['height', ['height']],
                    ['alignment', ['align']],

                    // Chèn nội dung
                    ['insert', ['link', 'picture', 'video', 'table', 'hr']],

                    // Xem code, fullscreen, undo/redo, dọn dẹp
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['misc', ['undo', 'redo']]
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Times New Roman', 'Helvetica', 'Impact'],
                fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '24', '28', '32', '36', '48']
            });
        });

        function showModal(types, message) {
            const alertHtml = `
                    <div class="alert alert-${types} alert-dismissible fade show pb-3" role="alert">
                        <strong>${message}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;

            $('#alert-noitification').html(alertHtml).slideDown();

            setTimeout(function() {
                $('#alert-noitification .alert').alert('close');
            }, 3000);
        }

        $('#change_pass_form').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: '../controls/change_password.php',
                method: 'POST',
                data: formData,
                processData: false, // Quan trọng để gửi file
                contentType: false, // Quan trọng để gửi file
                dataType: 'json',
                success: function(res) {
                    if (res.status === 'success') {
                        showModal(res.status, res.message);
                        $('#change_pass_form')[0].reset();
                        $('#checkPass').fadeOut(500);
                    } else {
                        showModal(res.status, res.message);
                    }
                }
            });
        });

        $(document).ready(function() {
            $('#adminPass').on('input', function() {
                const pass = $(this).val();
                if (pass.length <= 4) {
                    $('#checkPass').hide();
                    return;
                }

                $.ajax({
                    url: '../controls/change_password.php',
                    type: 'POST',
                    data: {
                        adminPass: pass,
                        admin_id: $('#admin_id').val()
                    },
                    dataType: 'json',
                    success: function(res) {
                        if (res.status === 'success') {
                            $('#checkPass')
                                .text('Password is correct!')
                                .removeClass('text-danger')
                                .addClass('text-success')
                                .show();

                        } else {
                            $('#checkPass')
                                .text(' Password is incorrect!')
                                .removeClass('text-success')
                                .addClass('text-danger')
                                .show();

                        }
                    }
                });
            });
        });

        $('#displayPass').on('change', function() {
            const type = this.checked ? 'text' : 'password';
            $('.toggle-password').attr('type', type);
        });

        $(document).ready(function() {
            $('#headerForm').on('submit', function(e) {
                e.preventDefault();

                const headerContent = $('#editHeader').summernote('code');

                if ($.trim($(headerContent).text()) === "") {
                    showAlert('Nội dung không được để trống.', 'warning');
                    return;
                }

                $('#saveStatus').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Đang lưu...</span></div>');

                $.ajax({
                    url: '../controls/save_header.php',
                    type: 'POST',
                    data: {
                        header: headerContent
                    },
                    dataType: 'json',
                    success: function(res) {
                        showAlert(res.message, res.status);
                    },
                    error: function(res) {
                        showAlert(res.message, res.status);
                    }
                });
            });

            $('#overviewContentForm').on('submit', function(e) {
                e.preventDefault();

                const overviewContentForm = $('#editOverviewContent').summernote('code');

                if ($.trim($(overviewContentForm).text()) === "") {
                    showAlert('Nội dung không được để trống.', 'warning');
                    return;
                }

                $('#saveStatus').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Đang lưu...</span></div>');

                $.ajax({
                    url: '../controls/save_overview_content.php',
                    type: 'POST',
                    data: {
                        overview_content: overviewContentForm
                    },
                    dataType: 'json',
                    success: function(res) {
                        showAlert(res.message, res.status);
                    },
                    error: function(res) {
                        showAlert(res.message, res.status);
                    }
                });
            });

            $('#goalForm').on('submit', function(e) {
                e.preventDefault();

                const goalForm = $('#editGoal').summernote('code');

                if ($.trim($(goalForm).text()) === "") {
                    showAlert('Nội dung không được để trống.', 'warning');
                    return;
                }

                $('#saveStatus').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Đang lưu...</span></div>');

                $.ajax({
                    url: '../controls/save_goal.php',
                    type: 'POST',
                    data: {
                        goal: goalForm
                    },
                    dataType: 'json',
                    success: function(res) {
                        showAlert(res.message, res.status);
                    },
                    error: function(res) {
                        showAlert(res.message, res.status);
                    }
                });
            });

            $('#speakersForm').on('submit', function(e) {
                e.preventDefault();

                const speakersForm = $('#editSpeakers').summernote('code');

                if ($.trim($(speakersForm).text()) === "") {
                    showAlert('Nội dung không được để trống.', 'warning');
                    return;
                }

                $('#saveStatus').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Đang lưu...</span></div>');

                $.ajax({
                    url: '../controls/save_speakers.php',
                    type: 'POST',
                    data: {
                        speakers: speakersForm
                    },
                    dataType: 'json',
                    success: function(res) {
                        showAlert(res.message, res.status);
                    },
                    error: function(res) {
                        showAlert(res.message, res.status);
                    }
                });
            });

            $('#venueForm').on('submit', function(e) {
                e.preventDefault();

                const venueForm = $('#editVenue').summernote('code');

                if ($.trim($(venueForm).text()) === "") {
                    showAlert('Nội dung không được để trống.', 'warning');
                    return;
                }

                $('#saveStatus').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Đang lưu...</span></div>');

                $.ajax({
                    url: '../controls/save_venue.php',
                    type: 'POST',
                    data: {
                        venue: venueForm
                    },
                    dataType: 'json',
                    success: function(res) {
                        showAlert(res.message, res.status);
                    },
                    error: function(res) {
                        showAlert(res.message, res.status);
                    }
                });
            });

            $('#scheduleForm').on('submit', function(e) {
                e.preventDefault();

                const scheduleForm = $('#editSchedule').summernote('code');

                if ($.trim($(scheduleForm).text()) === "") {
                    showAlert('Nội dung không được để trống.', 'warning');
                    return;
                }

                $('#saveStatus').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Đang lưu...</span></div>');

                $.ajax({
                    url: '../controls/save_schedule.php',
                    type: 'POST',
                    data: {
                        schedule: scheduleForm
                    },
                    dataType: 'json',
                    success: function(res) {
                        showAlert(res.message, res.status);
                    },
                    error: function(res) {
                        showAlert(res.message, res.status);
                    }
                });
            });

            function showAlert(message, type) {
                const alertBox = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                $('.saveStatus').html(alertBox);

                setTimeout(function() {
                    $('.alert').alert('close');
                }, 3000);
            }
        });

        $('#committeesForm').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: '../controls/save_committees.php',
                data: formData,
                type: 'POST',
                processData: false, // Quan trọng để gửi file
                contentType: false, // Quan trọng để gửi file
                success: function(response) {
                    const res = JSON.parse(response);

                    if (res.status === 'success') {
                        showModalAlert(res.status, res.message);
                    }
                }
            })
        });

        function showModalAlert(type, message) {
            const alertHtml = `
                    <div class="alert alert-${type} alert-dismissible fade show pb-3" role="alert">
                        <strong>${message}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;

            $('#alert-committee').html(alertHtml).show();

            setTimeout(function() {
                $('#alert-committee .alert').alert('close');
                location.reload(); // Reload lại trang để cập nhật dữ liệu
            }, 3000);
        }

        $(document).on('click', '.edit-member', function() {
            const id = $(this).data('id');

            // Gửi AJAX để lấy thông tin từ server
            $.getJSON('../controls/get_single_committee.php', {
                id: id
            }, function(data) {
                if (data.status === 'success') {
                    const member = data.data;

                    $('#edit_committees_id').val(member.committees_id);
                    $('#edit_name').val(member.name);
                    $('#edit_position').val(member.position);
                    $('#edit_committees_group').val(member.committees_group);
                    $('#edit_typeMember').val(member.typeMember);
                    $('#editCommitteeModal').modal('show');
                } else {
                    alert(data.message);
                }
            });
        });

        $('#editCommitteesForm').on('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            $.ajax({
                url: '../controls/edit_committees.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    const result = JSON.parse(res);
                    showModalAlert(res.status, res.message);
                    if (result.status === 'success') {
                        $('#editCommitteeModal').modal('hide');
                        location.reload();
                    }
                }
            });
        });

        $(document).on('click', '.delete-member', function() {
            if (confirm('Are you sure to delete this member?')) {
                const id = $(this).data('id');
                $.post('../controls/delete_committee.php', {
                    committees_id: id
                }, function(res) {
                    const result = JSON.parse(res);
                    showModalAlert(res.status, res.message);
                    if (result.status === 'success') location.reload();
                });
            }
        });

        function showModalAlert(type, message) {
            const alertHtml = `
                    <div class="alert alert-${type} alert-dismissible fade show pb-3" role="alert">
                        <strong>${message}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;

            $('#alert-edit-committee').html(alertHtml).show();

            setTimeout(function() {
                $('#alert-edit-committee .alert').alert('close');
                location.reload(); // Reload lại trang để cập nhật dữ liệu
            }, 3000);
        }

        $(document).ready(function() {
            // Hiển thị ảnh khi chọn file
            $("input[name='overview_img']").on("change", function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $("#previewImage").attr("src", e.target.result);
                        $("#previewBox").show();
                        updateImageSize(); // Gọi cập nhật size ngay
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Thay đổi width/height thì ảnh cũng thay đổi theo
            $("input[name='width'], input[name='height']").on("input", function() {
                updateImageSize();
            });

            function updateImageSize() {
                const width = $("input[name='width']").val();
                const height = $("input[name='height']").val();
                $("#previewImage").css({
                    width: width ? width + "px" : "auto",
                    height: height ? height + "px" : "auto"
                });
            }

            // Gửi form bằng AJAX
            $("#overviewImgForm").on("submit", function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                $.ajax({
                    url: "../controls/save_overview_img.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        try {
                            const response = JSON.parse(res);

                            const modal = new bootstrap.Modal(document.getElementById('successModal'));

                            if (response.status === "success") {
                                $("#successModal .modal-body").text(response.message);
                                $("#successModal .modal-content").removeClass("bg-danger").addClass("bg-success text-white");
                                modal.show();
                            } else {
                                $("#successModal .modal-body").text(response.message);
                                $("#successModal .modal-content").removeClass("bg-success").addClass("bg-danger text-white");
                                modal.show();
                            }

                            setTimeout(() => {
                                modal.hide();
                            }, 3000);
                        } catch (err) {
                            console.error("JSON parse error:", res);
                        }
                    },
                    error: function() {
                        const modal = new bootstrap.Modal(document.getElementById('successModal'));
                        $("#successModal .modal-body").text("AJAX request failed.");
                        $("#successModal .modal-content").removeClass("bg-success").addClass("bg-danger text-white");
                        modal.show();

                        setTimeout(() => {
                            modal.hide();
                        }, 3000);
                    }
                });
            });
        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });

        $('#changeBackground').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: '../controls/save_background.php',
                data: formData,
                type: 'POST',
                processData: false,
                contentType: false,
                success: function(response) {
                    const res = JSON.parse(response);

                    const modal = new bootstrap.Modal(document.getElementById('successModalBackground'));
                    $("#successModalBackground .modal-body")
                        .text(res.message);

                    if (res.status === "success") {

                        $("#successModalBackground .modal-content")
                            .removeClass("bg-danger")
                            .addClass("bg-success text-white");
                        modal.show();
                    } else {

                        $("#successModalBackground .modal-content")
                            .removeClass("bg-success")
                            .addClass("bg-danger text-white");
                        modal.show();
                    }

                    setTimeout(() => {
                        modal.hide();
                        location.reload();
                    }, 3000);
                },
                error: function(response) {
                    const res = JSON.parse(response);
                    const modal = new bootstrap.Modal(document.getElementById('successModalBackground'));
                    $("#successModalBackground .modal-body").text(res.message);
                    $("#successModalBackground .modal-content").removeClass("bg-success").addClass("bg-danger text-white");
                    modal.show();

                    setTimeout(() => {
                        modal.hide();
                        location.reload();
                    }, 3000);
                }
            })
        });

        $(document).on('click', '.choose-background', function() {
            const id = $(this).data('id');

            $.ajax({
                url: '../controls/choose_background.php',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res) {
                    try {
                        const response = JSON.parse(res);
                        const modal = new bootstrap.Modal(document.getElementById('successModalBackground'));

                        $("#successModalBackground .modal-body").text(response.message);
                        if (response.status === "success") {
                            $("#successModalBackground .modal-content")
                                .removeClass("bg-danger")
                                .addClass("bg-success text-white");
                        } else {
                            $("#successModalBackground .modal-content")
                                .removeClass("bg-success")
                                .addClass("bg-danger text-white");
                        }
                        modal.show();

                        setTimeout(() => {
                            modal.hide();

                            location.reload();
                        }, 3000);
                    } catch (err) {
                        console.error("JSON parse error:", res);
                    }
                },
                error: function() {
                    const modal = new bootstrap.Modal(document.getElementById('successModalBackground'));
                    $("#successModalBackground .modal-body").text("AJAX request failed.");
                    $("#successModalBackground .modal-content")
                        .removeClass("bg-success")
                        .addClass("bg-danger text-white");
                    modal.show();

                    setTimeout(() => {
                        modal.hide();
                    }, 3000);
                }
            });
        });

        $(document).on('click', '.delete-background', function() {
            const id = $(this).data('id');

            if (!confirm('Are you sure you want to delete this background?')) return;

            $.ajax({
                url: '../controls/delete_background.php',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res) {
                    try {
                        const response = JSON.parse(res);
                        const modal = new bootstrap.Modal(document.getElementById('successModalBackground'));

                        $("#successModalBackground .modal-body").text(response.message);
                        if (response.status === "success") {
                            $("#successModalBackground .modal-content").removeClass("bg-danger").addClass("bg-success text-white");
                        } else {
                            $("#successModalBackground .modal-content").removeClass("bg-success").addClass("bg-danger text-white");
                        }
                        modal.show();

                        setTimeout(() => {
                            modal.hide();
                            if (response.status === "success") location.reload();
                        }, 3000);
                    } catch (err) {
                        console.error("JSON parse error:", res);
                    }
                },
                error: function() {
                    alert('AJAX request failed.');
                }
            });
        });

        $('#changeLogoForm').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: '../controls/save_logo.php',
                data: formData,
                type: 'POST',
                processData: false,
                contentType: false,
                success: function(response) {
                    try {
                        const res = JSON.parse(response);

                        const modal = new bootstrap.Modal(document.getElementById('successModalLogo'));
                        $("#successModalLogo .modal-body")
                            .text(res.message);

                        if (res.status === "success") {
                            $("#successModalLogo .modal-content")
                                .removeClass("bg-danger")
                                .addClass("bg-success text-white");
                            modal.show();
                        } else {
                            $("#successModalLogo .modal-content")
                                .removeClass("bg-success")
                                .addClass("bg-danger text-white");
                            modal.show();
                        }

                        setTimeout(() => {
                            modal.hide();
                        }, 3000);

                    } catch (err) {
                        console.error("JSON parse error:", res);
                    }
                },
                error: function() {
                    const modal = new bootstrap.Modal(document.getElementById('successModalLogo'));
                    $("#successModalLogo .modal-body")
                        .text("AJAX request failed.");
                    $("#successModalLogo .modal-content")
                        .removeClass("bg-success")
                        .addClass("bg-danger text-white");
                    modal.show();

                    setTimeout(() => {
                        modal.hide();
                    }, 3000);
                }
            })
        });

        $(document).on('click', '.choose-logo', function() {
            const id = $(this).data('id');

            $.ajax({
                url: '../controls/choose_logo.php',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res) {
                    try {
                        const response = JSON.parse(res);
                        const modal = new bootstrap.Modal(document.getElementById('successModalLogo'));

                        $("#successModalLogo .modal-body")
                            .text(response.message);

                        if (response.status === "success") {
                            $("#successModalLogo .modal-content")
                                .removeClass("bg-danger")
                                .addClass("bg-success text-white");
                        } else {
                            $("#successModalLogo .modal-content")
                                .removeClass("bg-success")
                                .addClass("bg-danger text-white");
                        }
                        modal.show();

                        setTimeout(() => {
                            modal.hide();

                            location.reload();
                        }, 3000);
                    } catch (err) {
                        console.error("JSON parse error:", res);
                    }
                },
                error: function() {
                    const modal = new bootstrap.Modal(document.getElementById('successModalLogo'));
                    $("#successModalLogo .modal-body").text("AJAX request failed.");
                    $("#successModalLogo .modal-content")
                        .removeClass("bg-success")
                        .addClass("bg-danger text-white");
                    modal.show();

                    setTimeout(() => {
                        modal.hide();
                    }, 3000);
                }
            });
        });

        $(document).on('click', '.delete-logo', function() {
            const id = $(this).data('id');

            if (!confirm('Are you sure you want to delete this logo?')) return;

            $.ajax({
                url: '../controls/delete_logo.php',
                method: 'POST',
                data: {
                    id: id
                },
                success: function(res) {
                    try {
                        const response = JSON.parse(res);
                        const modal = new bootstrap.Modal(document.getElementById('successModalLogo'));

                        $("#successModalLogo .modal-body").text(response.message);
                        if (response.status === "success") {
                            $("#successModalLogo .modal-content").removeClass("bg-danger").addClass("bg-success text-white");
                        } else {
                            $("#successModalLogo .modal-content").removeClass("bg-success").addClass("bg-danger text-white");
                        }
                        modal.show();

                        setTimeout(() => {
                            modal.hide();
                            if (response.status === "success") location.reload();
                        }, 3000);
                    } catch (err) {
                        console.error("JSON parse error:", res);
                    }
                },
                error: function() {
                    alert('AJAX request failed.');
                }
            });
        });

        $(document).on('click', '.accept-btn', function() {
            const row = $(this).closest('tr');
            const id = row.data('id');

            $.ajax({
                url: '../controls/set_request.php',
                type: 'POST',
                data: {
                    action: 'accept',
                    id: id
                },
                dataType: 'json',
                success: function(res) {

                    const modal = new bootstrap.Modal(document.getElementById('modalCheckRegister'));
                    $("#modalCheckRegister .modal-body").text(res.message);
                    if (res.status === 'success') {
                        row.remove();

                        $("#modalCheckRegister .modal-content").removeClass("bg-danger").addClass("bg-success text-white");

                    } else {
                        $("#modalCheckRegister .modal-content").removeClass("bg-success").addClass("bg-danger text-white");
                    }
                    modal.show();

                    setTimeout(() => {
                        modal.hide();
                        // if (res.status === "success") location.reload();
                    }, 3000);
                }
            });
        });

        $(document).on('click', '.delete-btn', function() {
            const row = $(this).closest('tr');
            const id = row.data('id');

            if (!confirm('Are you sure you want to delete this entry?')) return;

            $.ajax({
                url: '../controls/set_request.php',
                type: 'POST',
                data: {
                    action: 'delete',
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    const modal = new bootstrap.Modal(document.getElementById('modalCheckRegister'));
                    $("#modalCheckRegister .modal-body").text(res.message);
                    if (res.status === 'success') {
                        row.remove();

                        $("#modalCheckRegister .modal-content").removeClass("bg-danger").addClass("bg-success text-white");

                    } else {
                        $("#modalCheckRegister .modal-content").removeClass("bg-success").addClass("bg-danger text-white");
                    }
                    modal.show();

                    setTimeout(() => {
                        modal.hide();
                        // if (res.status === "success") location.reload();
                    }, 3000);
                }
            });
        });

        function showAlert(type, message) {
            const alertHtml = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`;
            $('#admin-alert').html(alertHtml);
            setTimeout(() => {
                $('#admin-alert .alert').alert('close');
            }, 3000);
        }
    </script>
</body>

</html>