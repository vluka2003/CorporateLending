<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Corporate Leading Center</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">

    <!-- Scrolling css-->
    <link rel="stylesheet" href="css/scrolling-nav.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php include('partials/nav.php') ?>

    <?php include('partials/header.php') ?>

    <section class="bg-primary" id="vision">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded section-heading">Our goal is to help you solidify your plan for success, borrow the necessary capital, and expand your venture to its full potential.

                      We work to make commercial lending easily attainable for our clients to operate their business successfully and gain a profitable outcome to generate growth and expansion.</p>
                    <a href="#about" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <?php include('partials/about.php') ?>


    <?php include('partials/products.php') ?>

    <aside class="bg-dark" id="media">
        <?php include('partials/media.php') ?>
    </aside>

    <?php include('partials/contact.php') ?>

    <footer>
        <div class="container-fluid">
            <div class="col-md-12 text-center">
                <ul class="connected-icons">
                    <li><a target="_blank" href="#"><i class="fa fa-twitter fa-2-5x" style="font-size:3.5rem; color:#000;"></i></a></li>

                    <li><a target="_blank" href="#"><i class="fa fa-facebook fa-2-5x" style="font-size:3.5rem; color:#000;"></i></a></li>

                    <li><a target="_blank" href="#"><i class="fa fa-instagram fa-2-5x" style="font-size:3.5rem; color:#000;"></i></a></li>

                    <li><a target="_blank" href="#"><i class="fa fa-google-plus fa-2-5x" style="font-size:3.5rem; color:#000;"></i></a></li>
                </ul>

                <br>
                <ul class="list-type">
                    <li>
                        <a href="partials/privacy.php">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="partials/terms.php">Terms &amp; Condition </a>
                    </li>
                </ul>
                <br>
                <p class="text-center" style="color:black;">
                    © 2012 Corporate Lending Center, Inc. All Rights Reserved
                </p>

            </div>
        </div>
  </footer>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.js"></script>
    <!-- Nav scrolling -->
    <script src="js/jquery-easing.js"></script>
    <script>

	$(document).ready(function(){
		$('.maps').click(function () {
		  $('.maps iframe').css("pointer-events", "auto");
		});

		$( ".maps" ).mouseleave(function() {
		  $('.maps iframe').css("pointer-events", "none");
		});
	});



/*Animation Js*/

				$(window).scroll(function() {
					$('.card').each(function(){
					var imagePos = $(this).offset().top;

					var topOfWindow = $(window).scrollTop();
						if (imagePos < topOfWindow+950) {
							$(this).addClass("fadeIn");
						}
					});
				});


    </script>

</body>

</html>
