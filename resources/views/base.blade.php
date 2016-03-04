<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
	<meta name="description" content="3WV is the most convenient multi-faceted and international web marketing agency for you. With more than seventeen years of experience on bringing success to our clients, we are unique because we understand that the technical value is just as important as the aesthetical one, and the message is as vital as the way you deliver it. Winner of numerous national and international awards, 3WV is known as one of the most diversified companies in its field">
	<meta name="keywords" content="web site, multimedia, mobil application, 3d animation, video, video mapping, online campaing, promotional campaing, social network, interactive wall, digitall wall, media wall, web design">
	<title>@yield('title')</title>
	
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
	<link rel="shortcut icon" type="image/png" href="{{ URL::to('/') }}/images/favicon.png"/>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	{!! HTML::style('css/fonts.css'); !!}
	{!! HTML::style('css/styles.css'); !!}



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>




	
</head>
<body>
	<header class="container-fluid navbar-fixed-top header-mobile">
		<div class="row">
			<div class="col-xs-2 lesspadding">
				<div class="menu-bg">
					<span id="trigger" class="icon-menu-mobile"></span>
				</div>
			</div>
			<div class="col-xs-8 lesspadding">
				<figure class="Image">					
					<img class="Image-logo" src="{{ URL::to('/') }}/images/bg_logoweb.png" alt="3wv">
				</figure>
			</div>
			<div class="col-xs-2 lesspadding">
				<ul class="Social">
					<li class="Social-lan Social-bg">
						<figure>							
							@if($lang == 'en')							
								<a href="{{ URL::to('/') }}/language?locale=es"><img class="img-lang" src="{{ URL::to('/') }}/images/english.png" alt="language"><input type="hidden" value="en" name="locale"/></a>
								<a href="{{ URL::to('/') }}/language?locale=es"><img class="img-lang-tablet" src="{{ URL::to('/') }}/images/flag_tablet_english.png" alt="language"><input type="hidden" value="en" name="locale"/></a>							
							@else
								<a href="{{ URL::to('/') }}/language?locale=en"><img class="img-lang" src="{{ URL::to('/') }}/images/spanish.png" alt="language"><input type="hidden" value="en" name="locale"/></a>
								<a href="{{ URL::to('/') }}/language?locale=en"><img class="img-lang-tablet" src="{{ URL::to('/') }}/images/flag_tablet.png" alt="language"><input type="hidden" value="en" name="locale"/></a>
							@endif
						</figure>
							
					</li>
					<li class="Social-face Social-bg">
						<figure>
							<a href="http://www.facebook.com/3wvgroup" target="blank"><img class="img-fb" src="{{ URL::to('/') }}/images/facebook-mobile-logo.png" alt="facebook"></a>
							<a href="http://www.facebook.com/3wvgroup" target="blank"><img class="img-fb-tablet" src="{{ URL::to('/') }}/images/fb_tablet.png" alt="facebook"></a>
						</figure>
					</li>
					<li class="Social-twit Social-bg">
						<figure>
							<a href="http://twitter.com/3WVGroup" target="blank"><img class="img-twit" src="{{ URL::to('/') }}/images/twitter-mobile-logo.png" alt="twitter"></a>
							<a href="http://twitter.com/3WVGroup" target="blank"><img class="img-twit-tablet" src="{{ URL::to('/') }}/images/twit_tablet.png" alt="twitter"></a>
						</figure>
					</li>
					<li class="Social-youtube Social-bg">
						<figure>
							<a href="http://www.linkedin.com/company/3wvgroup?trk=top_nav_home" target="blank"><img class="img-tube" src="{{ URL::to('/') }}/images/linkedin_mobile_logo.png" alt="linkedin"></a>
							<a href="http://www.linkedin.com/company/3wvgroup?trk=top_nav_home" target="blank"><img class="img-tube-tablet" src="{{ URL::to('/') }}/images/linkedin_tablet.png" alt="linkedin"></a>
						</figure>
					</li>
					<li class="Social-insta Social-bg">
						<figure>
							<a href="http://instagram.com/3Wvgroup/" target="blank"><img class="img-insta" src="{{ URL::to('/') }}/images/instagram-mobile-logo.png" alt="instagram"></a>
							<a href="http://instagram.com/3Wvgroup/" target="blank"><img class="img-insta-tablet" src="{{ URL::to('/') }}/images/ins_tablet.png" alt="youtube"></a>	
						</figure>
					</li>
					<li class="Social-pinte Social-bg">
						<figure>
							<a href="https://www.pinterest.com/3wvgroup/" target="blank"><img class="img-pinte" src="{{ URL::to('/') }}/images/pinterest_mobile.png" alt="facebook"></a>
							<a href="https://www.pinterest.com/3wvgroup/" target="blank"><img class="img-pinte-tablet" src="{{ URL::to('/') }}/images/pinterest_tablet.png" alt="facebook"></a>
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<header class="header-web">
		<div class="row">
			<div class="lesspadding">
				<div class="menu-bg-web">
					<ul>
						<li>
							<a href="#home">
								<span id="home-icon" style=":hover{color:lightblue;}" class="icon-home"></span>
							</a>
						</li>
						<li>
							<a href="#about">
								<span  id="about-icon" class="icon-users"></span>	
							</a>
						</li>
						<li>
							<a href="#choose">
								<span  id="choose-icon" class="icon-checkmark"></span>
							</a>
						</li>
						<li>
							<a href="#services">
								<span  id="services-icon" class="icon-cogs"></span>
							</a>
						</li>
						<li>
							<a href="#alliances">
								<span  id="alliances-icon" class="icon-link"></span>	
							</a>
						</li>
						<li>
							<a href="#clients">
								<span  id="clients-icon" class="icon-address-book"></span>	
							</a>
						</li>
						<li>
							<a href="#portfolio">
								<span  id="portfolio-icon" class="icon-images"></span>
							</a>
						</li>
						<li>
							<a href="#contact">
								<span  id="contact-icon" class="icon-envelop"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="lesspadding">
				<figure class="Image web-logo">					
					<img class="Image-logo" src="{{ URL::to('/') }}/images/bg_logotablet.png" alt="3wv">
				</figure>
			</div>
			<div class="lesspadding">
				<ul class="Social web-social">
					<li class="Social-lan Social-bg">
						<figure>
							@if($lang == 'en')							
								<a href="{{ URL::to('/') }}/language?locale=es"><img class="img-lang-web" src="{{ URL::to('/') }}/images/english.png" alt="language"><input type="hidden" value="en" name="locale"/></a>							
							@else
								<a href="{{ URL::to('/') }}/language?locale=en"><img class="img-lang-web" src="{{ URL::to('/') }}/images/lang-logo.png" alt="language"><input type="hidden" value="en" name="locale"/></a>
							@endif
						</figure>
					</li>
					<li class="Social-face Social-bg">
						<figure>
							<a href="http://www.facebook.com/3wvgroup" target="blank"><img class="img-fb-web" src="{{ URL::to('/') }}/images/facebook-mobile-logo.png" alt="facebook"></a>							
						</figure>
					</li>
					<li class="Social-twit Social-bg">
						<figure>
							<a href="http://twitter.com/3WVGroup" target="blank"><img class="img-twit-web" src="{{ URL::to('/') }}/images/twitter-mobile-logo.png" alt="twitter"></a>							
						</figure>
					</li>
					<li class="Social-youtube Social-bg">
						<figure>
							<a href="http://www.linkedin.com/company/3wvgroup?trk=top_nav_home" target="blank"><img class="img-tube-web" src="{{ URL::to('/') }}/images/linkedin_mobile_logo.png" alt="linkedin"></a>							
						</figure>
					</li>
					<li class="Social-insta Social-bg">
						<figure>
							<a href="http://instagram.com/3Wvgroup/" target="blank"><img class="img-insta-web" src="{{ URL::to('/') }}/images/instagram-mobile-logo.png" alt="instagram"></a>							
						</figure>
					</li>
					<li class="Social-insta Social-bg">
						<figure>
							<a href="https://www.pinterest.com/3wvgroup/" target="blank"><img class="img-pinte-web" src="{{ URL::to('/') }}/images/pinterest_mobile.png" alt="pinteres"></a>							
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<nav class="Navigation" id="slider">
		<ul>
			<li>
				<a href="#home">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_home.png" alt="">	
					</figure>
				</a>
			</li>
			<li>
				<a href="#about">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_about.png" alt="">	
					</figure>	
				</a>
			</li>
			<li>
				<a href="#choose">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_choose.png" alt="">	
					</figure>
				</a>
			</li>
			<li>
				<a href="#services">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_gears.png" alt="">	
					</figure>
				</a>
			</li>
			<li>
				<a href="#alliances">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_alliance.png" alt="">	
					</figure>	
				</a>
			</li>
			<li>
				<a href="#clients">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_clients.png" alt="">	
					</figure>	
				</a>
			</li>
			<li>
				<a href="#portfolio">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_portfolio.png" alt="">	
					</figure>
				</a>
			</li>
			<li>
				<a href="#contact">
					<figure>
						<img src="{{ URL::to('/') }}/images/icon_contact.png" alt="">	
					</figure>
				</a>
			</li>
		</ul>
	</nav>
	
	
  	
	
	@yield('content')

	<footer>
		@include('footer')
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	{!! HTML::script('libs/jquery.slidereveal.min.js'); !!}
	{!! HTML::script('libs/unslider.min.js'); !!}
	{!! HTML::script('js/filters.js'); !!}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
	@yield('footerscript')
	{!! HTML::script('js/main.js'); !!}
	
</body>
</html>
