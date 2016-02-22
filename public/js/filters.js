(function(){
	$(".wrapper-buttons-filter").children().children().on("click", function(e){
		e.preventDefault();
		$(".wrapper-buttons-filter").children().children().children().removeClass('icon-active');
		$(e.target).addClass("icon-active");
		var $category = $(e.target).parent().attr("data-category");
		if($category == "web"){
			$(".gallery-portfolio").children('.web').show("slow");
		}
		if($category == "social"){
			$(".gallery-portfolio").children('.social').show("slow");
		}
		if($category == "paper"){
			$(".gallery-portfolio").children('.paper').show("slow");
		}
		if($category == "video"){
			$(".gallery-portfolio").children('.video').show("slow");
			
		}
		//$(".gallery-portfolio").not("."+$category).hide("slow");
		$(".gallery-portfolio").children().not("."+$category).hide("slow");
		console.log($(e.target).before().css("color", "red"))
	})

	$(".wrapper-buttons-filter-tablet").children().children().on("click", function(e){
		e.preventDefault();
		$(".wrapper-buttons-filter-tablet").children().children().children().removeClass('icon-active');
		$(e.target).addClass("icon-active");
		var $category = $(e.target).parent().attr("data-category");
		if($category == "web"){
			$(".gallery-portfolio").children('.web').show("slow");
		}
		if($category == "social"){
			$(".gallery-portfolio").children('.social').show("slow");
		}
		if($category == "paper"){
			$(".gallery-portfolio").children('.paper').show("slow");
		}
		if($category == "video"){
			$(".gallery-portfolio").children('.video').show("slow");
			
		}
		//$(".gallery-portfolio").not("."+$category).hide("slow");
		$(".gallery-portfolio").children().not("."+$category).hide("slow");
		console.log($(e.target).before().css("color", "red"))
	})

	var opcPortfolio = $(".menu-bg-web").children('ul').children('li')[6];
	var opcMarketing = $(".menu-bg-web").children('ul').children('li')[3];
	var opcPortfolioTablet = $(".Navigation").children('ul').children('li')[6];

	
	$(opcMarketing).on('click', function(e){
		$(".MainService-list-web li:nth-child(1)").addClass('MainService-list-web-hover');
		$("#marketing").show();		
		//$(".gallery-portfolio").children('.social').show("slow");
	})
	$(opcPortfolio).on('click', function(e){
		$(".gallery-portfolio").children().show("slow");
		$(".wrapper-buttons-filter").children().children().children().removeClass('icon-active');		
		//$(".gallery-portfolio").children('.social').show("slow");
	})

	$(opcPortfolioTablet).on('click', function(e){
		$(".gallery-portfolio").children().show("slow");
		$(".wrapper-buttons-filter-tablet").children().children().children().removeClass('icon-active');
		//$(".gallery-portfolio").children('.social').show("slow");
	})


})()