function mycarousel_initCallback(carousel) {
	jQuery('.jcarousel-control a').bind('click', function() {
		carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
		return false;
	});
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
};

jQuery(document).ready(function() {
	var slidenum = $('#slidecarousel li').size();
	if(slidenum>=2) {
		$('.jcarousel-control span').show();
		var sl = 1;
		while(sl<=slidenum) {
			$(".jcarousel-control").append("<a href='#'>" + sl + "</a>");
			sl++;
		};
	}
	jQuery("#slidecarousel").jcarousel({
		scroll: 1,
		auto: 4,
		animation: 1000,
		easing: 'easeOutQuad',
		wrap: 'last',
		initCallback: mycarousel_initCallback,
		itemVisibleInCallback: {
            onBeforeAnimation: function(c, o, i, s) {
				--i;
				jQuery('.jcarousel-control a').removeClass('active');
				jQuery('.jcarousel-control a:eq('+i+')').addClass('active');
            }
        },
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
});