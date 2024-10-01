
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    $('.js-drawer-button').click(function(){
        $(this).toggleClass('is-active');
        $(this).next().slideToggle();
    });

    $('.js-hamburger').click(function(){
        var isExpanded = $(this).attr('aria-expanded') === 'true';
        $(this).attr('aria-expanded', !isExpanded);
        $('.p-drawer').attr('aria-hidden', isExpanded);
        $(this).toggleClass('is-active');
        $('.p-drawer').fadeToggle();
        $('html').toggleClass('is-fixed');
    });

    // ページ読み込み時にPC幅を検出し、幅が900pxを超えたときはメニューを閉じる
    $(window).resize(function () {
        if ($(window).width() > 900) {
            $(".js-hamburger").removeClass("is-active");
            $(".p-drawer").removeClass("is-active");
            $(".p-drawer").fadeOut();
        }
    });

    // FAQのドロワー
    $(".js-nav-open").click(function () {
        $(this).toggleClass("is-active");
        $(this).next("nav").slideToggle();
    });

    if (window.matchMedia('(max-width:899px)').matches) {
        $('.js-merit-slider').slick({
            slidesToShow:1,
            dots:true,
            dotsClass: 'slider-dots',
            arrows:false,
            infinite: false,
        });
    }

    $('.wpcf7-list-item-label').each(function() {
        $(this).text('');
    });

    // introduction
    $(".js-introduction-slider").slick({
        slidesToShow:2.5,
        dots:false,
        arrows:true,
        infinite: true,
        prevArrow: '<div class="slide-arrow prev-arrow"></div>',
        nextArrow: '<div class="slide-arrow next-arrow"></div>',
        responsive: [
            {
            breakpoint: 900,
            settings: {
                slidesToShow:1,
            },
            },
        ],
    });

    $('.js-about-slider').slick({
        slidesToShow:3,
        dots: false,
        arrow:true,
        autoplay:true,
        prevArrow: '<div class="slide-arrow prev-arrow"></div>',
        nextArrow: '<div class="slide-arrow next-arrow"></div>',
        dotsClass: 'slider-dots',
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1, 
              }
            }
        ]
    });

});
