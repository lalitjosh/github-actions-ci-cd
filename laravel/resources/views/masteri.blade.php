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
		<a href="home.html" class="logo-area">
			<img src="{{asset('img/logo.png')}}" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="phone-number">+675 334 567 223</div>
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
 