<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>LED SCHOOL</title>
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/ledSprit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
      <style>
 body {
    font-family: 'Poppins', sans-serif;
    color: #333;
}

h2 {
    color: #0b1da5;
    padding-top: 15px;
    font-size: 22px;
    
}

p {
    font-size: 17px;
    line-height: 1.5;
    text-align:justify ;
    
}

.section-block {
    margin-bottom: 40px;
    gap: 20;
}

.section-block img {
    max-height: 500px;
    object-fit: cover;
}
      </style>
     
</head>
<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98" class="bg-light">  
   <!-- Start header -->
     <?php include'header.php'?>
    <!-- End header -->

    <!--section-->
    <section class="inner_banner">
        <div class="Superpose"></div> 
        <div class="container">
            <div class="full animate__animated animate__fadeInDown">
                <h3>Esprit led school</h3>
            </div>
        </div>
    </section>
    <!--endsection-->

    <div class="container my-5">
        <!-- Section 1 -->
        <div class="row section-block">
            <div class="col-md-6">
                <img src="images/learning by doing.jpg" alt="Pédagogie par l'action" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2>Pédagogie par l'action (Learning by Doing)</h2>
                <p>
                    L'apprentissage se fait par la pratique, via des projets concrets, des simulations et des ateliers.
                    Cela permet d'acquérir des compétences immédiatement applicables sur le marché du travail.
                </p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row section-block">
            <div class="col-md-6 order-md-2">
                <img src="images/learning by doing.jpg" alt="Compétences transversales" class="img-fluid rounded">
            </div>
            <div class="col-md-6 order-md-1">
                <h2>Développement de compétences transversales (Hard & Soft Skills)</h2>
                <p>
                    LED School forme des professionnels complets en développant à la fois les compétences techniques
                    (hard skills) spécifiques aux domaines de l'entrepreneuriat, du digital et du management, et les
                    compétences comportementales (soft skills) telles que le leadership, la créativité, le travail en
                    équipe et la communication.
                </p>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="row section-block">
            <div class="col-md-6">
                <img src="images/learning by doing.jpg" alt="Employabilité" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2>Employabilité et insertion professionnelle</h2>
                <p>
                    L'objectif principal est de garantir l'employabilité des étudiants. Cela passe par un accompagnement
                    personnalisé (mentorat, coaching), un réseau d'entreprises partenaires pour des stages et des
                    emplois, et une aide à la recherche d'emploi (CV, préparation aux entretiens).
                </p>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="row section-block">
            <div class="col-md-6 order-md-2">
                <img src="images/learning by doing.jpg" alt="Innovation et adaptation" class="img-fluid rounded">
            </div>
            <div class="col-md-6 order-md-1">
                <h2>Innovation et adaptation</h2>
                <p>
                    LED School s'adapte aux évolutions constantes du marché du travail. La formation est conçue pour
                    équiper les étudiants des outils nécessaires pour innover, s'adapter et relever les défis futurs.
                </p>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="row section-block">
            <div class="col-md-6">
                <img src="images/learning by doing.jpg" alt="Communauté et écosystème" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2>Communauté et écosystème</h2>
                <p>
                    L'école cultive un environnement d'apprentissage stimulant et collaboratif, favorisant les échanges
                    entre étudiants, professionnels et entreprises partenaires. Cette communauté dynamique encourage
                    l’enrichissement mutuel et le développement personnel.
                </p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'?>

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2024 </p>
                </div>
            </div>
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
