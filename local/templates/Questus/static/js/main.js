$(document).ready(function () {

    //*     MOBILE MENU

    $('.menu-link').on('click', function () {
        $(this).toggleClass('menu-link_active');
        $('.menu-main_mobile').toggleClass('menu-main_mobile-active').slide('300');
    });

    //*     END MOBILE MENU


    //*     FORMSTYLER

    $(function () {
        $('.formstyler').styler();
    });

    //*     END FORMSTYLER


    //*     ASIDE OPEN

    $('.openBlock').on('click', function () {

        $(this).next('div, form').toggle(200);
    });

    //*     END ASIDE OPEN


    //*     SLICK SLIDER

    $('.slider').slick({
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        arrows: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
            }
        }]
    });

    $("#forBlock-1").on('click', function () {
        $(".button-block_slider button").removeClass('btn-active');
        $(this).addClass('btn-active');
        $('.block_on_main').removeClass('block_on_main-active');
        $('#block-1').addClass('block_on_main-active');
    });


    $("#forBlock-2").on('click', function () {
        $(".button-block_slider button").removeClass('btn-active');
        $(this).addClass('btn-active');
        $('.block_on_main').removeClass('block_on_main-active');
        $('#block-2').addClass('block_on_main-active');
    });


    $("#forBlock-3").on('click', function () {
        $(".button-block_slider button").removeClass('btn-active');
        $(this).addClass('btn-active');
        $('.block_on_main').removeClass('block_on_main-active');
        $('#block-3').addClass('block_on_main-active');
    });

    //*     END SLICK SLIDER


    //*     MAGNIFIC POPUP

    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });


    $('.open-popup-link').click(function () {
        var id = $(this).data('info');
        $.post('ajax/index.php', {
            user: id
        }).done(function (data) {
            var block = $(data);
            $("#team-cards_popUp").empty().append(block);
            console.log(block)
        });
    });


    //*     END MAGNIFIC POPUP


});