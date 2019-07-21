jQuery(document).ready(function ($) {

    // Hamburger Menu
    $(".navbar-toggler").click(function () {
        $(".hamburger").toggleClass("is-active");
    });
    
    // Facebook Conversion on Reservation Click
    // $(".res-btn a").on('click', function(){
	//     console.log('res btn click');
	//     fbq('track', 'Purchase', {
	// 	    value: 50.00,
	// 	    currency: 'USD',
	//     });
    // });

    // Init Tabs
    $("#tabs").tabs();

    // Init WOW
    new WOW().init();

    // Navbar scroll
    $(document).scroll(function () {
        var nav = $(".fixed-top");
        nav.toggleClass('scrolled', $(this).scrollTop() > nav.height());
    });

    // Light slider
    $("#light-slider").lightSlider({
        item: 4,
        auto: true,
        loop: true,
        pauseOnHover: false,
        slideMove: 1,
        slideMargin: 0,
        controls: true,
        pager: false,
    });
    
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }



});