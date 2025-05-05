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
    <!-- <style>
        /* Modal nền mờ */
        .modal {
            display: block;
            /* Ẩn ban đầu */
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            /* nền đen trong suốt */
        }

        /* Modal nội dung */
        .modal-content {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            margin: 15% auto;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            padding: 0 20px;
        }

        .modal .modal-container {
            width: 50%;
            height: 100%;
            margin: 0 auto;
        }

        /* Nút close */
        .close-btn {
            margin-top: 20px;
            padding: 8px 16px;
            background-color: rgb(54, 51, 52);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .close-btn:hover {
            background-color: #343a40;
        }

        /* Nút mở modal */
        .open-btn {
            padding: 10px 20px;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style> -->
</head>

<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="https://mscskeylab.hus.vnu.edu.vn/">
                        <!-- logo image  -->
                        <img height=36 src="../../wp-content/uploads/2018/09/Logo.png" alt="Logo">
                        MSCS KeyLAB
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">
                    <!-- navigation menu -->
                    <li><a data-scroll href="#about">Overview</a></li>
                    <li><a data-scroll href="#goal">Goal</a></li>
                    <li><a data-scroll href="#speakers">Speakers</a></li>
                    <li><a data-scroll href="#committees">Committees</a></li>
                    <!-- li><a data-scroll href="#abstract">Abstract</a></li -->
                    <li><a data-scroll href="#schedule">Schedule</a></li>
                    <li><a data-scroll href="#location">Venue</a></li>

                    <li><a href="#" data-toggle="modal" data-target="#myModal">
                            Open Modal
                        </a></li>
                </ul>

            </div>
        </div><!-- /.container -->
    </nav>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Header của modal -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Title</h4>
      </div>
      
      <!-- Nội dung modal -->
      <div class="modal-body">
        <p>This is the body of the modal.</p>
      </div>
      
      <!-- Footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <header id="site-header" class="site-header valign-center">
        <div class="intro">

            <h2>October 14<sup>th</sup>-16<sup>th</sup>, 2024</h2>
            <br>
            <br>
            <h2>The 4<sup>th</sup> KeyLAB international conference</h2>
            <h1>Experimental and Computational approaches in Molecular Medicine</h1>
            <h1>(ECAMM-2024)</h1>
            <br>
            <p>VNU Key Laboratory for Multiscale Simulation of Complex Systems</p>
            <p>University of Science, Vietnam National University - Hanoi</p>
            <!--            <br>
            <a class="btn btn-white" data-scroll href="#registration">Register Now</a>
            <br>
            <p>Online registration for the conference is open from 1 April 2024 to 30 August 2024</p>
	    <p>Abstract submission deadline is 30 September 2024</p>
-->

        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h3 class="section-title">Overview</h3>
                    <p>
                        The 4th conference on <i>Experimental and computational approaches in Molecular Medicine</i>
                        (ECAMM-2024)
                        will be held from 14th to 16th October 2024 in Hanoi, Vietnam.
                    </p>
                    <p>
                        The ECAMM-2024 is organized by the VNU Key Laboratory for Multiscale Simulation of Complex
                        Systems.
                        It is sponsored by the VNU University of Science and
                        the Institute for Computational Biomedicine (INM-9/IAS-5), Forschungszentrum Jülich GmbH.
                    </p>
                    <p>
                        The ECAMM has been a biannual activity of the Key Laboratory since 2016.
                        The ECAMM is aimed to be an international conference for scientists in Vietnam, in the region
                        and worldwide.
                        Our mission is to foster scientific exchanges and to promote a high-standard level of research
                        and education in Vietnam and foreign experts
                        in the field of molecular medicine.
                    </p>
                    <p>
                        The conference will cover topics of theoretical, computational, and experimental
                        multidisciplinary science in the following fields:
                    <ul>
                        <li>Novel drug design strategies</li>
                        <li>Neuromedicine</li>
                        <li>Cancer research</li>
                        <li>Viral diseases</li>
                        <li>Materials Informatics in life science</li>
                        <li>Machine learning in molecular science</li>
                    </ul>
                    </p>
                    <p>
                        We are looking forward to welcoming you at the conference.
                    </p>
                    <p>
                        The Organizing Committee.
                    </p>

                    <figure>
                        <img class="img-responsive" height=400 alt=""
                            src="../../wp-content/uploads/2024/02/6vw1_resid_113_retake.png">
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

                    <p>
                        Computational biomedicine is at its infancy in Vietnam,
                        yet top Vietnamese theoretical physicists, chemists, computer scientists can greatly contribute
                        to
                        the development of powerful tools for contributing in solving relevant problems
                        for the human health.
                    </p>
                    <p>
                        The KeyLab for Multiscale Simulations of Complex Systems offers a unique chance to do
                        outstanding research in neuromedicine,
                        with unique perspectives of a high level career in science.
                        The research is strongly interdisciplinary, with colleagues from Germany (IAS-5/INM-9 at
                        Forschungzentrum Jülich)
                        and UK (Culham Center for Fusion Energy at Abingdon) bringing in their expertise to the
                        projects.
                        Students and postdocs exchanges with Juelich will further foster the collaborations.
                    </p>
                    <p>
                        In this context, the biannual ECAMM meeting aims to offer a platform for scientists to present
                        their research results,
                        learn new methods, exchange ideas, make network and cooperate … in a stimulating and friendly
                        environment.
                    </p>
                    <p>
                        The ECAMM covers different topics of molecular medicine, materials and life sciences …
                        encompasing theoretical, computational and experimental oriented research.
                    </p>
                    <p>
                        Previous ECAMM conferences organized by the KeyLAB:
                    <ul class="list-arrow-right">
                        <li>
                            September 22nd - 29th, 2019. The 3<sup>rd</sup> KeyLAB international conference:
                            the "<strong>Second training course and international workshop on multiscale biophysics
                                computations</strong>", Hanoi, Vietnam.
                        </li>
                        <li>
                            June 27th - 29th, 2018. The 2<sup>nd</sup> KeyLAB international conference:
                            "<strong>Recent Computational and Experimental advances in Molecular Medicine</strong>",
                            organized as a self-contained section in collaboration with the BME7 conference, Ho Chi
                            Minh City, Vietnam.
                        </li>
                        <li>
                            June 30th - July 01st, 2016. The 1<sup>st</sup> KeyLAB international conference:
                            The "<strong>2016 International Workshop and Summer school in Physics – Biology –
                                Pharmacy: Molecular Dynamics in Drug Design</strong>", Hanoi, Vietnam.
                            The conferene is one of several scientific activities to inaugurate the establishment of
                            the MSCS KeyLAB.
                        </li>
                    </ul>
                    </p>

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
                <div class="col-md-12">
                    <ul>
                        <li>
                            Prof. <strong>Vincenzo Carnevale</strong>, Temple University,
                            1801 N. Broad Street,
                            Philadelphia, PA 19122 (USA).
                        </li>
                        <li>
                            Prof. <strong>Ran Friedman</strong>,
                            Linnaeus University,
                            Department of Chemistry and Biomedical Sciences,
                            391 82 Kalmar, (Sweden). <!--
			    <a href="http://lnu.se/en/ccbg">website</a> -->
                        </li>
                        <li>
                            Prof. <strong>Giuseppe Legname</strong>,
                            Neurodegenerative diseases,
                            Prion Biology Laboratory,
                            SISSA - Scuola Internazionale Superiore di Studi Avanzati,
                            Via Bonomea, 265,
                            34136 Trieste,
                            (Italy)
                        </li>
                        <li>
                            Prof. <strong>Riccardo Capelli</strong>,
                            University of Milan (Italy)
                        </li>
                        <!-- li>
                            Prof. <strong>Yaakov (Koby) Levy</strong>,
                            Department of Structural Biology,
                            Weizmann Institute of Science,
			    Rehovot, (Israel). <em>(cancelled)</em>
			    <a href="http://www.weizmann.ac.il/Structural_Biology/Levy/">website</a>.
                        </li -->
                        <li>
                            Prof. <strong>Ellinor Haglund</strong>,
                            University of Hawai‘i at Mānoa (USA)
                        </li>
                        <li>
                            Prof. <strong>Alejandro Giorgetti</strong>,
                            University of Verona
                            ITALY
                            Institute for Neuroscience and Medicine,
                            Computational Biomedicine (INM-9),
                            Forschungszentrum Jülich GmbH,
                            VNU-KeyLab Member,
                            Wilhelm-Johnen-Straße,
                            52428 Jülich,
                            (GERMANY)
                        </li>
                        <li>
                            Prof. <strong>Giulia Rossetti</strong>,
                            Institute for Neuroscience and Medicine,
                            Computational Biomedicine (INM-9),
                            Forschungszentrum Jülich,
                            VNU-KeyLab member,
                            Wilhelm-Johnen-Straße,
                            52428 Jülich,
                            (GERMANY)
                        </li>
                        <li>
                            Prof. <strong>Tran Phuoc Duy</strong>,
                            Tokyo Institute of Technology,
                            School of Life Science and Technology (Japan)
                        </li>
                        <li>
                            Prof. <strong>Giorgio Colombo</strong>, University of Pavia (Italy)
                        </li>
                        <!--li>
                            Prof. <strong>Mai Suan Ly</strong>,
                            Institute of Physics, Polish Academy of Sciences, Al. Lonikow 32/46, 02-668 Warsaw, (Poland)
			            <em>(cancelled)
                        </li -->
                        <li>Prof. <strong>Phuong Nguyen</strong>, Institute de Biologie Physico-Chimique, Paris (France)
                        </li>
                        <li> Prof. <strong>Francesco Musiani</strong>, University of Bologna (Italy)
                        </li>
                        <li>
                            Prof. <strong>Paolo Carloni</strong>, Forschungszentrum Jülich &amp; RWTH Aachen
                            University, Germany
                        </li>
                        <!-- li>
                            Prof. <strong>Nguyen Manh-Duc</strong>, Culham Centre for Fusion Energy, (United Kingdom)
                        </li -->
                        <li>
                            Prof. <strong>Jer-Lai Kuo</strong>, Academia Sinica (Taiwan)
                        </li>
                        <li>
                            Prof. <strong>Ke Zuo</strong>, Chongqing University of Arts and Sciences, Chongqing (China)
                        </li>
                        <li>
                            Prof. <strong>Adam Sieradzan</strong>, University of Gdańsk (Poland)
                        </li>
                        <li>
                            Prof. <strong>Francesca Spyrakis</strong>, University of Turin (Italy)
                        </li>
                        <li> Prof. <strong>Shozeb Haider</strong>, University College London (UK)
                        </li>
                    </ul>
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

                    <h4 class="section-title">Scientific Committee</h4>

                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="speaker">

                        <figure>
                            <img height=256 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/PCarloni.png">
                        </figure>

                        <h4>Paolo Carloni</h4>

                        <p>Professor <br>Forschungszentrum Jülich &amp; RWTH Aachen University, Germany
                        </p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-3">
                    <div class="speaker">

                        <figure>
                            <img height=256 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/NguyenTheToan.png">
                        </figure>

                        <h4>Toan T. Nguyen</h4>

                        <p>Professor<br>University of Science, Vietnam National University</p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-3">
                    <div class="speaker">

                        <figure>
                            <img height=256 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/NguyenManhDuc.png">
                        </figure>

                        <h4>Nguyen Manh Duc</h4>

                        <p>Professor<br>Culham Centre for Fusion Energy, United Kingdom</p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-3">
                    <div class="speaker">

                        <figure>
                            <img height=256 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/li.jpg">
                        </figure>

                        <h4>Mai Suan Ly</h4>

                        <p>Professor<br>Institute of Physics, Poland</p>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">

                    <h4 class="section-title">Secretariat</h4>

                </div>
            </div>

            <div class="row">
                <div class="col-md-3">

                    <div class="speaker">

                        <figure>
                            <img height=256 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/Annachiara.png">
                        </figure>

                        <h4>Annachiara Berra-Krichel</h4>

                        <p>Forschungszentrum Jülich</p>

                    </div>
                </div>
                <div class="col-md-3">

                    <div class="speaker">

                        <figure>
                            <img height=256 alt="" class="img-responsive center-block"
                                src="../../wp-content/uploads/2024/02/094.jpg">
                        </figure>

                        <h4>DO Thi Ngoc</h4>

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
                            <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" id="cell" name="cell" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Affiliation" id="affiliation"
                                name="affiliation" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address"
                                required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zip Code" id="zip" name="zip" required>
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
            <!--
	<div class="row">
                <div class="col-md-12">
    <section id="location" class="section location">

        <div class="container">
-->
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
                    <!--
			<strong>Yaakov Levy</strong><br>,
			Department of Structural Biology, Weizmann Institute of Science, Rehovot, (Israel)<br>

			Center for Innovative Materials and Architectures, Ho Chi Minh City, Vietnam<br>
			<em>Design and Modification of Porous Nanomaterials as Drug Carriers in Cancer Therapy</em>
-->
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
                <!-- div class="col-sm-3">
			11:30-12:00
		</div>
		<div class="col-sm-9">
			Shuttle from VNU University of Science to Hanoi Tirant Hotel
		</div -->
            </div>
        </div>
    </section>


    <section id="location" class="section location">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="section-title">Venue</h3>
                    <address>
                        <p>University of Science, Vietnam National University - Hanoi
                            <br>334 Nguyen Trai Street, Thuong Dinh, Thanh Xuan, Hanoi, Vietnam
                            <br>Phone: (+84) 243 858 4615
                            <br>Email:
                        </p>
                    </address>
                </div>
                <div class="col-sm-6">
                    <a
                        href="https://www.google.com/maps/place/University+of+Science,+Vietnam+National+University+Hanoi/@20.9963586,105.8068833,18z/data=!4m6!3m5!1s0x3135acbf0df2c0e5:0xd740a66998e1a0ed!8m2!3d20.9958722!4d105.8079772!16s%2Fm%2F04gjt_4?entry=ttu">
                        <img alt="" class="img-responsive center-block"
                            src="../../wp-content/uploads/2024/02/HUS-map.html">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <button id="backToTop" class="btn-top btn-primary">
        <img src="assets/images/icons/chevron-up.svg" alt="">
    </button>

    <button id="listBtn" class="btn btn-primary" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
        Danh sách
    </button>

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
    <!-- Modal thông báo -->
    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Thông Báo</h5>
                    <div class="modal-body" id="modalBody">
                        <!-- Nội dung thông báo sẽ được chèn ở đây -->
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    <!--Bảng danh sách khách mời-->
    <div id="dataTableContainer" style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; background-color: white; padding: 20px; border: 1px solid #ddd;">

        <table id="dataTable" border="1">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Affiliation</th>
                    <th>Address</th>
                    <th>Zip Code</th>

                    <!-- Thêm các cột khác theo dữ liệu -->
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu bảng sẽ được load vào đây -->
            </tbody>
        </table>
        <button id="closeTableBtn" class="btn-close">Close</button>
    </div>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>



</html>
<script>
    $(document).ready(function() {
        $("#registration-form").on("submit", function(e) {
            e.preventDefault();

            var formData = $(this).serialize(); // Get data from form

            $.ajax({
                type: "POST",
                url: "registration.php",
                data: formData,
                success: function(response) {
                    $('#modalBody').text(response);
                    $('#notificationModal').modal('show');
                },
                error: function() {

                    alert("Data error transit");
                }
            });
        });

        $("#listBtn").click(function() {
            $.ajax({
                url: "fetchData.php",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    var i = 1;
                    var tableContent = "";
                    $.each(data, function(key, value) {
                        tableContent += '<tr>';
                        tableContent += '<td>' + i + '</td>';
                        tableContent += '<td>' + value.firstName + ' ' + value
                            .lastName + '</td>';
                        tableContent += '<td>' + value.email + '</td>';
                        tableContent += '<td>' + value.phone + '</td>';
                        tableContent += '<td>' + value.affiliation + '</td>';
                        tableContent += '<td>' + value.address + '</td>';
                        tableContent += '<td>' + value.zipCode + '</td>';
                        // Tiếp tục với các cột khác
                        tableContent += '</tr>';
                        i = i + 1;
                    });
                    $("#dataTable tbody").html(tableContent);
                    $("#dataTableContainer").show();
                },
                error: function() {
                    alert("Have a error when get data from databases.");
                }
            });
        });
        $("#closeTableBtn").click(function() {
            $("#dataTableContainer").hide();
        });
    });
    // var modal = document.getElementById('myModal');
    // var openBtn = document.getElementById('openModal');
    // var closeBtn = document.getElementById('closeModal');

    // // Mở modal
    // openBtn.onclick = function(event) {
    //     modal.style.display = 'block';
    // }

    // // Đóng modal khi bấm nút Close
    // closeBtn.onclick = function(event) {
    //     modal.style.display = 'none';
    // }
</script>
<style>
    #dataTableContainer {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        background-color: white;
        padding: 20px;
        border: 1px solid #ddd;
        max-height: 70%;
        width: 80%;
        overflow: auto;
    }

    #dataTable {
        width: 100%;
        table-layout: auto;
    }

    #dataTable th,
    #dataTable td {
        min-width: 120px;
        padding: 10px;
    }

    .btn-close {
        margin-top: 20px;
        padding: 10px 20px;
        cursor: pointer;
        border: none;
        background-color: #ff0000;
        color: white;
        border-radius: 5px;
    }
</style>