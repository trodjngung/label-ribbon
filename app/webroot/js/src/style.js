$(function() {
	// scroll to top
	$(window).scroll(function() {
		if ($(this).scrollTop() > 250) {
			$('.scroll-up').fadeIn();
		} else {
			$('.scroll-up').fadeOut();
		}
	});
	$('.scroll-up').click(function(e) {
		e.preventDefault();

		$('body, html').animate({
			scrollTop : 0
		}, 500);
	});
	// Show topic-path
	if (this.location.pathname == '/top') {
		$('.topic-path').css("display", "none");
	}
	// Active menu
	if (window.location.pathname == '/') {
		$('.nav li a[href="/"]').parent().addClass('active');
	} else {
		var url = ((window.location.href.match(/([^\/]*)\/?$/)[1]).substring(0));
		$('.nav li a[href="/' + url + '"]').parent().addClass('active');
	}
});