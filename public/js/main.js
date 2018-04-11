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


    // Подкат      ///////////////
    // start      ///////////////

    picking();
    $window.on('resize', function () {
        picking();
    });

    function picking() {
        var list = $('.js_podkat_source');

        $('.js_podkat_roll').hide();
        if (overflowElements(list).count !== 0) {
            $('.js_podkat_roll').show();
            list.width(overflowElements(list).width);
        }
    }

    function overflowElements(list) {
        var items,
            visibleItemsLength = 0,
            hidingElementsCount = 0;

        list.css('width', 'auto');
        items = list.children();

        items.each(function () {
            if ($(this).position().top === 0) {
                var itemFullWidth = $(this)[0].getBoundingClientRect().width + parseInt($(this).css('margin-left'));
                visibleItemsLength += itemFullWidth;
            } else {
                hidingElementsCount++;
            }
        });
        return { count: hidingElementsCount, width: visibleItemsLength }
    }

    $('.js_podkat_toggle').on('click', function () {
    });

    // Подкат      ///////////////
    // end        ///////////////
});