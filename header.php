 <!-- Start header -->
  <style>
        /* normal menu css */
        .sub_menu_d {
            max-height: 500px;
            /* Hauteur maximale */
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
            background: hsl(0, 0%, 100%);
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
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .container {
                width: 960px;
            }

            .mega_menu_demo_2 .mega_menu {
                width: 940px;
            }

            .main_menu ul li ul {
                width: 150px;
            }
        }

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
                opacity: 0;
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

  </style>
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
                                                <li><a href="charge.php">Chargé de communication et marketing digital</a></li>
                                                <li><a href="serigraphie.php">Conception graphique et sérigraphie</a></li>
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
                        <li><a class="nav-link" href="contact.php">contactez-nous</a></li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- End header -->