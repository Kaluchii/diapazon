@extends('front.layout')
@section('content')
    <header class="header">
        <div class="header__top">
            <div class="header__container">
                <div class="header__logo-tag-wrap">
                    <a href="#" class="header__link-main">
                        <img src="/dev_img/logo.jpg" alt="" class="header__logo">
                    </a>
                    <p class="header__tagline">Главные новости в Актобе, Казахстане и мире</p>
                </div>
                <div class="header__actions-wrap">
                    <a href="#" class="header__action header__action--add-advert">Подать объявление</a>
                    <a href="#" class="header__action header__action--lk">Личный кабинет</a>
                </div>
            </div>
        </div>
        <div class="header__nav-wrap">
            <nav class="header__container">
                <ul class="header__navigation-list">
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Экономика</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Проишествия</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Спорт</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Жизнь</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Здоровье</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Культура</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Афиша</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Люди</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Фото</a></li>
                    <li class="header__navigation-item"><a href="#" class="header__nav-link">Видео</a></li>
                </ul>
                <div class="header__menu-actions">
                    <a href="#" class="header__menu-action link">Задать вопрос</a>
                    <a href="#" class="header__menu-action link">Сообщить новость</a>
                </div>
            </nav>
        </div>
    </header>


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
                    <p class="last-news__title">Последние новости</p>
                    <ul class="last-news__list">
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">Крупный рост продаж доллара, евро и рубля произошел в обменниках РК</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name last-news__name--important">
                                <a href="#" class="last-news__link link">Профессии будущего: Как можно будет хорошо зарабатывать в Казахстане через 10 лет</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">В Алматы презентовали первую в Казахстане художественную книгу на латинице</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name last-news__name--important">
                                <a href="#" class="last-news__link link">Серьезный пожар охватил рынок в Алматы</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">Питбули загрызли собственную хозяйку во время прогулки в лесу</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">Гибель 52 человек в автобусе: водителей доставили в суд</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">Когда потеплеет в Казахстане и другие новости апокаллипсиса</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">Мальчик умер после тренировки по таэквандо в Атырау</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">Крупный рост продаж доллара, евро и рубля произошел в обменниках РК</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                        <li class="last-news__item">
                            <div class="last-news__name">
                                <a href="#" class="last-news__link link">Профессии будущего: Как можно будет хорошо зарабатывать в Казахстане через 10 лет</a>
                            </div>
                            <div class="last-news__meta-row">
                                <span class="last-news__pub-time">08:31</span>
                                <a href="#" class="last-news__comments">54</a>
                            </div>
                        </li>
                    </ul>
                    <div class="last-news__btn-wrap">
                        <button class="last-news__btn grey-btn">Загрузить еще</button>
                    </div>
                </div>
            </div>


            <div class="container__col-big col-big">

                <div class="col-big__title-block">
                    <div class="col-big__big-news news-cart news-cart--big">
                        <a href="#" class="news-cart__link link-parent">
                            <img src="/dev_img/pl_470x300.jpg" alt="" class="news-cart__preview">
                            <p class="news-cart__name-wrap">
                                <span class="news-cart__name news-cart__name--big link">Пожарный вернул найденный возле мечети миллион тенге в ЗКО</span>
                            </p>
                        </a>
                        <p class="news-cart__description">В кошельке находилось около 1 миллиона тенге и личные документы владельца, среди которых были контакты владельца.</p>
                        <div class="news-cart__meta-row">
                            <span class="news-cart__pub-time">08:25</span>
                            <span class="news-cart__comments">54</span>
                            <span class="news-cart__views">214</span>
                        </div>
                    </div>
                    <div class="col-big__readers-questions readers-questions">
                        <p class="readers-questions__title">Вопросы от читателей</p>
                        <div class="readers-questions__container">
                            <div class="readers-questions__img-wrap">
                                <img src="/dev_img/pl_220x140.jpg" alt="" class="readers-questions__img">
                            </div>
                            <ul class="readers-questions__list">
                                <li class="readers-questions__item"><a href="#" class="readers-questions__link link">Штраф с камеры видео-фиксации пришел с задержкой на полгода. Должен ли я платить!?</a></li>
                                <li class="readers-questions__item"><a href="#" class="readers-questions__link link">Расскажите, как оформить пособие по безработице?</a></li>
                                <li class="readers-questions__item"><a href="#" class="readers-questions__link link">В семье 5 малолетних детей. Нас выселяют из квартиры. Имеют ли право?</a></li>
                            </ul>
                            <div class="readers-questions__bottom">
                                <a href="#" class="readers-questions__ask link">Задать вопрос</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-big__news-box news-box">
                    <ul class="news-box__list">
                        <li class="news-box__item news-cart">
                            <a href="#" class="news-cart__link link-parent">
                                <img src="/dev_img/pl_220x140.jpg" alt="" class="news-cart__preview">
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
                                <img src="/dev_img/pl_220x140.jpg" alt="" class="news-cart__preview">
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
                                <img src="/dev_img/pl_220x140.jpg" alt="" class="news-cart__preview">
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
                                <img src="/dev_img/pl_220x140.jpg" alt="" class="news-cart__preview">
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
                                <img src="/dev_img/pl_220x140.jpg" alt="" class="news-cart__preview">
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
                                <img src="/dev_img/pl_220x140.jpg" alt="" class="news-cart__preview">
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
                    <div class="situation-info__rows">
                        <p class="situation-info__row"><span class="situation-info__bold">Курсы валют</span></p>
                        <p class="situation-info__row">$ 335.33  •  € 395.49  •  ₽ 5.7</p>
                    </div>
                </div>

                <div class="col-small__socials socials">
                    <p class="socials__title">Следите за новостями</p>
                    <ul class="socials__list">
                        <li class="socials__item"><a href="#" class="socials__link"></a></li>
                    </ul>
                </div>

                <div class="col-small__photoreport photoreport">
                    <p class="photoreport__title">Фоторепортаж</p>
                    <ul class="photoreport__list">
                        <li class="photoreport__item">
                            <a href="#" class="photoreport__link">
                                <img src="/dev_img/pl_190x120.jpg" alt="" class="photoreport__preview">
                                <p class="photoreport__name">Познер, Петросян и Леонтьев одеваются на зависть молодым</p>
                            </a>
                        </li>
                        <li class="photoreport__item">
                            <a href="#" class="photoreport__link">
                                <img src="/dev_img/pl_190x120.jpg" alt="" class="photoreport__preview">
                                <p class="photoreport__name">Познер, Петросян и Леонтьев одеваются на зависть молодым</p>
                            </a>
                        </li>
                        <li class="photoreport__item">
                            <a href="#" class="photoreport__link">
                                <img src="/dev_img/pl_190x120.jpg" alt="" class="photoreport__preview">
                                <p class="photoreport__name">Познер, Петросян и Леонтьев одеваются на зависть молодым</p>
                            </a>
                        </li>
                        <li class="photoreport__item">
                            <a href="#" class="photoreport__link">
                                <img src="/dev_img/pl_190x120.jpg" alt="" class="photoreport__preview">
                                <p class="photoreport__name">Познер, Петросян и Леонтьев одеваются на зависть молодым</p>
                            </a>
                        </li>
                        <li class="photoreport__item">
                            <a href="#" class="photoreport__link">
                                <img src="/dev_img/pl_190x120.jpg" alt="" class="photoreport__preview">
                                <p class="photoreport__name">Познер, Петросян и Леонтьев одеваются на зависть молодым</p>
                            </a>
                        </li>
                        <li class="photoreport__item">
                            <a href="#" class="photoreport__link">
                                <img src="/dev_img/pl_190x120.jpg" alt="" class="photoreport__preview">
                                <p class="photoreport__name">Познер, Петросян и Леонтьев одеваются на зависть молодым</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content__videos popular-videos">
            <div class="popular-videos__top">
                <div class="popular-videos__arrow popular-videos__arrow--left"></div>
                <p class="popular-videos__title">Популярное видео</p>
                <div class="popular-videos__arrow popular-videos__arrow--right"></div>
            </div>
            <ul class="popular-videos__list">
                <li class="popular-videos__item">
                    <a href="#" class="popular-videos__link">
                        <div class="popular-videos__preview-wrap">
                            <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview">
                            <span class="popular-videos__length">01:28</span>
                        </div>
                        <span class="popular-videos__name">Жуткий туман стал причиной страшного ДТП на трассе</span>
                    </a>
                    <div class="popular-videos__meta-row">
                        <span class="popular-videos__views">254</span>
                    </div>
                </li>
                <li class="popular-videos__item">
                    <a href="#" class="popular-videos__link">
                        <div class="popular-videos__preview-wrap">
                            <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview">
                            <span class="popular-videos__length">01:28</span>
                        </div>
                        <span class="popular-videos__name">Жуткий туман стал причиной страшного ДТП на трассе</span>
                    </a>
                    <div class="popular-videos__meta-row">
                        <span class="popular-videos__views">254</span>
                    </div>
                </li>
                <li class="popular-videos__item">
                    <a href="#" class="popular-videos__link">
                        <div class="popular-videos__preview-wrap">
                            <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview">
                            <span class="popular-videos__length">01:28</span>
                        </div>
                        <span class="popular-videos__name">Жуткий туман стал причиной страшного ДТП на трассе</span>
                    </a>
                    <div class="popular-videos__meta-row">
                        <span class="popular-videos__views">254</span>
                    </div>
                </li>
                <li class="popular-videos__item">
                    <a href="#" class="popular-videos__link">
                        <div class="popular-videos__preview-wrap">
                            <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview">
                            <span class="popular-videos__length">01:28</span>
                        </div>
                        <span class="popular-videos__name">Жуткий туман стал причиной страшного ДТП на трассе</span>
                    </a>
                    <div class="popular-videos__meta-row">
                        <span class="popular-videos__views">254</span>
                    </div>
                </li>
                <li class="popular-videos__item">
                    <a href="#" class="popular-videos__link">
                        <div class="popular-videos__preview-wrap">
                            <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview">
                            <span class="popular-videos__length">01:28</span>
                        </div>
                        <span class="popular-videos__name">Жуткий туман стал причиной страшного ДТП на трассе</span>
                    </a>
                    <div class="popular-videos__meta-row">
                        <span class="popular-videos__views">254</span>
                    </div>
                </li>
                <li class="popular-videos__item">
                    <a href="#" class="popular-videos__link">
                        <div class="popular-videos__preview-wrap">
                            <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview">
                            <span class="popular-videos__length">01:28</span>
                        </div>
                        <span class="popular-videos__name">Жуткий туман стал причиной страшного ДТП на трассе</span>
                    </a>
                    <div class="popular-videos__meta-row">
                        <span class="popular-videos__views">254</span>
                    </div>
                </li>
            </ul>
        </div>
    </main>


    <footer class="footer"></footer>
@endsection
