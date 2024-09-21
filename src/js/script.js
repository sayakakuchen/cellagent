
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    var header = $('.p-header').outerHeight();
    var urlHash = location.hash;
    if(urlHash) {
        $('body,html').stop().scrollTop(0);
        setTimeout(function(){
            var target = $(urlHash);
            var position = target.offset().top - header;
            $('body,html').stop().animate({scrollTop:position}, 500);
        }, 100);
    }
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

// slick
//     if (window.matchMedia('(max-width:899px)').matches) {
//         $('.js-merit-slider').slick({
//             slidesToShow: 1,
//             arrows: false,
//             dots: true,
//             variableWidth: true,
//             infinite: false,
//             centerMode: true,
//         });
//     }   else {
//         $('.slide.slick-initialized').slick('unslick');
//         }
//     }
// sliderSetting();
// $(window).resize(function(){
//     sliderSetting();
// });


});
