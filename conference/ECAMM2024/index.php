<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ECAMM-2024</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .scheduleContent table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }

        .scheduleContent th,
        .scheduleContent td {
            border: none !important;
        }

        .scheduleContent td {
            padding-right: 5rem;
        }

        .scheduleContent table tr>td:first-child {
            width: 20%;
        }

        .scheduleContent table tr>td:nth-child(2) {
            width: 80%;
        }

        @media (max-width: 768px) {
            #navbar-items{
                background-color: black;
                padding: 1.5rem;
                opacity: 0.8;
            }
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#site-nav" data-bs-offset="100" tabindex="0">
    <nav id="site-nav" class="navbar navbar-expand-lg navbar-dark fixed-top pt-4">
        <div class="container d-flex">
            <a class="navbar-brand d-flex align-items-center" href="https://mscskeylab.hus.vnu.edu.vn/" target="_blank">
                <div id="logoHeader"></div>
                <span id="sologen" class="align-items-center d-flex">MSCS KEYLAB</span>
            </a>

            <!-- Nút toggle mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items"
                aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbar-items">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white me-2" href="#about">OVERVIEW</a></li>
                    <li class="nav-item"><a class="nav-link text-white me-2" href="#goal">GOAL</a></li>
                    <li class="nav-item"><a class="nav-link text-white me-2" href="#speakers">SPEAKERS</a></li>
                    <li class="nav-item"><a class="nav-link text-white me-2" href="#committees">COMMITTEES</a></li>
                    <li class="nav-item"><a class="nav-link text-white me-2" href="#schedule">SCHEDULE</a></li>
                    <li class="nav-item"><a class="nav-link text-white me-2" href="#location">VENUE</a></li>
                    <li class="nav-item"><a class="nav-link text-white me-2" href="#" data-bs-toggle="modal" data-bs-target="#myModal">REGISTRATION</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../../admin/login.php" target="_blank">ADMIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel">Registration form</h1>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registration-form" method="POST" name="registration-form">
                        <div class="row mb-3">

                            <div class="col-md-12" id="registration-msg" style="display:none;">
                                <div class="alert"></div>
                            </div>

                            <div class="col-md-6 col-sm-12">

                                <div class="mb-3">
                                    <label for="fname" class="form-label">Your Full Name:</label>
                                    <input type="text" class="form-control rounded" placeholder="Enter Your Name" id="fname" name="fname" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control rounded" placeholder="Enter Email" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="cell" class="form-label">Phone:</label>
                                    <input type="text" class="form-control rounded" placeholder="Enter Phone" id="cell" name="cell" required>
                                </div>

                                <input type="hidden" class="form-control rounded" name="is_register">

                            </div>

                            <div class="col-md-6 col-sm-12">

                                <div class="mb-3">
                                    <label for="affiliation" class="form-label">Affiliation:</label>
                                    <input type="text" class="form-control rounded" placeholder="Enter Affiliation" id="affiliation" name="affiliation" required>
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address:</label>
                                    <input type="text" class="form-control rounded" placeholder="Enter Address" id="address" name="address" required>
                                </div>

                                <div class="mb-3">
                                    <label for="zip" class="form-label">Zip code:</label>
                                    <input type="text" class="form-control rounded" placeholder="Enter Zip Code" id="zip" name="zip" required>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="mx-auto pt-3">
                                <button type="button" class="btn btn-danger rounded me-2 px-4" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit-register" class="btn btn-secondary rounded px-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <header id="site-header" class="site-header valign-center">

        <div id="backgroundHeader">

        </div>

        <div class="intro" id="headerContent">

        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h3 class="section-title">Overview</h3>
                    <div id="overviewContent">
                    </div>

                    <figure id="overviewImage">
                    </figure>

                </div>
            </div>
        </div>
    </section>


    <section id="goal" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h3 class="section-title multiple-title">Our goals</h3>
                    <div id="goalContent">

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="speakers" class="section speakers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="section-title">Speakers</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="speakersContent">

                </div>
            </div>
        </div>
    </section>

    <section id="committees" class="section speakers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="section-title">Committees</h3>

                </div>
            </div>

            <div class="" id="committeesContent">

            </div>
        </div>
    </section>

    <section id="schedule" class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Schedule</h3>
                </div>
            </div>
            <div class="scheduleContent" id="scheduleContent">

            </div>
        </div>
    </section>

    <section id="location" class="section location">
        <div class="container">
            <div class="row">
                <h3 class="section-title">Venue</h3>
                <div class="col-sm-6">
                    <address id="venueContent">

                    </address>
                </div>
                <div class="col-sm-6">
                    <div class="shadow p-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.4535766004626!2d105.8068833!3d20.9963586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puLCDEkOG6oWkgaOG7jWMgUXXhu5FjIGdpYSBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1747502617837!5m2!1svi!2s" class="w-100 h-100 p-3" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <button id="backToTop" class="btn-top bg-primary">
        <img src="assets/images/icons/chevron-up.svg" alt="">
    </button>


    <!-- nơi hiển thị danh sách những người đã đăng ký -->
    <button id="listBtn" class="btn btn-primary rounded list-register" data-bs-toggle="modal" data-bs-target="#listModal">
        Danh sách
    </button>

    <!-- Modal -->
    <div class="modal fade" id="listModal" tabindex="-1" aria-labelledby="listModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-4" id="listModalLabel">Danh sách những người đăng ký</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Affiliation</th>
                                    <th>Address</th>
                                    <th>Zip Code</th>
                                </tr>
                            </thead>
                            <tbody id="dataBody">
                                <!-- dữ liệu sẽ hiện ở đây -->
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info"><strong>The VNU Key Laboratory for Multiscale Simulation of Complex
                            Systems</strong></p>
                    <p class="site-info">University of Science, Vietnam National University</p>
                    <p class="site-info">334 Nguyen Trai street, Thanh Xuan district, Hanoi, Vietnam</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            //sử lý form post data
            $('#registration-form').on('submit', function(e) {
                e.preventDefault();
                const formData = $(this).serializeArray();
                $.ajax({
                    url: '../../controls/submit_register.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        const res = JSON.parse(response);
                        showModalAlert(res.status, res.message);

                        if (res.status === 'success') {
                            $('#registration-form')[0].reset();
                        }
                    },
                    error: function() {
                        showModalAlert('danger', 'Có lỗi xảy ra. Vui lòng thử lại.');
                    }
                });
            });

            $('#listBtn').on('click', function() {
                $.ajax({
                    url: '../../controls/get_list.php',
                    type: 'GET',
                    success: function(data) {
                        $('#dataBody').html(data);
                    },
                    error: function() {
                        $('#dataBody').html('<tr><td colspan="7">Không thể tải dữ liệu.</td></tr>');
                    }
                });
            });

            function showModalAlert(type, message) {
                const alertHtml = `
                    <div class="alert alert-${type} alert-dismissible fade show pb-3" role="alert">
                        <strong>${message}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;

                $('#registration-msg').html(alertHtml).slideDown();

                setTimeout(function() {
                    $('#registration-msg .alert').alert('close');
                }, 1000);
            }

        });

        function loadHeader() {
            $.ajax({
                url: "../../controls/get_header.php",
                method: "GET",
                success: function(data) {
                    $('#headerContent').html(data);
                }
            });

            $.ajax({
                url: "../../controls/get_overview_content.php",
                method: "GET",
                success: function(data) {
                    $('#overviewContent').html(data);
                }
            });

            $.ajax({
                url: "../../controls/get_goal.php",
                method: "GET",
                success: function(data) {
                    $('#goalContent').html(data);
                }
            });

            $.ajax({
                url: "../../controls/get_speakers.php",
                method: "GET",
                success: function(data) {
                    $('#speakersContent').html(data);
                }
            });

            $.ajax({
                url: "../../controls/get_venue.php",
                method: "GET",
                success: function(data) {
                    $('#venueContent').html(data);
                }
            });

            $.ajax({
                url: "../../controls/get_schedule.php",
                method: "GET",
                success: function(data) {
                    $('#scheduleContent').html(data);
                }
            });

            $.ajax({
                url: '../../controls/get_committees.php',
                method: 'GET',
                success: function(data) {
                    $('#committeesContent').html(data);
                }
            });

            $.ajax({
                url: '../../controls/get_overview_img.php',
                method: 'GET',
                success: function(data) {
                    $('#overviewImage').html(data);
                }
            });

            $.ajax({
                url: "../../controls/get_background.php",
                method: "GET",
                success: function(data) {
                    $('#backgroundHeader').html(data);
                }
            });

            $.ajax({
                url: "../../controls/get_logo.php",
                method: "GET",
                success: function(data) {
                    $('#logoHeader').html(data);
                }
            });
        }

        loadHeader();

        setInterval(loadHeader, 5000);  
    </script>
</body>



</html>