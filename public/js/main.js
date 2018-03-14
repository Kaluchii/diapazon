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
            $(this).removeClass('popular-videos__arrow--unactive');
        }
    });
    $('.js_next_set').on('click', function () {
        $videos.slick('slickNext');
        var videosCount = $videos.slick('getSlick').slideCount;
        console.log($videos.slick('getSlick'));
        if($videos.slick('slickCurrentSlide') === videosCount){
            $(this).addClass('popular-videos__arrow--unactive');
        } else {
            $(this).removeClass('popular-videos__arrow--unactive');
        }
    });
});