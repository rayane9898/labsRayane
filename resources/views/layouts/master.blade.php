<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LABS</title>
    <link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/flaticon.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/owl.carousel.css")}}"/>
	<link rel="stylesheet" href="{{asset("css/style.css")}}"/>

</head>
<body>

    <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
    </div>
    
    <!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
	<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="home.html">Home</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="elements.html">Elements</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

    @yield('content')
    



    <!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
	<script>

		$(document).ready(function() {
		
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
		
		var page = $(this).attr('href'); // Page cible
		
		var speed = 750; // Durée de l'animation (en ms)
		
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
		
		return false;
		});
		});
		
	</script>
    
</body>
</html>