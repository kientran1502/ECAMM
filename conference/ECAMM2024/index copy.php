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
</head>

<body data-bs-spy="scroll" data-bs-target="#site-nav" data-bs-offset="100" tabindex="0">
    <nav id="site-nav" class="navbar navbar-expand-lg navbar-dark fixed-top pt-4">
        <div class="container d-flex">
            <a class="navbar-brand" href="https://mscskeylab.hus.vnu.edu.vn/" target="_blank">
                <img id="logo" class="rounded-circle me-2" height="45px" src="../../wp-content/uploads/2018/09/Logo.png" alt="Logo">
                <span id="sologen" class="">MSCS KEYLAB</span>

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


                    <figure>
                        <img class="img-responsive" height=400 alt="" src="../../wp-content/uploads/2024/02/6vw1_resid_113_retake.png">
                    </figure>

                </div><!-- /.col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


    <section id="goal" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h3 class="section-title multiple-title">Our goals</h3>
                    <div id="goalContent">

                    </div>

                </div><!-- /.col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- section id="facts" class="section bg-image-1 facts text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <i class="ion-ios-calendar"></i>
                    <h3>2024<br>October 14-16</h3>

                </div>
                <div class="col-sm-3">

                    <i class="ion-ios-location"></i>
                    <h3>Hanoi<br>Vietnam</h3>

                </div>
                <div class="col-sm-3">

                    <i class="ion-pricetags"></i>
                    <h3>100<br>Participants</h3>

                </div>
                <div class="col-sm-3">

                    <i class="ion-speakerphone"></i>
                    <h3>20<br>Speakers</h3>

                </div>
            </div>
        </div>
    </section-->

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

            <div class="row">
                <div class="col-md-12">

                    <h5 class="section-title">1. Scientific Committee</h5>

                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="speaker">

                        <figure class="mb-2">
                            <img height=250 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/PCarloni.png">
                        </figure>

                        <h5>Paolo Carloni</h5>

                        <p>Professor <br>Forschungszentrum Jülich &amp; RWTH Aachen University, Germany
                        </p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-3">
                    <div class="speaker">

                        <figure class="mb-2">
                            <img height=250 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/NguyenTheToan.png">
                        </figure>

                        <h5>Toan T. Nguyen</h5>

                        <p>Professor<br>University of Science, Vietnam National University</p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-3">
                    <div class="speaker">

                        <figure class="mb-2">
                            <img height=250 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/NguyenManhDuc.png">
                        </figure>

                        <h5>Nguyen Manh Duc</h5>

                        <p>Professor<br>Culham Centre for Fusion Energy, United Kingdom</p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-3">
                    <div class="speaker">

                        <figure class="mb-2">
                            <img height=250 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/li.jpg">
                        </figure>

                        <h5>Mai Suan Ly</h5>

                        <p>Professor<br>Institute of Physics, Poland</p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">

                    <h5 class="section-title">2. Secretariat</h5>

                </div>
            </div>

            <div class="row">
                <div class="col-md-3">

                    <div class="speaker">

                        <figure class="mb-2">
                            <img height=250 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/Annachiara.png">
                        </figure>

                        <h5>Annachiara Berra-Krichel</h5>

                        <p>Forschungszentrum Jülich</p>

                    </div>
                </div>
                <div class="col-md-3">

                    <div class="speaker">

                        <figure class="mb-2">
                            <img height=250 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/094.jpg">
                        </figure>

                        <h5>DO Thi Ngoc</h5>

                        <p>University of Science, Vietnam National University</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Registration</h3>
                </div>
            </div>

            <form id="registration-form" method="POST">
                <div class="row">

                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3 border-rounded " placeholder="First Name" id="fname" name="fname"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-3 border-rounded " placeholder="Last Name" id="lname" name="lname"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control mb-3 border-rounded " placeholder="Email" id="email" name="email"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-3 border-rounded " placeholder="Phone" id="cell" name="cell" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3 border-rounded " placeholder="Affiliation" id="affiliation"
                                name="affiliation" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-3 border-rounded " placeholder="Address" id="address" name="address"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-3 border-rounded " placeholder="Zip Code" id="zip" name="zip" required>
                        </div>

                    </div>
                </div>
                <div class="text-center mt20">
                    <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </section> -->

    <!-- <section id="abstract" class="section bg-image-1 contribution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase mt0 font-400">Abstract Submission</h3>

                    <p>
                        Note that the participant who submits the abstract must be the presenter of the abstract at the
                        conference/workshop.
                        <br>
                        The deadline for abstract submission is 30 September 2024.
                        <br>
                        Please contact our Secretariat for any problem.
                    </p>
                    <p>
                        POSTER: Please prepare your poster as one page of size A0 (841 mm x 1189 mm) in portrait
                        (vertical) mode.
                        <br>
                        ORAL PRESENTATION: Please prepare your talk for a duration of 25 min including time for
                        discussion.
                        <br>
                        INVITED TALK: Please prepare your talk for a duration of 40 min including time for discussion.
                    </p>

                    <a class="btn btn-white" href="#">Submit abstract</a>
                </div>
            </div>
        </div>
    </section> -->

    <section id="schedule" class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Schedule</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4>Monday, October 14th (Room 418, Building T1)</h4>
                </div>
                <div class="col-sm-3">
                    08:00-08:30
                </div>
                <div class="col-sm-9">
                    Shuttle from Hanoi Tirant Hotel to VNU University of Science
                </div>
                <div class="col-sm-3">
                    08:45-09:00
                </div>
                <div class="col-sm-9">
                    Welcome and Introduction to the KeyLAB
                </div>
                <div class="col-sm-3">
                    <strong>Section 1:</strong>
                </div>
                <div class="col-sm-9">
                    <strong>Chair: Prof. Paolo Carloni</strong>
                </div>
                <div class="col-sm-3">
                    09:00-09:45
                </div>
                <div class="col-sm-9">
                    <strong>Paolo Carloni</strong><br>
                    Forschungszentrüm Jülich (Germany)<br>
                    <em>Multi-scale simulations of membrane proteins</em>
                </div>
                <div class="col-sm-3">
                    09:45-10:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Ellinor Haglund</strong><br>
                    University of Hawai‘i at Mānoa (USA)<br>
                    <em>Pierced Lasso Topologies: Folding, Function, and Therapeutics Potential</em>
                </div>
                <div class="col-sm-3">
                    10:30-11:00<br>
                </div>
                <div class="col-sm-9">
                    Coffee break<br>
                </div>
                <div class="col-sm-3">
                    11:00-11:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Giulia Rossetti</strong><br>
                    Forschungszentrüm Jülich (Germany)<br>
                    <em>Understanding the role of membrane in protein assembly and pharmacology</em>
                </div>
                <div class="col-sm-3">
                    11:45-12:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Giuseppe Legname</strong><br>
                    SISSA/ISAS, Trieste (Italy)</br>
                    <em>A novel mechanism of protein aggregates clearance in neurodegenerative diseases</em>
                </div>
                <div class="col-sm-3">
                    12:30-14:00<br>
                </div>
                <div class="col-sm-9">
                    Lunch<br>
                </div>
                <div class="col-sm-3">
                    <strong>Section 2:</strong><br>
                </div>
                <div class="col-sm-9">
                    <strong>Chair: Prof. Paolo Carloni</strong><br>
                </div>
                <div class="col-sm-3">
                    14:00-14:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Riccardo Capelli</strong><br>
                    University of Milan (Italy)<br>
                    <em>A Structure-based approach to protein-ligand binding thermodynamics and kinetics</em>
                </div>
                <div class="col-sm-3">
                    14:45-15:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Alejandro Giorgetti</strong><br>
                    University of Verona (Italy)<br>
                    <em>Enhancing Disease and Drug Models through Structural Systems Biology</em>
                </div>
                <div class="col-sm-3">
                    15:30-16:00<br>
                </div>
                <div class="col-sm-9">
                    Coffee Break<br>
                </div>
                <div class="col-sm-3">
                    16:00-16:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Jer-Lai Kuo</strong><br>
                    Academia Sinica (Taiwan)<br>
                    <em>Efficient first-principles exploration on the physical and chemical space of peptides and saccharides enabled by neural network potentials</em>
                </div>
                <div class="col-sm-3">
                    16:45-17:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Tran Phuoc Duy</strong><br>
                    Tokio Insitute of Technology (Japan)<br>
                    <em>Signal Transduction in G-protein Coupled Receptors Class A and Class C</em>
                </div>
                <div class="col-sm-3">
                    17:30-18:15<br>
                </div>
                <div class="col-sm-9">
                    <strong>Giorgio Colombo</strong><br>
                    University of Pavia (Italy)<br>
                    <em>Dynamics and Energy in Protein Recognition and Functional Mechanisms</em>
                </div>
                <div class="col-sm-3">
                    19:00-20:30<br>
                </div>
                <div class="col-sm-9">
                    Welcome Dinner (by invitations, location TBA) <br>
                </div>
                <div class="col-sm-3">
                    20:30-21:00
                </div>
                <div class="col-sm-9">
                    Shuttle from Restaurant to Hanoi Tirant Hotel
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4>Tuesday, October 15th (Room 401, Building T1)</h4>
                </div>
                <div class="col-sm-3">
                    08:15-08:45
                </div>
                <div class="col-sm-9">
                    Shuttle from Hanoi Tirant Hotel to VNU University of Science
                </div>
                <div class="col-sm-3">
                    <strong>Section 3:</strong><br>
                </div>
                <div class="col-sm-9">
                    <strong>Chair: Prof. Toan Nguyen</strong><br>
                </div>
                <div class="col-sm-3">
                    09:00-09:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Vincenzo Carnevale</strong><br>
                    Temple University, Philadelphia (USA)<br>
                    <em>TBA</em>
                </div>
                <div class="col-sm-3">
                    09:45-10:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Mai Ngoc Xuan Dat</strong><br>
                    Center for Innovative Materials and Architectures, Ho Chi Minh City, Vietnam<br>
                    <em>Design and Modification of Porous Nanomaterials as Drug Carriers in Cancer Therapy</em>
                </div>
                <div class="col-sm-3">
                    10:30-11:00<br>
                </div>
                <div class="col-sm-9">
                    Coffee break<br>
                </div>
                <div class="col-sm-3">
                    11:00-11:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Emiliano Ippoliti</strong><br>
                    Forschungszentrüm Jülich (Germany)<br>
                    <em>Exploring new technologies for Molecular Dynamics</em>
                </div>
                <div class="col-sm-3">
                    11:45-12:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Phuong Nguyen</strong><br>
                    Institute de Biologie Physico-Chimique, Paris (France)<br>
                    <em>TBA</em>
                </div>
                <div class="col-sm-3">
                    12:30-14:00<br>
                </div>
                <div class="col-sm-9">
                    Lunch<br>
                </div>
                <div class="col-sm-3">
                    <strong>Section 4:</strong><br>
                </div>
                <div class="col-sm-9">
                    <strong>Chair: Prof. Duc Nguyen</strong><br>
                </div>
                <div class="col-sm-3">
                    14:00-14:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Francesco Musiani</strong><br>
                    University of Bologna (Italy)<br>
                    <em>Nickel trafficking in urease activation: latest results</em>
                    <!-- <em>Studies of the effect of certain pathogenic variants causing lever causing hereditary optic neuropathy  on respiratory complex function and inhibition</em> -->
                </div>
                <div class="col-sm-3">
                    14:45-15:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Ke Zuo</strong><br>
                    Chongqing University of Arts and Sciences, Chongqing (China)<br>
                    <em>NEET proteins: from electronic properties to drug design</em>
                </div>
                <div class="col-sm-3">
                    15:30-16:15<br>
                </div>
                <div class="col-sm-9">
                    <strong>Adam Sieradzan</strong><br>
                    University of Gdańsk (Poland)<br>
                    <em>The unified coarse-grained model</em>
                </div>
                <div class="col-sm-3">
                    16:15-16:45<br>
                </div>
                <div class="col-sm-9">
                    Coffee Break<br>
                </div>
                <div class="col-sm-3">
                    16:45-17:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Francesca Spyrakis</strong><br>
                    University of Turin (Italy)<br>
                    <em>Design of novel NLRP3 allosteric inhibitors to fight neuroinflammation and neurodegeneration</em>
                </div>
                <div class="col-sm-3">
                    17:30-18:15<br>
                </div>
                <div class="col-sm-9">
                    <strong>Shozeb Haider</strong><br>
                    University College London (UK)<br>
                    <!-- em>Enhanced Sampling of class A Beta-lactamases</em -->
                    <em>Non-Equilibrium Dynamics of SOAT enzymes</em>
                </div>
                <div class="col-sm-3">
                    18:45-20:30<br>
                </div>
                <div class="col-sm-9">
                    Gala Dinner (HUS Canteen, VNU University of Science)
                </div>
                <div class="col-sm-3">
                    20:30-21:00
                </div>
                <div class="col-sm-9">
                    Shuttle from VNU University of Science to Hanoi Tirant Hotel
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4>Wednesday, October 16th (Room 418, Building T1)</h4>
                </div>
                <div class="col-sm-3">
                    08:15-08:45
                </div>
                <div class="col-sm-9">
                    Shuttle from Hanoi Tirant Hotel to VNU University of Science
                </div>
                <div class="col-sm-3">
                    <strong>Section 5:</strong><br>
                </div>
                <div class="col-sm-9">
                    <strong>Chair: Prof. Francesca Spyrakis</strong><br>
                </div>
                <div class="col-sm-3">
                    09:00-09:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Toan The Nguyen</strong><br>
                    VNU University of Science , Hanoi (Vietnam)<br>
                    <em>Machine learning approaches to computational biophysics and biomedicine at the Key Laboratory for Multiscale simulation of Complex Systems</em>
                </div>
                <div class="col-sm-3">
                    09:45-10:30<br>
                </div>
                <div class="col-sm-9">
                    <strong>Ran Friedman</strong><br>
                    Linnaeus University, Kalmar (Sweden)<br>
                    <em>Computer simulations to understand drug resistance in cancer</em>
                </div>
                <div class="col-sm-3">
                    10:30-10:45<br>
                </div>
                <div class="col-sm-9">
                    <strong>Ivy Vo</strong><br>
                    University of Hawai‘i at Mānoa (USA)<br>
                    <em>Enzymatic wound care revolution: Engineering SOD variants for rapid skin restoration</em>
                </div>
                <div class="col-sm-3">
                    10:45-11:00<br>
                </div>
                <div class="col-sm-9">
                    <strong>Paolo Carloni</strong><br>
                    Forschungszentrüm Jülich (Germany)<br>
                    <em>Concluding remakrs</em>
                </div>
            </div>
        </div>
    </section>


    <section id="location" class="section location">
        <div class="container">
            <div class="row">
                <h3 class="section-title">Venue</h3>
                <div class="col-sm-6">
                    <address id="venueContent">
                        <p>University of Science, Vietnam National University - Hanoi
                            <br>334 Nguyen Trai Street, Thuong Dinh, Thanh Xuan, Hanoi, Vietnam
                            <br>Phone: (+84) 243 858 4615
                            <br>Email:
                        </p>
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
                }, 3000);
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
        }

        loadHeader();

        setInterval(loadHeader, 4000);
    </script>
</body>



</html>