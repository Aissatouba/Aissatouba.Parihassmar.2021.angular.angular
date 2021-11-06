<!DOCTYPE html>
<!--
	Awesome Responsive Template
	templatestock.co
-->
<html>
<head>
	<title>Covoiturage</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

	<!-- Goggle Font -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<!-- Animation Css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">


</head>
<body>
<!-- Header -->
<div class="header-div">

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo-div bounceInLeft wow" data-wow-duration="2s">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SeptPlaces</a>
    </div>
	<div class="collapse navbar-collapse top-right-menu-ul bounceInRight wow" id="bs-example-navbar-collapse-1" data-wow-duration="4s">
		<ul class="nav navbar-nav navbar-right">
			@if (Route::has('login'))
			@auth
		  <li><a href="{{ url('/home') }}" ><button class="btn btn-primary">Home</button> </a></li>
		  @else
		  <li><a href="{{ route('login') }}" ><button class="btn btn-primary">Login</button></a></li>
		  @if (Route::has('register'))
		  <li><a href="{{ route('register') }}" ><button class="btn btn-primary">Register</button></a></li>
		  @endif
		@endauth
	@endif
		</ul>
	  </div><!-- End navbar-collapse -->
  </div>
</nav>


<div class="container wow bounceInDown" data-wow-duration="5s">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 text-center slide-text">
			<h1>Covoiturage Sénégal</h1>
			<p>Chercher votre destination et contactez le chauffeur pour réserver votre place</p>
		</div><!-- End col-md-8-->
		<div class="col-md-offset-2"></div><!-- End col-md-offset-2 -->
	</div><!-- End Row -->
</div><!-- End Contanier -->

</div><!-- End header-div -->

<div class="container">
	@yield('content')
</div>
<!-- Feature -->
<div class="container" id="features">
	@yield('now')
</div>
<div class="more-feature-div">
	@yield('nury')
</div>
<!-- Services -->

<div class="container" id="Services">
	@yield('naru')
</div><!-- End container -->

<!-- End Services -->



<!-- End Testimonial -->

<!-- Footer -->
<footer>
    <div class="container">
    	
        <div class="row">
            <div class="col-sm-12 footer-copyright">
            	SeptPlaces
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<script type="text/javascript" src="{{ asset('js/jquery-main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>

<script>
	new WOW().init();
</script>

</body>
</html>