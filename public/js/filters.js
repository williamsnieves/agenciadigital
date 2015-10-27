(function(){
	$(".wrapper-buttons-filter").children().children().on("click", function(e){
		e.preventDefault();
		$(".wrapper-buttons-filter").children().children().children().removeClass('icon-active');
		$(e.target).addClass("icon-active");
		var $category = $(e.target).parent().attr("data-category");

		$("."+$category).hide();

		console.log($(e.target).before().css("color", "red"))
	})
})()