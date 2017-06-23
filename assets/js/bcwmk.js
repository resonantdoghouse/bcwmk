// (function ($) {
//
//     /**
//      * Smooth Scroll
//      */
//     //jQuery for page scrolling feature - requires jQuery Easing plugin
//     $(function () {
//         $(document).on('click', 'a.page-scroll', function (event) {
//             var $anchor = $(this);
//             $('html, body').stop().animate({
//                 scrollTop: $($anchor.attr('href')).offset().top
//             }, 1500, 'easeInOutExpo');
//             event.preventDefault();
//         });
//     });
//
//
//     /**
//      * Header on Scroll, change style
//      */
//     $(window).scroll(function () {
//         console.log('scroll');
//         if ($(this).scrollTop() > 10) {
//             $('.app-navbar, .stage-shelf, .navbar-toggler').addClass('active');
//             $('#wpadminbar').css({'position': 'static'});
//
//         } else {
//             $(".app-navbar, .stage-shelf, .navbar-toggler").removeClass('active');
//             $('#wpadminbar').css({'position': 'fixed'});
//         }
//     });
//
//
//
//
//
// })(jQuery);