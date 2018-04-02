$(document).ready(function (){

    var $window = $(window);

    // Видео блок   ///////////////
    // start       ///////////////

    var $videos = $('.js_videos');
    $videos.slick({
        infinite: false,
        swipe: false,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

    $('.js_previous_set').on('click', function () {
        $videos.slick('slickPrev');
        // console.log('slickCurrentSlide = ' + $videos.slick('slickCurrentSlide'));
        if($videos.slick('slickCurrentSlide') === 0){
            $(this).addClass('popular-videos__arrow--unactive');
        } else {
            $('.js_next_set').removeClass('popular-videos__arrow--unactive');
        }
    });

    $('.js_next_set').on('click', function () {
        $videos.slick('slickNext');
        var slidesToShow = $videos.slick('getSlick').options.slidesToShow,
            slideCount = $videos.slick('getSlick').slideCount,
            lastLeftIndex = slideCount - (slideCount % slidesToShow);
        // console.log('lastLeftIndex = ' + lastLeftIndex);
        // console.log('slickCurrentSlide' + $videos.slick('slickCurrentSlide'));
        if($videos.slick('slickCurrentSlide') === lastLeftIndex){
            $(this).addClass('popular-videos__arrow--unactive');
        } else {
            $('.js_previous_set').removeClass('popular-videos__arrow--unactive');
        }
    });

    // Видео блок   ///////////////
    // end         ///////////////


    // Сбор в подкат   ///////////////
    // start          ///////////////

    $window.on('load resize', function () {
        picking();
    });

    function picking() {
        var visibleItemsLength = 0,
            items,
            overflow = false,
            list = $('.js_podkat_source');

        items = list.children();

        list.css('width', 'auto');

        items.each(function () {
            if ($(this).position().top === 0) {
                visibleItemsLength += $(this).outerWidth(true);
            } else {
                overflow = true;
            }
        });
        $('.js_podkat_roll').toggle(overflow);
        console.log('visibleItemsLength = ' + (visibleItemsLength));
        if (overflow) {
            list.width(visibleItemsLength + 1);
        }
    }

    function resizeOverflowList() {
    }

    // Сбор в подкат   ///////////////
    // end            ///////////////
});