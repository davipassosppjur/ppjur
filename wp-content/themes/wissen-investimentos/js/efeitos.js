$(function(){

	AOS.init();

	$(window).scroll(function(){
		if($(this).scrollTop()>120){
			$('.wq-header').each(function(){
				$(this).addClass("wq-header_fixo");
			});
		}else{
			$('.wq-header').each(function(){
				$(this).removeClass("wq-header_fixo");
			});
		};
	});
	$(window).scroll();

	function iframeSize(i){
		var mapElement = $(".wq-sobre_video iframe");
		var mapElementWidth = mapElement.width();

		mapElement.css("height", mapElementWidth * 0.56 );
	}
	iframeSize();
	$( window ).resize(function() {
		iframeSize();
	});

	$('.nav-tabs li:eq(0) a').click();



	var windowsize = $(window).width();
    if (windowsize < 999) {
    	$('.scroll-1').attr("class","mobile-class");
    }

});

