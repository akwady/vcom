jQuery(document).ready(function($) {

    $(".slider_main").owlCarousel({
        rewindNav: true,
        autoPlay: true,
        navigationText: ["", ""],
        loop:true,
        itemsCustom : [
            [0, 1],
            [450, 1],
            [500, 1],
            [768, 1],
            [1024, 1],
            [1200, 1],
            [1400, 1],
            [1600, 1]
        ],
        navigation : false
    });
    $(".slider_our").owlCarousel({
        rewindNav: true,
        autoPlay: true,
        navigationText: ["", ""],
        loop:true,
        padding:50,
        itemsCustom : [
            [0, 1],
            [450, 1],
            [500, 1],
            [768, 2],
            [1024, 3],
            [1200, 3],
            [1400, 3],
            [1600, 3]
        ],
        navigation : false
    });
    $("#projects_single_slider").owlCarousel({
        rewindNav: true,
        autoPlay: true,
        navigationText: ["", ""],
        loop:true,
        itemsCustom : [
            [0, 1],
            [450, 1],
            [500, 1],
            [768, 2],
            [1024, 3],
            [1200, 3],
            [1400, 3],
            [1600, 3]
        ],
        navigation : true
    });

    $('.our_moments_tag ul > li:first-child').addClass('active');
    $('.our_moments_tag .tab-content > div:first-child').addClass('active');





});
