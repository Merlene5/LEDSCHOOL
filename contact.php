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
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <style>
         body {
            background-color: #f8f9fa;
        }

        .contact-container {
            background-color: white;
            margin: 50px;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .info {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .social-icons a {
            margin-right: 10px;
            color: #0077b6;
            font-size: 20px;
        }

        .social-icons a:hover {
            color: #0056b3;
        }

        textarea {
            resize: none;
        }

      

      
    </style>

    
</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98" >
<!--header-->
<?php include 'header.php'?>
    <!-- End header -->
    <!--section-->
    <section class="inner_banner">
        <div class="Superpose"></div> 
        <div class="container">
            <div class="full animate__animated animate__fadeInDown">
                <h3> Contact</h3>
            </div>
        </div>
    </section>
    <!--endsection-->
    <!--section-->

    <div class="container contact-container">
        <div class="row">
            <!-- Formulaire de contact -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom & Prénoms *</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Objet *</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numéro de téléphone *</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <img src="https://flagcdn.com/w40/bj.png" alt="BJ Flag" style="width: 20px;"> +229
                            </span>
                            <input type="tel" class="form-control" id="phone" placeholder="Votre numéro" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control" id="message" rows="5" maxlength="180" required></textarea>
                        <small class="text-muted">0 / 180</small>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                </form>
            </div>
            <!-- Informations de contact -->
            <div class="col-md-6" style="margin-top:80px">
                <p class="info">
                    <span style="font-weight: 600; font-size:1.1rem;"> <i class="fa-solid fa-map-marker-alt me-2" style="color:#ecdb07"></i> Adresse</span><br>
                    Ladjifarani,voie Camp Séro Kpéra  rue Cap Finance,Parakou, Benin
                </p>
                <p class="info">
                    <span style="font-weight: 600; font-size: 1.1rem;">  <i class="fa-solid fa-phone me-2" style="color:#ecdb07"></i>   Téléphone</span><br>
                    (+229) 01 67 58 96 31 <br> (+299) 01 63 10 00 10  <br>(+229) 01 64 19 38 17
                </p>
                <p class="info">
                    <span style="font-weight: 600; font-size: 1.1rem;"> <i class="fa-solid fa-envelope me-2" style="color:#ecdb07"></i>  Email</span><br>
                    contact@example.com
                </p>
                <p class="info"><span style="font-weight: 600; font-size: 1.1rem;">Suivez-nous</span></p>
                <div class="social-icons">
                    <a href="#" class="me-2 text-primary"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="me-2 text-info"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="me-2 text-danger"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="me-2 text-primary"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--endsection-->

    <!-- Start Footer -->
    <?php include 'footer.php'?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>