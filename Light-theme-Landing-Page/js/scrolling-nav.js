//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 630) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
		$(".sign-in").addClass("sign-up-button");
		$(".navbar-brand").addClass("navbar-brand-visible");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
		$(".sign-in").removeClass("sign-up-button");
		$(".navbar-brand").removeClass("navbar-brand-visible");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
