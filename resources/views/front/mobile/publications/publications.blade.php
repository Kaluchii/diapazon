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
                    <p class="last-news__title">Последние новости</p>
                    <ul class="last-news__list">
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
                    <div class="last-news__btn-wrap">
                        <button class="last-news__btn btn btn--grey">Загрузить еще</button>
                    </div>
                </div>

                <div class="col-average__banner banner">
                    <img src="/dev_img/banner_l.jpg" alt="">
                </div>

            </div>


            <div class="container__col-big col-big">
                <div class="col-big__news-box news-box">
                    <div class="news-box__title-wrap">
                        <p class="news-box__title">Проишествия</p>
                        <div class="news-box__location">
                            <p class="news-box__location-title">По региону</p>
                            <span class="news-box__location-name-wrap news-box__location-name-wrap--active"><a href="#" class="news-box__location-name link">Актобе</a></span>
                            <span class="news-box__location-name-wrap"><a href="#" class="news-box__location-name link">Казахстан</a></span>
                            <span class="news-box__location-name-wrap"><a href="#" class="news-box__location-name link">Мир</a></span>
                        </div>
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
                    <div class="news-box__btn-wrap">
                        <button class="news-box__btn btn btn--grey btn--big">Загрузить еще</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
