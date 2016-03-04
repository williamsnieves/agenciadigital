(function(){
	var counterClients = 0;
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
          setTimeout(function(){
          	slider.slideReveal("hide");
          },1000)              
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
      	var link = $(ev.target).parent().attr("href");
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

		  var unsliderTablet = $('.banner-tablet').unslider({
		  	speed:1000,
		  	delay: false
		  });

		  $('.banner-tablet').height("600");

		  var unsliderMobile = $('.banner-mobile').unslider({
		  	speed:1000,
		  	delay: false
		  });

		  $('.banner-mobile').height("600");

		    $('.unslider-arrow').on("click", function(e) {
		    	console.log("aqui");
		    	counterClients++;
		    	e.preventDefault();	

		    	/*if(counterClients == 5){
		    		console.log("mojon");
		    	} */

		    	//var attrLn = $(e.currentTarget).parent().children('ul').children('li').children('div')[4]

		    	/*if($(attrLn).attr("data-length") === "5"){
		    		console.log("estirar height");
		    	}*/
		    	//console.log($(e.currentTarget).parent().children('ul').children('li').children('div')[4]);

		        var fn = this.className.split(' ')[1];
		        
		        //  Either do unslider.data('unslider').next() or .prev() depending on the className
		        unslider.data('unslider')[fn]();
		    });

		    $('.unslider-arrow-tablet').on("click", function(e) {			    	
		    	e.preventDefault();
		        var fn = this.className.split(' ')[1];
		        
		        //  Either do unslider.data('unslider').next() or .prev() depending on the className
		        unsliderTablet.data('unslider')[fn]();
		    });

		    $('.unslider-arrow-mobile').on("click", function(e) {			    	
		    	e.preventDefault();
		        var fn = this.className.split(' ')[1];
		        
		        //  Either do unslider.data('unslider').next() or .prev() depending on the className
		        unsliderMobile.data('unslider')[fn]();
		    });

		    $('.carousel').carousel({
			  interval: 100000
			})

	  });
		
	   /*$(".MainService-list-web li").mouseout(function(e){
			//alert("test");
			$("#multimedia").hide();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
			$(".MainService-list-web li").removeClass('MainService-list-web-hover');
	   })*/

	  $(".MainService-list-web li:nth-child(1)").on('mouseover',function(e){
			//alert("test");
			$(".MainService-list-web li:nth-child(2)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(3)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(4)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(5)").removeClass('MainService-list-web-hover');
			$(this).addClass('MainService-list-web-hover');
			$("#marketing").show();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
			$("#multimedia").hide();
	  })

	  /*$(".MainService-list-web li:nth-child(1)").mouseout(function(e){
			//alert("test");
			$("#multimedia").hide();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
	   })*/

	  $(".MainService-list-web li:nth-child(2)").on('mouseover',function(e){
			//alert("test");
			$(".MainService-list-web li:nth-child(1)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(3)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(4)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(5)").removeClass('MainService-list-web-hover');
			$(this).addClass('MainService-list-web-hover');
			$("#web").show();
			$("#marketing").hide();
			$("#community").hide();
			$("#design").hide();
			$("#multimedia").hide();
		})

	  /*$(".MainService-list-web li:nth-child(2)").mouseout(function(e){
			//alert("test");
			$("#multimedia").hide();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
	   })*/

	  $(".MainService-list-web li:nth-child(3)").on('mouseover',function(e){
			//alert("test");
			$(".MainService-list-web li:nth-child(1)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(2)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(4)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(5)").removeClass('MainService-list-web-hover');
			$(this).addClass('MainService-list-web-hover');
			$("#community").show();
			$("#marketing").hide();
			$("#web").hide();
			$("#design").hide();
			$("#multimedia").hide();
		})

	  /*$(".MainService-list-web li:nth-child(3)").mouseout(function(e){
			//alert("test");
			$("#multimedia").hide();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
	   })*/

	  $(".MainService-list-web li:nth-child(4)").on('mouseover',function(e){
			//alert("test");
			$(".MainService-list-web li:nth-child(1)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(2)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(3)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(5)").removeClass('MainService-list-web-hover');
			$(this).addClass('MainService-list-web-hover');
			$("#design").show();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#multimedia").hide();
		})

	  /*$(".MainService-list-web li:nth-child(4)").mouseout(function(e){
			//alert("test");
			$("#multimedia").hide();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
	   })*/

	  $(".MainService-list-web li:nth-child(5)").on('mouseover', function(e){
			//alert("test");
			$(".MainService-list-web li:nth-child(1)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(2)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(3)").removeClass('MainService-list-web-hover');
			$(".MainService-list-web li:nth-child(4)").removeClass('MainService-list-web-hover');
			$(this).addClass('MainService-list-web-hover');
			$("#multimedia").show();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
	   })




	  /*$(".MainService-list-web li:nth-child(5)").mouseout(function(e){
			//alert("test");
			$("#multimedia").hide();
			$("#marketing").hide();
			$("#web").hide();
			$("#community").hide();
			$("#design").hide();
	   })*/

	  

	  $(".portofolio-image").on("mouseover", function(e){
	  	$(".overlay-portfolio").show("fast");
	  })

	  

	  var size = $(window).width();

		
		if(size < 1024){
			$(".MainService-list-web li:nth-child(1)").removeClass('MainService-list-web-hover');
	   		$("#marketing").hide();
		}

		if(size >= 1024){
			var s = skrollr.init({
			edgeStrategy: 'set',
			easing: {
				WTF: Math.random,
				inverted: function(p) {
					return 1-p;
				}
			}
		});
			$(".MainService-list").unbind("click");

			$(".MainService-list-web li:nth-child(1)").addClass('MainService-list-web-hover');
	   		$("#marketing").show();
		}

		console.log(size);
		if(size >= 1263){
			$(".boxes-web").removeClass("moving").addClass('movingMedium');
		}

		if(size >= 1583){
			$(".boxes-web").removeClass("movingMedium").addClass('movingLong');
		}

		if(size >= 1783){
			$(".boxes-web").removeClass("movingLong").addClass('movingVeryLong');
		}

		/*if(size >= 1263){
			$(".boxes-web").removeClass("moving").addClass('movingMedium');
		}*/
		
		$(window).resize(function() {
			var size = $(window).width();
			if(size < 1024){
				$(".MainService-list-web li:nth-child(1)").removeClass('MainService-list-web-hover');
		   		$("#marketing").hide();
			}
			if(size >= 1024){
				var s = skrollr.init({
					edgeStrategy: 'set',
					easing: {
						WTF: Math.random,
						inverted: function(p) {
							return 1-p;
						}
					}
				});
				$(".MainService-list").unbind("click");
				$(".MainService-list-web li:nth-child(1)").addClass('MainService-list-web-hover');
	   			$("#marketing").show();
			}

			if(size >= 1263){
				$(".boxes-web").removeClass("moving").addClass('movingMedium');
			}

			if(size >= 1583){
				$(".boxes-web").removeClass("movingMedium").addClass('movingLong');
			}

			if(size >= 1783){
				$(".boxes-web").removeClass("movingLong").addClass('movingVeryLong');
			}
				
		})
})()