
function equalHeight(group) {
	var tallest = 0;
	group.each(function() {
		var thisHeight = $(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
}

$(function() {
	if($.browser.msie && $.browser.version=="6.0") {
		$('#mainnav li:first-child, #secnav li:first-child, #footer-nav li:first-child, #homewrap-content .column:first-child, #bottomwrap p:first-child').addClass('first');
	}
	$('#mainnav li:last-child ul, #secnav li:last-child ul').addClass('lastchild');
	$('#mainnav li').each(function() {
		if($(this).children('ul').size() > 0) {
			($.browser.msie && $.browser.version=="6.0") ? '' : $(this).addClass('haschild');
			if($.browser.msie && $.browser.version=="7.0") {
				$(this).hover(function() {
					$(this).children('ul').css({'margin-left': '-' + $(this).width() + 'px'});
					$(this).children('ul.lastchild').css({'margin-left': '-198px'});
				}, function() {
					$(this).children('ul').css({'margin-left': '0px'});
				});
			} else {
				$(this).hover(function() {
					$(this).children('ul.lastchild').css({'margin-left': '-' + (198 - $(this).width()) + 'px'});
				}, function() {
					$(this).children('ul.lastchild').css({'margin-left': '0px'});
				});
			}
		}
	});
	$('#secnav li').each(function() {
		if($(this).children('ul').size() > 0) {
			($.browser.msie && $.browser.version=="6.0") ? '' : $(this).addClass('haschild');
			if($.browser.msie && $.browser.version=="7.0") {
				$(this).hover(function() {
					$(this).children('ul').css({'margin-left': '-' + $(this).width() + 'px'});
					$(this).children('ul.lastchild').css({'margin-left': '-178px'});
				}, function() {
					$(this).children('ul').css({'margin-left': '0px'});
				});
			} else {
				$(this).hover(function() {
					$(this).children('ul.lastchild').css({'margin-left': '-' + (174 - $(this).width()) + 'px'});
				}, function() {
					$(this).children('ul.lastchild').css({'margin-left': '0px'});
				});
			}
		}
	});
	$('#mainnav li ul li:first-child').addClass('firstchild');
	equalHeight($('#homewrap .column'));
});

$(document).ready(function() {
	
});