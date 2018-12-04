<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Yassine Assahnoun - Web Engineer</title>

    <!-- favicon -->
    <link href="../img/icone-ordinateur.png" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- owl carousal -->
    <link href="../css/owl.carousel.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <?php /*require("header.php"); */?>

  <ul class="cv_navigation" id="navigation_text">
    <li><a class="active" href="#header" onclick="myFunction()" id="navigation_non_flag">Home</a></li>
    <li><a href="#specialities" onclick="myFunction()" id="navigation_non_flag">Specialities</a></li>
    <li><a href="#skills" onclick="myFunction()" id="navigation_non_flag">Skills</a></li>
    <li><a href="#experience" onclick="myFunction()" id="navigation_non_flag">Experience</a></li>
    <li><a href="#hobbies" onclick="myFunction()" id="navigation_non_flag">My hobbies</a></li>
    <li><a href="#creations" onclick="myFunction()" id="navigation_non_flag">My creations</a></li>
    <li><a href="#contact" onclick="myFunction()" id="navigation_non_flag">Contact</a></li>
    <li><a href="../" onclick="myFunction()" id="navigation_flag">Français</a></li>
    <li><a style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>
  </ul>

  <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

	<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<header class="header" id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="profile-img">
                    <img src="../img/Yaya.jpg" class="img-responsive" id="profile_picture" alt=""/>
                </div>
                <!-- Profile Image -->
            </div>
            <div class="col-md-9">
                <div class="name-wrapper">
                    <h1 class="name">Yassine Assahnoun</h1>
                    <span>Web Engineer</span>
                </div>
                <p>
                    5th year student in IT engineering school in CESI EXIA, I am passionnate about computer science and web development.
                    Freelance since the beginning of this year 2018, I offer you a full support for your website.
                    Modernization, attractive design and navigation ease are the keys of an effective website. Need a website? Or only want to update yours? Contact me!
                </p>


                <div class="row">
                    <div class="col-md-3">
                        <div class="personal-details">
                            <strong>25th of AUGUST, 1997</strong>
                            <small>DATE OF BIRTH</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="personal-details">
                            <strong>FRENCH</strong>
                            <small>NATIONALITY</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="personal-details">
                            <strong>FRENCH <span>(NATIVE)</span>, ENGLISH <span>(INTERNATIONAL)</span></strong>
                            <small>LANGUAGES</small>
                        </div>
                    </div>
                </div>

                <ul class="social-icon">
                    <!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/yassine-assahnoun-468346143/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="mailto:yassine.assahnoun@viacesi.fr"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> -->
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- .header-->

<section class="section-wrapper" id="activities">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>My activities</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">100%</div>
                            <div class="item-stats-name">Work success</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">100%</div>
                            <div class="item-stats-name">On budget</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">100%</div>
                            <div class="item-stats-name">On time</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">99%</div>
                            <div class="item-stats-name">Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .activity-wrapper -->

<section class="work-history-wrapper section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>My experience</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">4</div>
                            <div class="item-stats-name">months of work</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">2</div>
                            <div class="item-stats-name">websites created</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">25</div>
                            <div class="item-stats-name">hours per week available</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="item-stats">
                            <div class="item-stats-value">24</div>
                            <div class="item-stats-name">hours response time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .work-history-wrapper -->

<section class="expertise-wrapper section-wrapper" id="specialities">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>My specialities</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="expertise-item">
                            <h3>Web design</h3>

                            <p>
                                Update a website rapidly in an effective way while keeping its responsive aspect.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="expertise-item">
                            <h3>Mock-up elaboration</h3>

                            <p>
                                Websites mock-up creation depending on your choices!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="expertise-item">
                            <h3>Customers attraction helping</h3>

                            <p>
                                Thanks to your new design and ergonomic website, your online clients number will greatly increase!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- .row -->


    </div>
</section>
<!-- .expertise-wrapper -->

<section class="section-wrapper skills-wrapper" id="skills">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress-wrapper">

                            <h3>Coding</h3>

                            <div class="progress-item">
                                <span class="progress-title">HTML5</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 86%"><span
                                            class="progress-percent"> 86%</span>
                                    </div>
                                </div>
                                <!-- .progress -->
                            </div>
                            <!-- .skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">CSS3</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 90%"><span
                                            class="progress-percent"> 90%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">PHP</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="84" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 84%;"><span
                                            class="progress-percent"> 84%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">JavaScript</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 79%;"><span
                                            class="progress-percent"> 79%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">AngularJS</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 50%"><span
                                            class="progress-percent"> 50%</span>
                                    </div>
                                </div>
                                <!-- .progress -->
                            </div>
                            <!-- /.skill-progress -->

                        </div>
                        <!-- /.progress-wrapper -->
                    </div>
                    <div class="col-md-6">
                        <div class="progress-wrapper">
                            <h3>Management</h3>

                            <div class="progress-item">
                                <span class="progress-title">Agile Methods (SCRUM)</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 80%"><span
                                            class="progress-percent"> 80%</span>
                                    </div>
                                </div>
                                <!-- .progress -->
                            </div>
                            <!-- .skill-progress -->

                            <div class="progress-item">
                                <span class="progress-title">Project management</span>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100" style="width: 75%"><span
                                            class="progress-percent"> 75%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->


                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->


                                <!-- /.progress -->
                            </div>
                            <!-- /.skill-progress -->

                        </div>
                        <!-- /.progress-wrapper -->
                    </div>
                </div>
                <!--.row -->
            </div>
        </div>

    </div>
    <!-- .container-fluid -->
</section>
<!-- .skills-wrapper -->

<section class="section-wrapper section-experience" id="experience">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title"><h2>Work experience</h2></div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-item">
                            <small>2018 - Today</small>
                            <h3>Web Engineer</h3>
                            <h4>CGI</h4>

                            <p>Arras / Amiens, France</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                    <div class="col-md-6">
                        <div class="content-item">
                            <small>Sept. 2017 - Feb. 2018</small>
                            <h3>Web developer</h3>
                            <h4>Yabbu</h4>

                            <p>Amsterdam, Pays-Bas</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="content-item">
                            <small>Jan. 2017 - Apr. 2017</small>
                            <h3>C# developer</h3>
                            <h4>Actinuum</h4>

                            <p>Paris, France</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                    <div class="col-md-6">
                        <div class="content-item">
                            <small>Sept. 2015 - Dec. 2015</small>
                            <h3>Phone seller</h3>
                            <h4>Écoburotic</h4>

                            <p>Maidstone, Royaume-Uni</p>
                        </div>
                        <!-- .experience-item -->
                    </div>
                </div>
            </div>
            <!--.row-->
        </div>
    </div>
    <!-- .container -->
</section>
<!-- .section-experience -->

<section class="section-education section-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title"><h2>Studies</h2></div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-item">
                            <small>2014 - Today</small>
                            <h3>IT Engineer school</h3>
                            <h4>CESI Exia</h4>

                            <p>Arras, France</p>
                        </div>
                        <!-- .experience-item -->
                        <div class="content-item">
                            <small>2011 - 2014</small>
                            <h3>General High school diploma, scientific option</h3>
                            <h4>Lycée Robespierre</h4>

                            <p>Arras, France</p>
                        </div>
                        <!-- .experience-item -->

                        <!-- .experience-item -->
                    </div>
                </div>
                <!--.row-->
            </div>

        </div>
        <!--.row-->
    </div>
    <!-- .container -->
</section>
<!-- .section-education -->

<section class="section-profile section-wrapper" id="hobbies">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title"><h2>My hobbies</h2></div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <!-- <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/m-logo-studio.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">ENVATO STUDIO</a></h3>
                                    Seamlessly formulate covalent outsourcing vis-a-vis virtual resources. Distinctively conceptualize.
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="http://football.com/">
                                        <img class="media-object" src="../img/saint-lau.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="http://football.com/">Football</a></h3>
                                    Competitive football in a club since I was 6, Excellence Promotion level in <a href="http://es-st-laurent-blangy.footeo.com//">Saint-Laurent Blangy.</a>
                                    <br>Former player of <a href="http://www.avvsloterdijk.com/">AVV Sloterdijk</a> in Amsterdam.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="https://yassine-assahnoun.fr">
                                        <img class="media-object" src="../img/icone-ordinateur.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="https://yassine-assahnoun.fr">Web development</a></h3>
                                    Passionate of web development and creation. My goal: take on more and more challenges everyday.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="profile-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="img/m-logo-peopleperhour.png" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">PEOPLEPERHOUR</a></h3>
                                    Seamlessly formulate covalent outsourcing vis-a-vis virtual resources. Distinctively conceptualize.
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!--.row-->
            </div>

        </div>
        <!--.row-->
    </div>
    <!-- .container -->
</section>
<!-- .section-profile -->

<section class="section-wrapper portfolio-section" id="creations">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>A few creations</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <a class="portfolio-item" href="https://yabbu.com">
                            <div class="portfolio-thumb">
                                <img src="../img/Logo Yabbu.png" alt="">
                            </div>

                            <div class="portfolio-info">
                                <h3>Yabbu website</h3>
                                <small>yabbu.com</small>
                            </div>
                            <!-- portfolio-info -->
                        </a>
                        <!-- .portfolio-item -->
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- .portfolio -->

<section class="review-section section-wrapper" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Recent reviews</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div id="review">
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="../img/Alex.jpg" alt="avatar"/>
                            </div>

                            <div class="media-body">
                                <div class="user-name">Alexandre Veremme</div>
                                <!--.user-name-->

                                <div class="rating" data-star_rating="5.0">
                                    <div class="rating-total">
                                        <!-- Change rating percentage rate-0, rate-1, rate-2, rate-3, rate-4, rate-5  -->
                                        <div class="rating-progress rate-5">
                                        </div>
                                    </div>
                                </div>
                                <!--.rating-->
                            </div>
                        </div>


                        <div class="review-text">
                            Grâce à Yassine, la refonte de notre site web a été une réussite. Il est désormais sécurisé, ergonomique et plus rapide.
                            Son script de déploiement automatisé nous permet de gagner beaucoup de temps.
                        </div>
                        <!--.review-text-->
                    </div>
                    <!--.item-->

                    <!--.item-->

                    <!--.item-->

                    <!--.item-->

                    <!--.item-->

                </div>
                <!--#review-->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- .review-section -->

<section class="section-contact section-wrapper" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <h2>Contact me</h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <!-- <div class="col-md-3">
                        <address>
                            <strong>Adresse</strong><br>
                            1355 Market Street, Suite 900<br>
                            San Francisco, CA 94103

                        </address>
                    </div> -->
                    <div class="col-md-3">
                        <address>
                            <strong>Phone number</strong><br>
                            +33 6 14 08 94 14
                        </address>
                    </div>
                    <div class="col-md-3">
                        <address>
                            <strong>Linkedin</strong><br>
                            <a
                                    href="https://www.linkedin.com/in/yassine-assahnoun-468346143/">Yassine Assahnoun</a>
                        </address>
                    </div>
                    <div class="col-md-3">
                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:yassine.assahnoun@viacesi.fr">yassine.assahnoun@viacesi.fr</a>
                        </address>
                    </div>

                </div>
                <!--.row-->

                <!-- <div class="feedback-form">
                    <h3>Pour plus d'informations: </h3>

                    <form id="contactForm" action="sendemail.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" required="" class="form-control" id="InputName"
                                   placeholder="Nom & prénom">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required="" class="form-control" id="InputEmail"
                                   placeholder="Adresse mail">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" id="InputSubject"
                                   placeholder="Sujet de votre message">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                      placeholder="Votre message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Publier</button>
                    </form>
                </div> -->
                <!-- .feedback-form -->

            </div>
        </div>
        <!--.row-->

    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->

<footer class="footer">
    <div class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">Thank you: &copy; <a
                            href="https://themehippo.com">themehippo</a></div>
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="../js/jquery-2.1.4.min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!--owl carousal-->
<script src="../js/owl.carousel.min.js"></script>
<!--theme script-->
<script src="../js/scripts.js"></script>

<script src="../js/onlinecv.js"></script>
</body>
</html>
