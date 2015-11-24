<!DOCTYPE html>
<html lang="en">
<head>
	<title>LunchMoneyGame</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sarah Maston">
	<meta name="keywords" content="obesity, save money, diet, health game, health tracker">
	<meta name="description" content="Game that helps you change your eating behaviors... etc..">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="css/lavish-bootstrap.css"> -->
	<link rel="stylesheet" href="/css/site.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
<!-- begin bootstrap container -->
<div class="container"> 


<!--  begin header -->
<header class="row">
		{{-- Main page nav will be yielded here --}}
        @yield('nav')
</header>
<!--  end header -->
<section class="row kpi-bar">
		{{-- kpi bar will be yielded here --}}
        @yield('kpi-bar')
</section>

<main class="row">
    @if(\Session::has('flash_message'))
        <div class='flash_message'>
            {{ \Session::get('flash_message') }}
        </div>
    @endif
		{{-- Main page content will be yielded here --}}
        @yield('content')

</main>


<!-- begin footer -->
<footer class="row">
	<p class="col-md-12" id="footer-copyright">
		&copy;2015 LunchMoneyGame.com
	</p>
</footer>
<!-- end footer -->

</div>
</body>

</html>
