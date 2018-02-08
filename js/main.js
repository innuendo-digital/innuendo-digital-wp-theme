jQuery(document).ready(function($) {

    // Unslider scripts

    $('.featured-case-articles').unslider({
    	autoplay: true,
    	arrows: false,
    	delay: 8000,
    	infinite: true
    });

    $('.process-slider').unslider({
    	autoplay: false,
    	arrows: true,
    });

    // Mobile navigation toggle

    $("#mobile-nav-burger").click(function(){
        $(this).toggleClass('open');
        $(".pop-up-menu").toggleClass('open');
    })

});