<!DOCTYPE html>
<html lang="en">
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
    <!--ecosysteme CSS-->
    <link rel="stylesheet" href="css/ecosysteme.css">
   
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
   

    </style>
</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98" class="bg-light">
     <!-- Start header -->
   <?php include 'header.php'?>
    <!-- End header -->

    <!-- section -->

    <section class="inner_banner">
        <div class="Superpose"></div> 
        <div class="container">
            <div class="full animate__animated animate__fadeInDown">
                <h3>Ecosysteme Led school</h3>
            </div>
        </div>
    </section>

    <!-- end section -->
 
   <!-- Écosystème LED School Section -->
  <div class="container my-5">
  
    <p class="section-title">Plus qu'une école, un véritable écosystème d'innovation !</p>
    <p class="ecosystem-text">LED School n'est pas seulement un lieu d'apprentissage, mais un véritable carrefour où professionnels et étudiants se rencontrent quotidiennement, favorisant l'échange d'idées, l'innovation et la collaboration.</p>

    <!-- LED School Facilities -->
    <div class="row ligne">
      <div class="col-md-6 colonne ">
        <div class="borders">
          <p class="ecosystem-title">L’Association Waxangari Labs</p>
          <p class="ecosystem-text">Waxangari Labs est une association engagée dans l'empowerment des jeunes, des femmes et des populations rurales. Elle permet aux étudiants de militer pour des causes essentielles telles que l'inclusion numérique, l'économie circulaire, la médiation culturelle, et l'insertion socio-professionnelle des jeunes.</p>
        </div>
        <div class="borders">
          <p class="ecosystem-title">L’Agence Web et Digitale</p>
          <p class="ecosystem-text">Notre agence Web et digitale permet aux étudiants d'acquérir une expérience pratique en travaillant sur des projets réels. Les étudiants apprennent à concevoir, développer et gérer des solutions numériques tout en se familiarisant avec les dernières tendances du marché.</p>
        </div>
        <div class="borders">
          <p class="ecosystem-title">Le Cabinet d’Étude et de Conseils</p>
          <p class="ecosystem-text">Le cabinet d'étude et de conseils offre une expertise précieuse, permettant aux étudiants de comprendre les enjeux stratégiques des entreprises. Ils participent à des études de cas et développent des compétences analytiques essentielles pour leur carrière.</p>
        </div>
      </div>
      
      <div class="col-md-6 colonne ">
        <div class="borders">
          <p class="ecosystem-title">L’Incubateur d’entreprises innovantes</p>
          <p class="ecosystem-text">L'incubateur d'entreprises innovantes Waxangari Labs soutient les projets entrepreneuriaux des étudiants. Il offre des ressources, des conseils et un réseau de mentors pour aider les jeunes entrepreneurs à transformer leurs idées en entreprises viables.</p>
        </div>
        <div class="borders">
          <p class="ecosystem-title">Le Low Tech Labs</p>
          <p class="ecosystem-text">Notre Low Tech Labs est un espace où les étudiants peuvent expérimenter et créer. Équipés d'outils modernes, ces laboratoires encouragent l'innovation à travers la fabrication numérique et les technologies durables.</p>
        </div>
        <div class="borders">
          <p class="ecosystem-title">Réseau d’organisations partenaires</p>
          <p class="ecosystem-text">Le réseau d’organisations partenaires de LED School enrichit notre écosystème. Ces collaborations offrent aux étudiants des opportunités de stages, des projets collaboratifs et un accès à un large éventail de ressources et d'expertises.</p>
        </div>
      </div>
    </div>
  </div>
<!-- endsection-->
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
        // Animation lors du scroll
        const sections = document.querySelectorAll('section');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        sections.forEach(section => {
            observer.observe(section);
        });
    </script>
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
    <!-- <script>
        // Fonction pour vérifier si un élément est visible à l'écran
        function isElementInViewport(el) {
          const rect = el.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
    
        // Fonction pour afficher les éléments au défilement
        function handleScrollAnimation() {
          const elements = document.querySelectorAll('.section-title, .facility-title, .facility-text, .ecosystem-title, .ecosystem-text');
          elements.forEach(element => {
            if (isElementInViewport(element)) {
              element.classList.add('show');
            }
          });
        }
    
        // Lancer la fonction lors du défilement
        window.addEventListener('scroll', handleScrollAnimation);
    
        // Lancer la fonction au chargement pour les éléments visibles dès le début
        window.addEventListener('load', handleScrollAnimation);
      </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>