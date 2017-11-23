$(function(){
	
			$(".slider").slick({
				dots: true,
				infinite: true,
				slidesToShow: 5,
				arrows: false,
				autoplay: true,
				responsive: [
				{
					breakpoint: 760,
					settings: {
					slidesToShow: 3
					}
				}
				]
				

		});
	
	});