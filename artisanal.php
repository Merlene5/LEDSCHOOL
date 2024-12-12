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
    <!-- <link rel="stylesheet" href="css/custom.css" /> -->
    <!-- <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }
        
        .card {
      box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
      border: none;
      border-radius: 10px;
      transition: transform 0.2s;
      cursor: pointer;
    }
     
    .card img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      border: none;
    }
    .card img {
    height: 200px; /* Hauteur fixe pour les images */
    object-fit: cover; /* Pour garder le ratio d'aspect */
}
    .card-body i {
      color: #ecdb07;
      margin-right: 5px;
    }
    .card-text {
      color: black;
    }
    a.card-link {
      text-decoration: none;
      color: inherit;
    }

    </style>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98" style="font-family: 'Poppins', sans-serif; background-color:#fff ;">

       <!-- Start header -->
    <?php include 'header.php'?>
    <!-- End header -->
	
    <!-- section -->

    <section class="inner_banner">
        <div class="Superpose"></div> 
        <div class="container">
            <div class="full animate__animated animate__fadeInDown">
                <h3>Entrepreneur Artisanal </h3>
            </div>
        </div>
    </section>

    <!-- end section -->

 <section>
    <div class="container mt-5">
        <!-- Title -->
        <h2 class="text-center fw-bold mb-4" >Quelle formation souhaitez-vous suivre, en tant qu'entrepreneur artisanal ?</h2>
      
        <!-- Cards Section -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="Couture.php" class="card-link">
                    <div class="card">
                      <img src="images/sewing-1896454.jpg"class="card-img-top" alt="couture">
                      <div class="card-body">
                        <p class="card-text"><i class="fas fa-book"></i> <span style="font-weight: 700;">Formation</span> : Couture</p>
                        <p class="card-text"><i class="fas fa-clock"></i> <span style="font-weight: 700;">Durée</span>: 12 mois </p>
                      </div>
                    </div>
                  </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="Tisserand.php" class="card-link">
                    <div class="card">
                      <img src="images/tissserande .png" class="card-img-top" alt="tissernde">
                      <div class="card-body">
                        <p class="card-text"><i class="fas fa-book"></i> <span style="font-weight: 700;">Formation</span> : Tisserand</p>
                        <p class="card-text"><i class="fas fa-clock"></i> <span style="font-weight: 700;">Durée</span> : 12 mois</p>
                      </div>
                    </div>
                  </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="Maroquinerie.php" class="card-link">
                    <div class="card">
                      <img src="images/maroquinerie.png" class="card-img-top" alt="maroquinerie">
                      <div class="card-body">
                        <p class="card-text"><i class="fas fa-book"></i> <span style="font-weight: 700;">Formation</span> : Maroquinerie</p>
                        <p class="card-text"><i class="fas fa-clock"></i><span style="font-weight: 700;">Durée</span> : 12 mois</p>
                      </div>
                    </div>
                  </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="Coordonnerie.php" class="card-link">
                    <div class="card">
                      <img src="images/shoemaker-workshop-making-shoes.jpg" class="card-img-top" alt="Coordornerie">
                      <div class="card-body">
                        <p class="card-text"><i class="fas fa-book"></i><span style="font-weight: 700;">Formation</span> : Coordornerie</p>
                        <p class="card-text"><i class="fas fa-clock"></i> <span style="font-weight: 700;">Durée</span>: 12 mois</p>
                      </div>
                    </div>
                  </a>
            </div>
        </div>
    </div>
    
    
    
 </section>
    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2024</p>
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
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
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
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
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