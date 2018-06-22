<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('theme/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('theme/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('theme/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

@include('layout.composants.nav')

@yield('content')


@yield('contact')


@include('layout.composants.footer')


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('theme/js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('theme/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('theme/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('theme/js/main.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="{{asset('theme/js/map.js')}}"></script>
	<script src="{{asset('theme/js/main.js')}}"></script>
</body>
</html>