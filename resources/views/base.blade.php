<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
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
	<header class="container-fluid navbar-fixed-top header-mobile">
		<div class="row">
			<div class="col-xs-2 lesspadding">
				<div class="menu-bg">
					<span id="trigger" class="icon-menu-mobile"></span>
				</div>
			</div>
			<div class="col-xs-8 lesspadding">
				<figure class="Image">					
					<img class="Image-logo" src="{{ URL::to('/') }}/images/bg_logotablet.png" alt="3wv">
				</figure>
			</div>
			<div class="col-xs-2 lesspadding">
				<ul class="Social">
					<li class="Social-lan Social-bg">
						<figure>
							<img class="img-lang" src="{{ URL::to('/') }}/images/lang-logo.png" alt="language">
							<img class="img-lang-tablet" src="{{ URL::to('/') }}/images/flag_tablet.png" alt="language">
						</figure>
					</li>
					<li class="Social-face Social-bg">
						<figure>
							<img class="img-fb" src="{{ URL::to('/') }}/images/facebook-mobile-logo.png" alt="facebook">
							<img class="img-fb-tablet" src="{{ URL::to('/') }}/images/fb_tablet.png" alt="facebook">
						</figure>
					</li>
					<li class="Social-twit Social-bg">
						<figure>
							<img class="img-twit" src="{{ URL::to('/') }}/images/twitter-mobile-logo.png" alt="twitter">
							<img class="img-twit-tablet" src="{{ URL::to('/') }}/images/twit_tablet.png" alt="twitter">
						</figure>
					</li>
					<li class="Social-youtube Social-bg">
						<figure>
							<img class="img-tube" src="{{ URL::to('/') }}/images/youtube-mobile-logo.png" alt="youtube">
							<img class="img-tube-tablet" src="{{ URL::to('/') }}/images/tube_tablet.png" alt="youtube">
						</figure>
					</li>
					<li class="Social-insta Social-bg">
						<figure>
							<img class="img-insta" src="{{ URL::to('/') }}/images/instagram-mobile-logo.png" alt="instagram">
							<img class="img-insta-tablet" src="{{ URL::to('/') }}/images/ins_tablet.png" alt="youtube">
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
				</div>
			</div>
			<div class="lesspadding">
				<figure class="Image web-logo">					
					<img class="Image-logo" src="{{ URL::to('/') }}/images/bg_logoweb.png" alt="3wv">
				</figure>
			</div>
			<div class="lesspadding">
				<ul class="Social web-social">
					<li class="Social-lan Social-bg">
						<figure>
							<img class="img-lang-web" src="{{ URL::to('/') }}/images/lang-logo.png" alt="language">							
						</figure>
					</li>
					<li class="Social-face Social-bg">
						<figure>
							<img class="img-fb-web" src="{{ URL::to('/') }}/images/facebook-mobile-logo.png" alt="facebook">							
						</figure>
					</li>
					<li class="Social-twit Social-bg">
						<figure>
							<img class="img-twit-web" src="{{ URL::to('/') }}/images/twitter-mobile-logo.png" alt="twitter">							
						</figure>
					</li>
					<li class="Social-youtube Social-bg">
						<figure>
							<img class="img-tube-web" src="{{ URL::to('/') }}/images/youtube-mobile-logo.png" alt="youtube">							
						</figure>
					</li>
					<li class="Social-insta Social-bg">
						<figure>
							<img class="img-insta-web" src="{{ URL::to('/') }}/images/instagram-mobile-logo.png" alt="instagram">							
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	{!! HTML::script('libs/jquery.slidereveal.min.js'); !!}
	{!! HTML::script('libs/unslider.min.js'); !!}
	@yield('footerscript')

	
	<script>
		var isDown = false;
		wow = new WOW({
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0,          // default
          mobile:       true,       // default
          live:         true        // default
        })
        wow.init();

        $("#slider").show();

        var slider =  $('#slider').slideReveal({
	          trigger: $("#trigger"),   
	          push:false,
	          width: 180,           
	          position: "left",
	          show: function(slider, trigger){
	             $('#slider').css("height", "25.2em");
	          },
	       });

          $("#slider").on("mousedown", function(){
            //alert("aquiii");
            isDown = true;
            return;           
            
          })

          $(document).on("mousedown", function(){
            if(isDown){
              isDown = false;
              return;
            }else{
              slider.slideReveal("hide");
            }
          })


          $(".MainService-list").on("click", function(e){          	
          	$(e.target).find("ul").toggle("slow");
          })



          $("#slider a").on("click", function(ev){
          	ev.preventDefault();
          	var link = $(ev.target).parent().parent().attr("href");
          	//console.log($(ev.target).parent().parent().attr("href"));
          	$("html, body").animate({
		        scrollTop: $(link).offset().top 
		    }, 1000);
          })


          $(".menu-bg-web a").on("click", function(ev){
          	ev.preventDefault();
          	var link = $(ev.target).parent().parent().attr("href");
          	//console.log($(ev.target).parent().parent().attr("href"));
          	$("html, body").animate({
		        scrollTop: $(link).offset().top 
		    }, 1000);
          })


          $(function() {
    		 /*$('.banner').unslider({
    		 	keys: true,    		 	
    		 });*/

    		  var unslider = $('.banner').unslider({
    		  	speed:1000,
    		  	delay: false
    		  });

    		  $('.banner').height("600");
    
			    $('.unslider-arrow').on("click", function(e) {
			    	e.preventDefault();
			        var fn = this.className.split(' ')[1];
			        
			        //  Either do unslider.data('unslider').next() or .prev() depending on the className
			        unslider.data('unslider')[fn]();
			    });
		  });

		  $(".MainService-list-web li:nth-child(1)").mouseover(function(e){
				//alert("test");
				$("#marketing").show();
				$("#web").hide();
				$("#community").hide();
				$("#design").hide();
				$("#multimedia").hide();
			})

		  $(".MainService-list-web li:nth-child(2)").mouseover(function(e){
				//alert("test");
				$("#web").show();
				$("#marketing").hide();
				$("#community").hide();
				$("#design").hide();
				$("#multimedia").hide();
			})

		  $(".MainService-list-web li:nth-child(3)").mouseover(function(e){
				//alert("test");
				$("#community").show();
				$("#marketing").hide();
				$("#web").hide();
				$("#design").hide();
				$("#multimedia").hide();
			})

		  $(".MainService-list-web li:nth-child(4)").mouseover(function(e){
				//alert("test");
				$("#design").show();
				$("#marketing").hide();
				$("#web").hide();
				$("#community").hide();
				$("#multimedia").hide();
			})

		  $(".MainService-list-web li:nth-child(5)").mouseover(function(e){
				//alert("test");
				$("#multimedia").show();
				$("#marketing").hide();
				$("#web").hide();
				$("#community").hide();
				$("#design").hide();
			})

		  var size = $(window).width();

		

			if(size >= 1024){
				$(".MainService-list").unbind("click");

				
			}
			
			$(window).resize(function() {
				var size = $(window).width();
				if(size >= 1024){
					$(".MainService-list").unbind("click");
				}
					
			})



	</script>
</body>
</html>
