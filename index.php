<!DOCTYPE html>
<html lang="fr">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>LED SCHOOL</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"-->
</head>

<style>
    a {
        text-decoration: none;
    }

    ul,
    ol {
        list-style-type: none;
    }

    /* normal menu css */
    .sub_menu_d {
        max-height: 500px;

        overflow-y: auto;
        /* Activer le défilement vertical si nécessaire */
        overflow-x: hidden;
        /* Désactiver le défilement horizontal */
    }

    .main_menu>ul>li {
        display: inline-block;
        position: relative;
        margin: 0 -2px;
    }

    .main_menu ul li {
        position: relative;
    }

    .main_menu ul li a {
        font-size: 16px;
        color: #353535;
        padding: 20px 25px;
        display: block;
        font-weight: 400;
    }

    main_menu ul li .active,
    .main_menu ul li:hover>a {
        color: var(--hover-color);
    }

    /* Normal Dropdown menu */
    .main_menu ul li ul {
        width: 230px;
        background: #fff;
        transition: 0.5s;
        box-shadow: 0px 5px 15px 0px rgba(212, 201, 201, 0.75);
    }

    .main_menu ul li ul li a {
        padding: 10px 25px;
        font-size: 15px;
    }

    .main_menu ul li ul li a i {
        float: bottom;
    }

    .main_menu ul li ul li ul {
        left: 100%;
        top: 0;
    }

    /* responsive css */
    /* @media (min-width: 992px) and (max-width: 1199.98px) {
        .container {
            width: 960px;
        }

        .mega_menu_demo_2 .mega_menu {
            width: 940px;
        }

        .main_menu ul li ul {
            width: 150px;
        }
    } */

    @media (min-width: 768px) and (max-width: 991.98px) {
        .container {
            width: 720px;
        }

        .mega_menu_demo_2 .mega_menu {
            width: 700px;
        }

        .main_menu ul li a {

            padding: 20px 16px;
        }

        .main_menu ul li ul {
            width: 150px;
        }
    }

    @media (min-width: 768px) {
        .main_menu ul li ul {
            visibility: hidden;
            /* opacity: 0; */
            position: absolute;
            margin-top: 50px;
        }

        .main_menu ul li .mega_menu {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            margin-top: 50px;
        }

        .main_menu ul li:hover>ul {
            visibility: visible;
            opacity: 1;
            margin-top: 0px;
            z-index: 99;
        }

        .main_menu ul li:hover {
            visibility: visible;
            opacity: 1;
            margin-top: 0;
            z-index: 99;
        }
    }

    @media (max-width: 767.98px) {
        .main_menu {
            display: none;
            width: 100%;
        }

        .main_menu ul li {
            display: block;
        }

        .main_menu ul li a i {
            float: right;
        }

        .main_menu ul li a {
            border-bottom: 1px solid #ddd;

        }

        .main_menu ul li ul {
            width: 100%;
        }

        .main_menu ul li ul li ul {
            left: 0;
            top: auto;
        }

        .mega_menu .mega_menu_item {
            width: 50%;
        }

        .main_menu ul li ul {
            display: none;
            transition: none;
        }

        .main_menu ul li {
            display: none;
            transition: none;
        }


    }

    h3 {
        color: #000;
    }

    .text-danger {
        font-weight: bold;
    }
</style>
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" class="bg-light">

    <!-- LOADER -->
    <!--div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div-->
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/logoR-removebg-preview.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end main_menu" id="navbar-wd">
                    <ul class="navbar-nav ">
                        <li class="has_dropdown"><a href="#">Led School <i class="fas fa-angle-down"></i></a>
                            <ul class="sub_menu">
                                <li><a href="presentation.php">Presentation</a></li>
                                <li><a href="ledSprit.php"> L'esprit led school</a></li>
                                <li><a href="choix.php">Pourquoi choisir led School?</a></li>
                                <li><a href="ecosysteme.php"> L’écosystème LED SCHOOL </a></li>
                                <li><a href="service_apprenant.php">Service aux apprenants</a></li>
                            </ul>
                        </li>
                        <li class="has_dropdown"><a href="#">formations <i class="fas fa-angle-down"></i></a>
                            <ul class="sub_menu">
                                <li class="has_dropdown"><a href="#">Formation professionnelle <i
                                            class="fas fa-angle-right"></i></a>
                                    <ul class="sub_menu">
                                        <li class="has_dropdown"><a href="#">Entrepreneuriat<i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="EntreNumerique.php">Entrepreneuriat numérique</a></li>
                                                <li><a href="entreAgricole.php">Entrepreneuriat agricole</a></li>
                                                <li><a href="artisanal.php">Entrepreneuriat artisanal</a></li>
                                                <li><a href="commercial.php">Entrepreneuriat commercial</a></li>
                                                <li><a href="culturel.php">Entrepreneuriat culturel artistique et
                                                        touristique</a>
                                                </li>
                                                <li><a href="agrobusiness.php">Agrobusiness</a></li>
                                                <li><a href="ecommerce.php">E-commerce</a></li>

                                            </ul>
                                        </li>
                                        <li class="has_dropdown"><a href="#">Digital et tech<i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub_menu_d">
                                                <li><a href="web.php">Developpement web</a></li>
                                                <li><a href="mobile.php">Developpement mobile</a></li>
                                                <li><a href="webdesign.php">Webdesign</a></li>
                                                <li><a href="Nocode.php">Developpement no low code</a></li>
                                                <li><a href="Mediateur.php">Médiateur IA</a></li>
                                                <li><a href="MediateurNumérique.php">Médiateur numérique</a></li>
                                                <li><a href="RedacteurWeb.php">Redateur web</a></li>
                                                <li><a href="community.php">Community Manager</a></li>
                                                <li><a href="social.php">Social media et influence</a></li>
                                                <li><a href="infoBureautique.php">Informatique et Bureautique</a></li>
                                                <li><a href="charge.php">Chargé de communication et marketing
                                                        digital</a></li>
                                                <li><a href="serigraphie.php">Conception graphique et sérigraphie</a>
                                                </li>
                                                <li><a href="maintenance.php">Maintenance informatique et GSM</a></li>
                                                <li><a href="journalisme.php">Web journalisme</a></li>
                                                <li><a href="reporter.php">Jeune reporter d'images </a></li>
                                            </ul>
                                        </li>
                                        <li class="has_dropdown"><a href="#">Management de projet<i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="facilitateur.php">Facilitateur communautaire</a></li>
                                                <li><a href="superviseur.php">Superviseur de zone</a></li>
                                                <li><a href="gestion_projet.php">Gestion de projet</a></li>
                                                <li><a href="fundraising.php">Fundraising</a></li>
                                                <li><a href="suivi_evaluation.php">suivi evaluation</a></li>
                                            </ul>
                                        </li>
                                        <li class="has_dropdown"><a href="#">Developpement économique local<i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="animation.php">Animation économique</a></li>
                                            </ul>
                                        </li>
                                        <li class="has_dropdown"><a href="#">Management d'entreprise<i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="business_developper.php">Business developper</a></li>
                                                <li><a href="conseiller.php">Conseiller d'entreprise</a></li>
                                                <li><a href="startup.php">Startup Manager</a></li>
                                                <li><a href="responsable.php">Responsable / Agent commercial</a></li>
                                                <li><a href="comptable.php">Comptable-logisticien</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has_dropdown"><a href="#">BootCamp<i class="fas fa-angle-right"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="entrepreunariat.php">Entrepreneuriat</a></li>
                                        <li><a href="digital.php">Digital </a></li>
                                        <li><a href="management.php">Management </a></li>
                                        <li><a href="employabilite.php">Employabilité</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><a class="nav-link" href="admission.php">Admission</a></li>
                        <li><a class="nav-link" href="pedagogie.php">Pédadogie</a></li>
                        <li><a class="nav-link" href="actualites.php">Actualités</a></li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- End header -->
    <!-- Start Banner -->
    <div class="ulockd-home-slider ">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/study-group-african-people.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span class="theme_color" style="font-size: 80px;">LED School</span>
                                            <br>
                                            <br>
                                            Leadership, Entrepreneurship and Digital School
                                        </h3>

                                        <br>
                                        <div class="full center">
                                            <a class="contact_bt" style=" margin-top: 60px;"
                                                href="courses.html">S'inscrire </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/photo_group.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color" style="font-size:65px;">Nos formations
                                                <br>
                                            </span><br>Ecole du digital, de l'entrepreneuriat innovant et de management
                                        </h3>
                                        <br>
                                        <h4>Transformer votre avenir en 80% pratique et 100% employabilité </h4>
                                        <br>
                                        <div class="full center">
                                            <a class="contact_bt" style="margin-top: 10px;"
                                                href="courses.html">S'inscrire </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
    <div class="section tabbar_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_menu">
                        <ul>
                            <li><a href="#"><span class="icon"><img src="images/i1.png"
                                            alt="#" /></span><span>University Life</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i2.png"
                                            alt="#" /></span><span>Graduation</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i3.png"
                                            alt="#" /></span><span>Athletics</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i4.png"
                                            alt="#" /></span><span>Social</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i5.png"
                                            alt="#" /></span><span>Location</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i6.png" alt="#" /></span><span>Call
                                        us</span></a></li>
                            <li><a href="#"><span class="icon"><img src="images/i7.png"
                                            alt="#" /></span><span>Email</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2 style="margin-bottom: 10px;"><span>
                                    Une école pas comme les autres
                                </span></h2>
                        </div>
                        <div class="full" style="text-align: justify;">
                            <p>Une école 100% dédiée aux métiers de l’entrepreneuriat, du Digital et du
                                Mangement
                                LED School : l'innovation au cœur de votre réussite professionnelle.
                                Oubliez l'enseignement traditionnel ! Nous proposons une formation
                                professionnelle immersive et pratique, axée à 80% sur des projets
                                concrets et des simulations réelles. Spécialisée dans les métiers du
                                digital, de l'entrepreneuriat et du management, LED School s'adresse aux
                                jeunes déscolarisés, aux personnes en reconversion et aux diplômés sans
                                emploi. Notre pédagogie innovante, basée sur le "learning by doing",
                                vous permettra d'acquérir des compétences immédiatement opérationnelles
                                et de développer votre leadership.
                                Rejoignez une école qui vous prépare non seulement à un métier, mais
                                aussi à réussir dans le monde professionnel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full" style="padding-top: 0; width: 100%;">
                        <img class="img-responsive" style="width: 100%;"
                            src="images/portrait-professor-work-educational-system.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-md-6">
                    <div class="full">
                        <img class="img-responsive" style="width: 100%;"
                            src="images/portrait-professor-work-educational-system.jpg" alt="#" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2 style="margin-bottom: 10px;"><span>
                                    Notre Vision
                                </span></h2>
                        </div>
                        <div class="full" style="text-align: justify;">
                            <p>
                                <span>Transformer les jeunes en leaders et entrepreneurs du
                                    futur.</span> LED School aspire à devenir un acteur clé de l'émancipation des
                                jeunes, en leur
                                donnant les moyens de construire leur avenir professionnel. Nous croyons
                                en leur potentiel et nous nous engageons à leur fournir les outils
                                nécessaires pour réussir. Notre ambition est de combler le fossé entre
                                la formation théorique et les exigences du marché du travail, en formant
                                des professionnels compétents, innovants et prêts à relever les défis de
                                demain.
                                Rejoignez-nous et contribuons ensemble à un avenir meilleur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2 style="margin-bottom: 10px;"><span>
                                    Pourquoi sommes-nous certains de votre réussite ?
                                </span></h2>
                        </div>
                        <div class="full" style="text-align: justify;">
                            <p>À LED School, votre réussite est notre priorité. Nous vous offrons bien
                                plus qu'une simple formation : un accompagnement personnalisé, un réseau
                                d'entreprises partenaires pour des stages et des opportunités d'emploi,
                                et un corps professoral composé de professionnels en activité. Notre
                                pédagogie interactive et notre suivi individualisé vous permettront de
                                développer vos compétences, de gagner en confiance et de trouver votre
                                place sur le marché du travail. Rejoignez notre communauté d'étudiants
                                motivés et bénéficiez d'un environnement stimulant qui vous propulsera
                                vers la réussite. Les témoignages de nos anciens élèves, aujourd'hui
                                leaders dans leurs domaines, parlent d'eux-mêmes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <img class="img-responsive" style="width: 100%;"
                            src="images/portrait-professor-work-educational-system.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!--section de pédagogie-->
    <div class="heading_main text_align_center" style="padding-top: 30px;">
        <h2><span>Pédagogie</span></h2>
    </div>
    <div>
        <p class="text-center">Notre pédagogie innovante vise à créer un environnement d'apprentissage dynamique et
            inclusif.</p>
    </div>
    <div class="container mt-5">
        <div class="row mt-5">
            <!-- Cartes visibles (1 à 4) -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-user-graduate"></i>
                            Pédagogie centrée sur l'apprenant
                        </h5>
                        <p class="card-text">Nous personnalisons l'apprentissage en tenant compte des intérêts et des
                            besoins de chaque apprenant, favorisant leur engagement et motivation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-chalkboard-teacher"></i>
                            Intégration des technologies éducatives
                        </h5>
                        <p class="card-text">Nous utilisons des plateformes d'apprentissage en ligne et des applications
                            éducatives pour enrichir l'expérience d'apprentissage.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-lightbulb"></i>
                            Apprentissage par projet
                        </h5>
                        <p class="card-text">Les projets impliquent des problématiques concrètes et actuelles,
                            permettant aux élèves de développer leur créativité et leur capacité à résoudre des
                            problèmes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-sync"></i>
                            Alternance d'apprentissage
                        </h5>
                        <p class="card-text">Les élèves alternent entre l'apprentissage en classe et en milieu
                            professionnel, leur permettant d'appliquer leurs connaissances dans un environnement réel.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cartes cachées (5 à 8) -->
            <!-- <div class="collapse" id="more-cards">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-trophy"></i>
                                    Challenges
                                </h5>
                                <p class="card-text">Nous proposons des défis comme des hackathons, incitant les élèves
                                    à sortir de leur zone de confort et à travailler sur des problèmes réels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-handshake"></i>
                                    Développement des Soft Skills
                                </h5>
                                <p class="card-text">Nous intégrons le développement de compétences interpersonnelles,
                                    comme le leadership, essentielles dans le monde professionnel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-briefcase"></i>
                                    Coaching carrière
                                </h5>
                                <p class="card-text">Nous offrons un accompagnement personnalisé pour aider les élèves à
                                    développer un plan d'action et à se préparer aux entretiens et au monde
                                    professionnel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-user-friends"></i>
                                    Mentorat
                                </h5>
                                <p class="card-text">Nos programmes de mentorat permettent aux élèves de bénéficier des
                                    conseils de professionnels et d'élargir leur réseau.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Bouton Suite -->
            <div class="show-more text-center mt-3">
                <a href="pedagogie.php" class=" decouvrir">
                    Détails plus <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>


        </div>
    </div>
    <!--fin de la partie pédagogie-->
    <!-- section -->
    <div class="container mt-5">
        <div class="heading_main text_align_center col-md-12">
            <h2><span>
                    Evènements
                </span></h2>
        </div>
        <div class="row">
            <!-- Premier élément -->
            <div class="col-md-4">
                <div class="event-container">
                    <div class="event-text">
                        <div class="event-date">
                            <i class="fas fa-calendar-alt"></i> 11 Octobre 2024
                        </div>
                        <div class="event-status">Événement Ouvert</div>
                    </div>
                </div>
                <div class="container">
                    <h4>Journée de L'entrepreneur</h4>
                    <div class="event-details">
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i> Cotonou
                        </div>
                        <div class="register-btn">
                            <button class="btn">Je m'inscris</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deuxième élément -->
            <div class="col-md-4">
                <div class="event-container">
                    <div class="event-text">
                        <div class="event-date">
                            <i class="fas fa-calendar-alt"></i> 12 Octobre 2024
                        </div>
                        <div class="event-status">Événement Ouvert</div>
                    </div>
                </div>
                <div class="container">
                    <h4>Conférence Startup</h4>
                    <div class="event-details">
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i> Paris
                        </div>
                        <div class="register-btn">
                            <button class="btn">Je m'inscris</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Troisième élément -->
            <div class="col-md-4">
                <div class="event-container">
                    <div class="event-text">
                        <div class="event-date">
                            <i class="fas fa-calendar-alt"></i> 13 Octobre 2024
                        </div>
                        <div class="event-status">Événement Ouvert</div>
                    </div>
                </div>
                <div class="container">
                    <h4>Atelier Web</h4>
                    <div class="event-details">
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i> Dakar
                        </div>
                        <div class="register-btn">
                            <button class="btn">Je m'inscris</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton "Voir plus" en bas à droite -->
        <!--div class="voir-plus-btn">
            <button class="btn"style="background: linear-gradient(45deg, #ecdb07, #0b1da5);">Voir plus</button>
          </div>
      </div-->


        <!--endsection-->

        <!-- section -->
        <div class="section layout_padding padding_bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2><span>Actualités</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div style="display: flex; justify-content: space-between;">
                                            <div class="full blog_img_popular">
                                                <img class="img-responsive" src="images/img9.png" alt="#" />
                                            </div>
                                            <div class="text-justify" style="margin: 30px;">
                                                <p> 09 octobre 2024</p>
                                                <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.Pariatur. <br>
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum</p>
                                                    <div>
                                                        <a href="#" class="styled-button">
                                                            Lire la suite   <i class="fa fa-eye"></i> 
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div style="display: flex; justify-content: space-between;">
                                            <div class="full blog_img_popular">
                                                <img class="img-responsive" src="images/img9.png" alt="#" />
                                            </div>
                                            <div class="text-justify" style="margin: 30px;">
                                                <p> 09 octobre 2024</p>
                                                <p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.Pariatur. <br>
                                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum</p>
                                                    <div>
                                                        <a href="#" class="styled-button">
                                                            Lire la suite  <i class="fa fa-eye"></i>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end section -->
        <!-- Section -->
        <div class="section-bg py-5">
            <div class="container">
                <div class="heading_main text_align_center col-md-12">
                    <h2><span>
                            Résumé des rubriques
                        </span></h2>
                </div>
                <div class="row text-center ">
                    <!-- Nous rencontrer -->
                    <div class="col-md-4">
                        <div class="option-box p-4">
                            <!-- <i class="fas fa-users"></i> -->
                            <img src="images/rencontre-removebg-preview.png" alt="" height="100">

                            <h3>Nous rencontrer</h3>
                        </div>
                    </div>
                    <!-- S'inscrire -->
                    <div class="col-md-4">

                        <div class="option-box p-4">
                            <!-- <i class="fas fa-edit"></i> -->
                            <img src="images/inscription-removebg-preview.png" alt="" height="100">
                            <h3>S'inscrire</h3>
                        </div>
                    </div>
                    <!-- Service aux apprenants -->
                    <div class="col-md-4">
                        <div class="option-box p-4">
                            <!-- <i class="fas fa-chalkboard-teacher"></i> -->
                            <img src="images/service-removebg-preview.png" alt="" height="100">

                            <h3>Service aux apprenants</h3>
                        </div>
                    </div>
                    <!-- Les formations -->
                    <div class="col-md-4">
                        <div class="option-box p-4">
                            <!-- <i class="fas fa-book"></i> -->
                            <img src="images/formation-removebg-preview.png" alt="" height="100">

                            <h3>Les formations</h3>
                        </div>
                    </div>
                    <!-- Télécharger brochure -->
                    <div class="col-md-4">
                        <div class="option-box p-4">
                            <!-- <i class="fas fa-download"></i> -->
                            <img src="images/telechargement-removebg-preview.png" alt="" height="100">
                            <h3>Télécharger brochure</h3>
                        </div>
                    </div>
                    <!-- Admission -->
                    <div class="col-md-4">
                        <div class="option-box p-4">
                            <!-- <i class="fas fa-door-open"></i> -->
                            <img src="images/admission-removebg-preview.png" alt="" height="100">
                            <h3>Admission</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section -->

    </div> <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog">
                        <div class="full margin-bottom_30">
                            <img src="images/logoR-removebg-preview.png" alt="#" />
                        </div>
                        <div class="full white_fonts">
                            <p>Apprenez en faisant,
                                reussissez en devenant!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog footer_menu white_fonts">
                        <h3>Liens utiles</h3>
                        <ul>
                            <li><a href="index.php">> accueil</a></li>
                            <li><a href="presentation.php">>Presentation </a></li>
                            <li><a href="">> Actualités</a></li>
                            <li><a href="#">> Pédagogie</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog full white_fonts">
                        <h3>Newsletter</h3>
                        <p>Laissez nous un message</p>
                        <div class="newsletter_form">
                            <form action="index.html">
                                <input type="email" placeholder="Your Email" name="#" required />
                                <button>envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog full white_fonts">
                        <h3>Contact us</h3>
                        <ul class="full">
                            <li><img src="images/i5.png"><span>Ladjifarani, voie camp Séro Kpéra rue Cap Finance<br>
                                    Parakou,Benin
                                </span></li>
                            <li><img src="images/i6.png"><span>www.waxangarilabs.org</span></li>
                            <li><img src="images/i7.png"><span> (+229) 67589631 / 63100010 </span></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </footer>
    <!-- End Footer -->
<!-- 
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2024 </p>
                </div>
            </div>
        </div>
    </div> -->

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        /* counter js */

        (function ($) {
            $.fn.countTo = function (options) {
                options = options || {};

                return $(this).each(function () {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof (settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof (settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 1000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
    <!----script pour la partie pedagogie-->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            var moreCards = document.getElementById('more-cards');
            var button = document.getElementById('show-more-btn');

            button.addEventListener('click', function () {
                moreCards.addEventListener('shown.bs.collapse', function () {
                    button.innerHTML = 'Voir moins <i class="fa fa-arrow-up"></i>';
                });

                moreCards.addEventListener('hidden.bs.collapse', function () {
                    button.innerHTML = 'Détails plus <i class="fa fa-arrow-right"></i>';
                });
            });
        });
    </script> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>