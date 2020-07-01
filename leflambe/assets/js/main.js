$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false,
	});

	$('.carousel').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 250,
		slideshow: true,
    itemMargin: 5,
    // minItems: 2,
    // maxItems: 5
  });
	// console.log('ok');

});
