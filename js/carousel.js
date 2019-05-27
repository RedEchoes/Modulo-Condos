/* CAROUSEL CONDOS */
$('.slick-carousel').slick({
	infinite: true,
	slidesToShow: 3, // Shows a three slides at a time
	slidesToScroll: 3, // When you click an arrow, it scrolls 1 slide at a time
	arrows: true, // Adds arrows to sides of slider
	dots: true, // Adds the dots on the bottom
	responsive: [{
			breakpoint: 781,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 780,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
	]
});