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
	{!! HTML::style('css/styles.css'); !!}

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css' />

	


	
</head>
<body>
	<header class="container-fluid navbar-fixed-top">
		<div class="row">
			<div class="col-xs-2 lesspadding">
				<div class="menu-bg">
					<span class="icon-menu-mobile"></span>
				</div>
			</div>
			<div class="col-xs-8 lesspadding">
				<figure class="Image">
					<img class="Image-logo" src="{{ URL::to('/') }}/images/logo_3wv_mobile.png" alt="3wv">
				</figure>
			</div>
			<div class="col-xs-2 lesspadding">
				<ul class="Social">
					<li class="Social-lan Social-bg">
						<figure>
							<img src="{{ URL::to('/') }}/images/lang-logo.png" alt="language">
						</figure>
					</li>
					<li class="Social-face Social-bg">
						<figure>
							<img src="{{ URL::to('/') }}/images/facebook-mobile-logo.png" alt="facebook">
						</figure>
					</li>
					<li class="Social-twit Social-bg">
						<figure>
							<img src="{{ URL::to('/') }}/images/twitter-mobile-logo.png" alt="twitter">
						</figure>
					</li>
					<li class="Social-youtube Social-bg">
						<figure>
							<img src="{{ URL::to('/') }}/images/youtube-mobile-logo.png" alt="youtube">
						</figure>
					</li>
					<li class="Social-insta Social-bg">
						<figure>
							<img src="{{ URL::to('/') }}/images/instagram-mobile-logo.png" alt="instagram">
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<nav class="Navigation">
		<ul>
			<li><a href="#home">home</a></li>
			<li><a href="#about">about</a></li>
			<li><a href="#choose">choose</a></li>
			<li><a href="#services">services</a></li>
			<li><a href="#alliances">alliances</a></li>
			<li><a href="#clients">clients</a></li>
			<li><a href="#portfolio">portfolio</a></li>
			<li><a href="#contact">contact</a></li>
		</ul>
	</nav>
	
	
  	
	
	@yield('content')

	<footer>
		@include('footer')
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	@yield('footerscript')


	<script>
		wow = new WOW({
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0,          // default
          mobile:       true,       // default
          live:         true        // default
        })
        wow.init();
	</script>
</body>
</html>
