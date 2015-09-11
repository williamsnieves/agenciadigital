<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable = no" />
	<title>@yield('title')</title>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	{!! HTML::style('css/fonts.css'); !!}
	{!! HTML::style('css/appstyles.css'); !!}
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css' />

	


	
</head>
<body>
	<header class="Header">
		<div class="Header-menu">
			menu
		</div>
		<div class="Header-logo">
			<figure>
				<img src="{{ URL::to('/') }}/images/logo_3wv_mobile.png" alt="3wv">
			</figure>
		</div>
	</header>
	
	
  	
	
	@yield('content')

	<footer>
		@include('footer')
	</footer>

	@yield('footerscript')
</body>
</html>
