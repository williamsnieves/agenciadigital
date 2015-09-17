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
	
	
  	
	
	@yield('content')

	<footer>
		@include('footer')
	</footer>

	@yield('footerscript')
</body>
</html>
