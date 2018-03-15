$(document).ready(function (){
    var $videos = $('.js_videos');
    $videos.slick({
        infinite: false,
        swipe: false,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 5
    });
    $('.js_previous_set').on('click', function () {
        $videos.slick('slickPrev');
        console.log('slickCurrentSlide = ' + $videos.slick('slickCurrentSlide'));
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
        console.log('lastLeftIndex = ' + lastLeftIndex);
        console.log('slickCurrentSlide' + $videos.slick('slickCurrentSlide'));
        if($videos.slick('slickCurrentSlide') === lastLeftIndex){
            $(this).addClass('popular-videos__arrow--unactive');
        } else {
            $('.js_previous_set').removeClass('popular-videos__arrow--unactive');
        }
    });
});