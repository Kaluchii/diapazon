@extends('front.mobile.layout')
@section('content')

    <main class="content">
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
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">Крупный рост продаж доллара, евро и рубля произошел в обменниках РК</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name last-news__name--important">
                                <span class="last-news__link link">Профессии будущего: Как можно будет хорошо зарабатывать в Казахстане через 10 лет</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">В Алматы презентовали первую в Казахстане художественную книгу на латинице</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name last-news__name--important">
                                <span class="last-news__link link">Серьезный пожар охватил рынок в Алматы</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">Питбули загрызли собственную хозяйку во время прогулки в лесу</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">Гибель 52 человек в автобусе: водителей доставили в суд</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">Когда потеплеет в Казахстане и другие новости апокаллипсиса</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">Мальчик умер после тренировки по таэквандо в Атырау</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">Крупный рост продаж доллара, евро и рубля произошел в обменниках РК</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <a href="#" class="last-news__name">
                                <span class="last-news__link link">Профессии будущего: Как можно будет хорошо зарабатывать в Казахстане через 10 лет</span>
                            </a>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-average__banner banner">
                    <img src="/dev_img/banner_l.jpg" alt="">
                </div>

            </div>


            <div class="container__col-big col-big">

                <div class="col-big__publication publication">
                    <div class="publication__header">
                        <p class="publication__breadcrumbs breadcrumbs">
                            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link link">Главная</a></span>
                            <span class="breadcrumbs__delimiter"> — </span>
                            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link link">Проишествия</a></span>
                            <span class="breadcrumbs__delimiter"> — </span>
                            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link link">В мире</a></span>
                        </p>
                        <p class="publication__info">25 января 08:25<span class="publication__info-delimiter"> • </span>254 просмотра</p>
                    </div>

                    <div class="publication__content content-block">
                        <h1>Лучшее за неделю: успехи SpaceX и других космических проектов, ребрендинг «Кофе хауза» и обзор рынка подкастов</h1>
                        <p class="content-block__sub-title"><strong>Подборка самых популряных новостей и материалов за неделю в одном месте.</strong></p>
                        <div class="content-block__share-row">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.12';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-share-button" data-href="" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a></div>
                        </div>
                        <h2>Запуск сверхтяжёлой ракеты Falcon Heavy</h2>
                        <figure>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Rqf3J4ZOPCw" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                            <figcaption>Автор видео — Space X</figcaption>
                        </figure>
                        <p>7 февраля <a href="#">SpaceX</a> осуществила первый запуск сверхтяжелой ракеты Falcon Heavy с автомобилем Tesla Roadster в качестве утяжелителя и космическим скафандром на борту. SpaceX успешно посадила боковые ускорители ракеты на платформы на суше, центральный ускоритель разбился при посадке и повредил плавучую платформу, а автомобиль
                            <a href="#">Tesla</a> с скафандром за рулём улетела в сторону пояса астероидов.
                        </p>
                        <p>Собрали несколько шуток по мотивам запуска — и реакцию брендов на событие. А издание National Geographic опубликовало видео, на котором запечатлена реакция главы компании Илона Маска на взлёт ракеты.</p>
                        <h2>Ребрендинг «Кофе хауза»</h2>
                        <p>Сеть кофеен «Кофе хауз» представила новый фирменный стиль и концепцию заведений. Ребрендинг будет проведён в 2018 году. В новых заведениях не будет официантов, а позиционировать «Кофе хауз» его владелец собирается как сеть кофеен быстрого обслуживания.</p>
                        <div class="content-block__gallery">
                            <div class="fotorama" data-nav="thumbs" data-navwidth="78.9473685%" data-thumbmargin="10"
                                 data-thumbborderwidth="1" data-width="794" data-maxwidth="100%">
                                <a href="http://s.fotorama.io/1.jpg"><img src="http://s.fotorama.io/1.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/2.jpg"><img src="http://s.fotorama.io/2.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/okonechnikov/1-lo.jpg"><img src="http://s.fotorama.io/okonechnikov/1-lo.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/okonechnikov/10-lo.jpg"><img src="http://s.fotorama.io/okonechnikov/10-lo.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/okonechnikov/1-lo.jpg"><img src="http://s.fotorama.io/okonechnikov/1-lo.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/okonechnikov/10-lo.jpg"><img src="http://s.fotorama.io/okonechnikov/10-lo.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/okonechnikov/12-lo.jpg"><img src="http://s.fotorama.io/okonechnikov/12-lo.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/okonechnikov/16-lo.jpg"><img src="http://s.fotorama.io/okonechnikov/16-lo.jpg" alt="" width="90" height="64"></a>
                                <a href="http://s.fotorama.io/okonechnikov/12-lo.jpg"><img src="http://s.fotorama.io/okonechnikov/12-lo.jpg" alt="" width="90" height="64"></a>
                            </div>
                        </div>
                        <h4>Агентство пленум так описывает работу</h4>
                        <blockquote>«Кофе хауз» должен стать для массовой аудитории трендовым местом для перекуса с кофе, помогать сохранять хорошее настроение и силы при перемещении по городу.
                            <br><br>Новый знак бренда напрямую визуализирует перекус с кофе. В новой цветовой схеме комбинируются два цвета: оранжевый, характерный для категории заведений общественного питания с быстрым обслуживанием, и коричнево-бордовый — цвет кофе.
                        </blockquote>
                        <div class="content-block__external-quote">
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
                            <li class="publication__tag"><a href="" class="publication__tag-text">Проишествие</a></li>
                            <li class="publication__tag"><a href="" class="publication__tag-text">Пожар</a></li>
                            <li class="publication__tag"><a href="" class="publication__tag-text">Взрыв</a></li>
                        </ul>
                    </div>

                    <div class="publication__footer">
                        <p class="publication__author">Автор — Евгений Петросян <a href="#" class="publication__author-link link">e.petrosyan@diapazon.kz</a></p>
                        <div class="publication__share-row">
                            <div class="fb-share-button" data-href="" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-big__news-box news-box">
                    <div class="news-box__title-wrap">
                        <p class="news-box__title">Новости по теме</p>
                    </div>
                    <ul class="news-box__list">
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link">
                                <img src="/dev_img/pl_small_preview.jpg" alt="" class="news-cart__preview link-preview">
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
                            <a href="#" class="news-cart__link">
                                <img src="/dev_img/pl_small_preview.jpg" alt="" class="news-cart__preview link-preview">
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
                            <a href="#" class="news-cart__link">
                                <img src="/dev_img/pl_small_preview.jpg" alt="" class="news-cart__preview link-preview">
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
                            <a href="#" class="news-cart__link">
                                <img src="/dev_img/pl_small_preview.jpg" alt="" class="news-cart__preview link-preview">
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
                            <a href="#" class="news-cart__link">
                                <img src="/dev_img/pl_small_preview.jpg" alt="" class="news-cart__preview link-preview">
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
                            <a href="#" class="news-cart__link">
                                <img src="/dev_img/pl_small_preview.jpg" alt="" class="news-cart__preview link-preview">
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

        </div>
    </main>

@endsection
