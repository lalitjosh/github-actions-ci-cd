<!DOCTYPE html>
<html lang="en">
<head>
	<title>Placemaker Associates</title>
	<meta charset="UTF-8">
	<meta name="description" content="Placemaker Associates">
	<meta name="keywords" content="Placemaker Associates, architecture, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section start -->   
	<header class="header-area">
		<a href="{{route('index')}}" class="logo-area">
			<img src="{{asset('img/logo.png')}}" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="phone-number">+977- 9827312927 </div>
		<nav class="nav-menu">
			<ul>
				<li class="active"><a href="{{route('index')}}">Home</a></li>
				<li><a href="{{route('about')}}">About us</a></li>
				<li><a href="{{route('service')}}">Services</a></li>
				<li><a href="{{route('portfolio')}}">Portfolio</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->  
<body>
@yield('content')
<!-- Footer section start -->
	<footer class="footer-section">
		<div class="footer-social">
			<div class="social-links">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="placemaker.associates?igshid=MzNlNGNkZWQ4Mg=="><i class="fa fa-instagram"></i></a>
				<a href="https://www.facebook.com/Placemaker.associates"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-3">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-item">
								<ul>
									<li><a href="{{route('index')}}">Home</a></li>
									<li><a href="{{route('about')}}">About us</a></li>
									<li><a href="{{route('service')}}">Services</a></li>
									<li><a href="{{route('portfolio')}}">Portfolio</a></li>
									<li><a href="{{route('blog')}}">Blog</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-item">
								<ul>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Help Desk</a></li>
									<li><a href="#">Job Aplications</a></li>
									<li><a href="#">Site Map</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-item">
								<ul>
									<li><a href="#">Privacy</a></li>
									<li><a href="{{route('contact')}}">Contact us</a></li>
									<li><a href="#">Newsletter</a></li>
									<li><a href="#">Clients Testimonials</a></li>
									<li><a href="#">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
     <div class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved. <br>Placemaker Associates  </div>
   
	</footer>
	<!-- Footer section end -->
<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>	
 