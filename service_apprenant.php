<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED SCHOOL</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/service_apprenant.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body id="inner_page" data-bs-spy="scroll" data-bs-target="#navbar-wd" data-bs-offset="98">
    <?php include 'header.php'?>
    <!-- Banner -->
    <section class="inner_banner">
        <div class="Superpose"></div> 
        <div class="container">
            <div class="full animate__animated animate__fadeInDown">
                <h3> Service aux apprenants</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <p class="text-justify" style="padding-top: 20px;">À LED School, nous nous engageons à offrir un large éventail de services
                pour soutenir nos étudiants dans leur parcours académique et professionnel.
                Voici comment nous les aidons à se préparer au mieux à l'avenir :</p>

            <div class="row text-center mt-4">

                <div class="col-md-4">
                    <img src="images/materiel_informatique-removebg-preview.png" class="img-fluid mb-3"
                        alt="equipement informatique">
                    <h5>Je m’équipe en informatique</h5>
                    <p>Nous offrons des ressources pour aider les étudiants à s'équiper en matériel informatique de
                        qualité,
                        afin de faciliter leur apprentissage et leurs projets.</p>
                </div>

                <div class="col-md-4">
                    <img src="images/emploi-removebg-preview.png" class="img-fluid mb-3" alt="emploi">
                    <h5>Je trouve un emploi</h5>
                    <p>Notre réseau d'entreprises partenaires et notre service de placement aident les étudiants
                        à trouver des emplois adaptés à
                        leurs compétences et à leurs aspirations professionnelles.</p>
                </div>

                <div class="col-md-4">
                    <img src="images/voyages.jpg" class="img-fluid mb-3" alt="voyager">
                    <h5>Je voyage</h5>
                    <p>LED School partage des opportunités de voyage et des programmes d'échange et
                        des opportunités de voyage, permettant aux étudiants d'élargir
                        leurs horizons et d'acquérir une expérience internationale.</p>
                </div>
            </div>
            <div class="row text-center mt-4">

                <div class="col-md-4">
                    <img src="images/argent-removebg-preview.png" class="img-fluid mb-3" alt="gagner de l'argent">
                    <h5>Je gagne de l’argent</h5>
                    <p>Grâce à des partenariats avec des entreprises locales et des opportunités
                        de freelance, nos étudiants peuvent trouver des moyens
                        de générer des revenus tout en poursuivant leurs études.</p>
                </div>

                <div class="col-md-4">
                    <img src="images/permis_de_conduires-removebg-preview(1).png" class="img-fluid mb-3"
                        alt="permis de conduire">
                    <h5>Je passe mon permis</h5>
                    <p>Nous offrons des sessions de formation et des partenariats avec des auto-écoles pour
                        aider les étudiants à obtenir leur permis de conduire,
                        un atout précieux pour leur employabilité.</p>
                </div>

                <div class="col-md-4">
                    <img src="images/opportunités-removebg-preview.png" class="img-fluid mb-3" alt="oppportunités">
                    <h5>Je trouve d’autres opportunités</h5>
                    <p>LED School met en place des ateliers et des événements de networking pour aider les étudiants à
                        découvrir des opportunités de stage,
                        de bénévolat et de projets collaboratifs.</p>
                </div>

            </div>
            <div class="row text-center mt-4">

                <div class="col-md-4">
                    <img src="images/epgnr-removebg-preview.png" class="img-fluid mb-3" alt="epargne">
                    <h5>J'epargne</h5>
                    <p>Nous offrons des ateliers de gestion financière pour aider les étudiants à développer des
                        compétences en épargne et en budgétisation. De plus, des ressources sont disponibles pour ouvrir
                        des comptes d'épargne à des taux intéressants, afin de les encourager à économiser pour leurs
                        projets futurs.</p>
                </div>




            </div>
        </div>
    </section>
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->
<?php include 'footer_bottom.php'?>
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
    <!-- JavaScript for Scroll Animation -->
    <script>
        // Function to show fade-in effect on scroll
        function fadeInOnScroll() {
            const fadeElements = document.querySelectorAll('.service-card');
            fadeElements.forEach(element => {
                const position = element.getBoundingClientRect();
                if (position.top < window.innerHeight - 100) {
                    element.classList.add('visible');
                }
            });
        }

        // Event listener for scroll
        window.addEventListener('scroll', fadeInOnScroll);

        // Initial check in case elements are already in view
        fadeInOnScroll();
    </script>
    <!-- script pour la partie apres le header -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const title = document.getElementById("title");
            setTimeout(() => {
                title.classList.add("visible");
            }, 300);
        });

    </script>
    <script>
        // Intersection Observer for animations
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        });

        // Targeting elements for animation
        const images = document.querySelectorAll('.img-fluid');
        const textSections = document.querySelectorAll('.text-section');

        images.forEach(image => observer.observe(image));
        textSections.forEach(text => observer.observe(text));
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>