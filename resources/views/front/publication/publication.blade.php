@extends('front.layout')
@section('content')

    <main class="content">{{-- /////////////////// --}}
        <div class="content__main-topics main-topics">
            <div class="main-topics__container">
                <p class="main-topics__title">Главные темы</p>
                <ul class="main-topics__list">
                    <li class="main-topics__item"><a href="#" class="main-topics__link link">Подорожание бензина</a></li>
                    <li class="main-topics__item"><a href="#" class="main-topics__link link">Переход на латиницу</a></li>
                    <li class="main-topics__item"><a href="#" class="main-topics__link link">Забастовка шахтеров</a></li>
                    <li class="main-topics__item"><a href="#" class="main-topics__link link">Суд над Винокуровым</a></li>
                    <li class="main-topics__item"><a href="#" class="main-topics__link link">Новый год в РК</a></li>
                </ul>
            </div>
        </div>

        <div class="content__container container">

            <div class="container__col-average col-average">
                <div class="col-average__last-news last-news">
                    <p class="last-news__title">Свежие новости</p>
                    <ul class="last-news__list last-news__list--fresh">
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">Крупный рост продаж доллара, евро и рубля произошел в обменниках РК</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name last-news__name--important link-parent">
                                <span class="last-news__link link">Профессии будущего: Как можно будет хорошо зарабатывать в Казахстане через 10 лет</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">В Алматы презентовали первую в Казахстане художественную книгу на латинице</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name last-news__name--important link-parent">
                                <span class="last-news__link link">Серьезный пожар охватил рынок в Алматы</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">Питбули загрызли собственную хозяйку во время прогулки в лесу</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">Гибель 52 человек в автобусе: водителей доставили в суд</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">Когда потеплеет в Казахстане и другие новости апокаллипсиса</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">Мальчик умер после тренировки по таэквандо в Атырау</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">Крупный рост продаж доллара, евро и рубля произошел в обменниках РК</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name link-parent">
                                <span class="last-news__link link">Профессии будущего: Как можно будет хорошо зарабатывать в Казахстане через 10 лет</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <img src="/dev_img/banner_l.jpg" alt="">

            </div>


            <div class="container__col-big col-big">

                <div class="col-big__publication publication">
                    <div class="publication__header">
                        <p class="publication__breadcrumbs breadcrumbs">
                            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link grey-link">Главная</a></span>
                            <span class="breadcrumbs__delimiter"> — </span>
                            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link grey-link">Проишествия</a></span>
                            <span class="breadcrumbs__delimiter"> — </span>
                            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link grey-link">В мире</a></span>
                        </p>
                        <p class="publication__info">25 января 08:25<span class="publication__info-delimiter"> • </span>254 просмотра</p>
                    </div>

                    <div class="publication__content content-block">
                        <p class="content-block__main-title">Лучшее за неделю: успехи SpaceX и других космических проектов, ребрендинг «Кофе хауза» и обзор рынка подкастов</p>
                        <p class="content-block__sub-title">Подборка самых популряных новостей и материалов за неделю в одном месте.</p>
                        <div class="content-block__share-row"></div>
                        <p class="content-block__topic-title">Запуск сверхтяжёлой ракеты Falcon Heavy</p>
                        <div class="content-block__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Rqf3J4ZOPCw" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                        <p class="content-block__after-video">Автор видео — Space X</p>
                        <p class="content-block__p">7 февраля <a class="link" href="#">SpaceX</a> осуществила первый запуск сверхтяжелой ракеты Falcon Heavy с автомобилем Tesla Roadster в качестве утяжелителя и космическим скафандром на борту. SpaceX успешно посадила боковые ускорители ракеты на платформы на суше, центральный ускоритель разбился при посадке и повредил плавучую платформу, а автомобиль
                            <a class="link" href="#">Tesla</a> с скафандром за рулём улетела в сторону пояса астероидов.
                        </p>
                        <p class="content-block__p">Собрали несколько шуток по мотивам запуска — и реакцию брендов на событие. А издание National Geographic опубликовало видео, на котором запечатлена реакция главы компании Илона Маска на взлёт ракеты.</p>
                        <p class="content-block__topic-title">Ребрендинг «Кофе хауза»</p>
                        <p class="content-block__p">Сеть кофеен «Кофе хауз» представила новый фирменный стиль и концепцию заведений. Ребрендинг будет проведён в 2018 году. В новых заведениях не будет официантов, а позиционировать «Кофе хауз» его владелец собирается как сеть кофеен быстрого обслуживания.</p>
                        <div class="content-block__gallery"></div>
                        <p class="content-block__mini-title">Агентство пленум так описывает работу</p>
                        <p class="content-block__blockquote">«Кофе хауз» должен стать для массовой аудитории трендовым местом для перекуса с кофе, помогать сохранять хорошее настроение и силы при перемещении по городу.
                            <br>Новый знак бренда напрямую визуализирует перекус с кофе. В новой цветовой схеме комбинируются два цвета: оранжевый, характерный для категории заведений общественного питания с быстрым обслуживанием, и коричнево-бордовый — цвет кофе.
                        </p>
                        <div class="content-block__vk-citata">
                            <div id="vk_post_1_45616"></div>
                            <script type="text/javascript">
                                (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//vk.com/js/api/openapi.js?152"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'vk_openapi_js'));
                                (function() {
                                    if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post('vk_post_1_45616', 1, 45616, 'ZsQza9xqpgtNecFWXcf5j6s5fFBo')) setTimeout(arguments.callee, 50);
                                }());
                            </script>
                        </div>
                    </div>
                    <div class="publication__tags-wrap">
                        <ul class="publication__tags">
                            <li class="publication__tag"><span class="publication__tag-text">Проишествие</span></li>
                            <li class="publication__tag"><span class="publication__tag-text">Пожар</span></li>
                            <li class="publication__tag"><span class="publication__tag-text">Взрыв</span></li>
                        </ul>
                    </div>

                    <div class="publication__footer">
                        <p class="publication__author">Автор — Евгений Петросян <a href="#" class="publication__author-link link">e.petrosyan@diapazon.kz</a></p>
                        <div class="publication__share-row"></div>
                    </div>
                </div>

                <div class="col-big__news-box news-box">
                    <p class="news-box__title">Новости по теме</p>
                    <ul class="news-box__list">
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link link-parent">
                                <img src="/dev_img/pl_n_1.jpg" alt="" class="news-cart__preview link-preview">
                                <p class="news-cart__name-wrap">
                                    <span class="news-cart__name link">Обвиняемый в избиении полицейских бизнесмен заявил, что у него украли 70 млн тенге</span>
                                </p>
                            </a>
                            <div class="news-cart__meta-row">
                                <span class="news-cart__pub-time">08:25</span>
                                <a href="#" class="news-cart__comments">54</a>
                                <span class="news-cart__views">214</span>
                            </div>
                        </li>
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link link-parent">
                                <img src="/dev_img/pl_n_2.jpg" alt="" class="news-cart__preview link-preview">
                                <p class="news-cart__name-wrap">
                                    <span class="news-cart__name link">Мошенницы обманули алматинцев на 1,5 млн долларов</span>
                                </p>
                            </a>
                            <div class="news-cart__meta-row">
                                <span class="news-cart__pub-time">08:25</span>
                                <a href="#" class="news-cart__comments">54</a>
                                <span class="news-cart__views">214</span>
                            </div>
                        </li>
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link link-parent">
                                <img src="/dev_img/pl_n_3.jpg" alt="" class="news-cart__preview link-preview">
                                <p class="news-cart__name-wrap">
                                    <span class="news-cart__name link">Федерация тяжелой атлетики: Илья Ильин сможет громко и красиво вернуться</span>
                                </p>
                            </a>
                            <div class="news-cart__meta-row">
                                <span class="news-cart__pub-time">08:25</span>
                                <a href="#" class="news-cart__comments">54</a>
                                <span class="news-cart__views">214</span>
                            </div>
                        </li>
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link link-parent">
                                <img src="/dev_img/pl_n_4.jpg" alt="" class="news-cart__preview link-preview">
                                <p class="news-cart__name-wrap">
                                    <span class="news-cart__name link">Как изменится "Нур Отан" с приходом Ашимбаева</span>
                                </p>
                            </a>
                            <div class="news-cart__meta-row">
                                <span class="news-cart__pub-time">08:25</span>
                                <a href="#" class="news-cart__comments">54</a>
                                <span class="news-cart__views">214</span>
                            </div>
                        </li>
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link link-parent">
                                <img src="/dev_img/pl_n_5.jpg" alt="" class="news-cart__preview link-preview">
                                <p class="news-cart__name-wrap">
                                    <span class="news-cart__name link">Сапарбаев посоветовал акимам с "ханскими замашками" пасти скот</span>
                                </p>
                            </a>
                            <div class="news-cart__meta-row">
                                <span class="news-cart__pub-time">08:25</span>
                                <a href="#" class="news-cart__comments">54</a>
                                <span class="news-cart__views">214</span>
                            </div>
                        </li>
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link link-parent">
                                <img src="/dev_img/pl_n_6.jpg" alt="" class="news-cart__preview link-preview">
                                <p class="news-cart__name-wrap">
                                    <span class="news-cart__name link">Биткоин опустился ниже 8 тыс. долларов</span>
                                </p>
                            </a>
                            <div class="news-cart__meta-row">
                                <span class="news-cart__pub-time">08:25</span>
                                <a href="#" class="news-cart__comments">54</a>
                                <span class="news-cart__views">214</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="container__col-small col-small">
                <div class="col-small__situation-info situation-info">
                    <div class="situation-info__search-wrap">
                        <input type="text" class="situation-info__search" placeholder="Поиск по сайту">
                    </div>
                    <div class="situation-info__rows">
                        <p class="situation-info__row">Пятница, 29 декабря, 16:12</p>
                        <p class="situation-info__row"><span class="situation-info__bold">В Актобе</span> -3°, снег</p>
                        <p class="situation-info__row"><a href="#" class="situation-info__link link">Погода на неделю</a></p>
                    </div>
                    <div class="situation-info__rows situation-info__rows--courses">
                        <p class="situation-info__row"><span class="situation-info__bold">Курсы валют</span></p>
                        <p class="situation-info__row">$ 335.33 <span class="situation-info__delimiter">•</span> € 395.49 <span class="situation-info__delimiter">•</span> ₽ 5.7</p>
                    </div>
                </div>

                <div class="col-small__socials socials">
                    <p class="socials__title">Следите за новостями</p>
                    <ul class="socials__list">
                        <li class="socials__item"><a href="#" class="socials__link"></a></li>
                        <li class="socials__item"><a href="#" class="socials__link"></a></li>
                        <li class="socials__item"><a href="#" class="socials__link"></a></li>
                        <li class="socials__item"><a href="#" class="socials__link"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

@endsection
