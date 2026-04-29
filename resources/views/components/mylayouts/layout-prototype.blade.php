<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RecipeNest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('template_default/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template_default/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('template_default/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_default/css/style.css') }}">
  </head>
  <body>
{{ $slot }}
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('chefs.index') }}">Chefs</a></li>
					<li><a href="{{ route('recipes.index') }}">Recipes</a></li>
					<li><a href="{{ route('filament.author.pages.dashboard') }}">Dashboard</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-4"><a href="{{route ('home') }}" style="background-image: url(template_default/images/gradient.jpeg);">Recipe <span>Nest</span></a></h1>
				<div class="mb-4">
					<h3>Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
				</div>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('template_default/js/jquery.min.js') }}"></script>
  <script src="{{ asset('template_default/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('template_default/js/popper.min.js') }}"></script>
  <script src="{{ asset('template_default/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template_default/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('template_default/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('template_default/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('template_default/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template_default/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('template_default/js/aos.js') }}"></script>
  <script src="{{ asset('template_default/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('template_default/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('template_default/js/google-map.js') }}"></script>
  <script src="{{ asset('template_default/js/main.js') }}"></script>

  </body>
</html>