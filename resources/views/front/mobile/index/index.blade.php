@extends('front.mobile.layout')
@section('content')

    <main class="content">
        <div class="content__main-topics main-topics">
            <div class="main-topics__container">
                <p class="main-topics__title">Главные темы</p>
                <div class="main-topics__list js_podkat_source">
                    <a href="#" class="main-topics__item"><span class="main-topics__link link">Подорожание бензина</span></a>
                    <a href="#" class="main-topics__item"><span class="main-topics__link link">Переход на латиницу</span></a>
                    <a href="#" class="main-topics__item"><span class="main-topics__link link">Забастовка шахтеров</span></a>
                    <a href="#" class="main-topics__item"><span class="main-topics__link link">Суд над Винокуровым</span></a>
                    <a href="#" class="main-topics__item"><span class="main-topics__link link">Новый год в РК</span></a>
                </div>
                <div class="main-topics__other-items js_podkat_roll">
                    <span class="main-topics__link link js_podkat_toggle">Еще</span>
                    <span class="main-topics__podkat-roll">
                        <span class="main-topics__podkat-roll-list js_podkat_roll">
                            <a href="" class="main-topics__podkat-roll-item"></a>
                        </span>
                    </span>
                </div>
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
            </div>


            <div class="container__col-big col-big">

                <div class="col-big__title-block">
                    <div class="col-big__big-news news-cart news-cart--big">
                        <a href="#" class="news-cart__link">
                            <img src="/dev_img/pl_big_preview.jpg" alt="" class="news-cart__preview link-preview">
                            <p class="news-cart__name-wrap">
                                <span class="news-cart__name news-cart__name--big link">Пожарный вернул найденный возле мечети миллион тенге в ЗКО</span>
                            </p>
                        </a>
                        <p class="news-cart__description">В кошельке находилось около 1 миллиона тенге и личные документы владельца, среди которых были контакты владельца.</p>
                        <div class="news-cart__meta-row">
                            <span class="news-cart__pub-time">08:25</span>
                            <a href="#" class="news-cart__comments news-cart__comments--big">54</a>
                            <span class="news-cart__views news-cart__views--big">214</span>
                        </div>
                    </div>
                    <div class="col-big__spec-news spec-news">
                        <div class="spec-news__container">
                            <a href="#" class="spec-news__link">
                                <img src="/dev_img/pl_q_1.jpg" alt="" class="spec-news__preview link-preview">
                                <p class="spec-news__name-wrap">
                                    <span class="spec-news__name link">Штраф с камеры видео-фиксации пришел с задержкой на полгода. Должен ли я платить!?</span>
                                </p>
                            </a>
                            <p class="spec-news__description">Вам предъявляют бумажку, в которой говорится, что два года назад вы были оштрафованы полицейским экипажем за нарушение, скажем, правил разметки.</p>
                            <div class="spec-news__bottom">
                                <a href="#" class="spec-news__ask link">Связаться с редакцией</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-big__news-box news-box news-box--together">
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

        {{--<div class="content__container container">
            <div class="container__videos popular-videos">
                <div class="popular-videos__top">
                    <div class="popular-videos__arrow popular-videos__arrow--left popular-videos__arrow--unactive js_previous_set"></div>
                    <p class="popular-videos__title">Популярное видео</p>
                    <div class="popular-videos__arrow popular-videos__arrow--right js_next_set"></div>
                </div>
                <div class="popular-videos__wrap">
                    <div class="popular-videos__list js_videos">
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Жуткий туман стал причиной страшного ДТП на трассе</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_2.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Мужчина погиб, поскользнувшись на заправке</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_3.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Дерзкое ограбление борделя сняли на видео</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_4.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Появилось видео боя сбитого летчика Су-25 с боевиками в Сирии</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_5.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Боксер расплакался на пресс-конференции после поражения от второго Головкина</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Жуткий туман стал причиной страшного ДТП на трассе</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_2.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Мужчина погиб, поскользнувшись на заправке</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_3.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Дерзкое ограбление борделя сняли на видео</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_4.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Появилось видео боя сбитого летчика Су-25 с боевиками в Сирии</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_5.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Боксер расплакался на пресс-конференции после поражения от второго Головкина</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Жуткий туман стал причиной страшного ДТП на трассе</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_2.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Мужчина погиб, поскользнувшись на заправке</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_3.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Дерзкое ограбление борделя сняли на видео</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_4.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Появилось видео боя сбитого летчика Су-25 с боевиками в Сирии</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_5.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Боксер расплакался на пресс-конференции после поражения от второго Головкина</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_220x140.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Жуткий туман стал причиной страшного ДТП на трассе</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_2.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Мужчина погиб, поскользнувшись на заправке</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                        <div class="popular-videos__item">
                            <div class="popular-videos__item-wrap">
                                <a href="#" class="popular-videos__link">
                                    <div class="popular-videos__preview-wrap">
                                        <img src="/dev_img/pl_v_3.jpg" alt="" class="popular-videos__preview link-preview">
                                        <span class="popular-videos__length">01:28</span>
                                    </div>
                                    <p class="popular-videos__name-wrap">
                                        <span class="popular-videos__name pink-link">Дерзкое ограбление борделя сняли на видео</span>
                                    </p>
                                </a>
                                <div class="popular-videos__meta-row">
                                    <span class="popular-videos__views">254</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}

        <div class="content__container container">

            <div class="container__col-average col-average">
                <div class="col-average__banner banner">
                    <img src="/dev_img/banner_l.jpg" alt="">
                </div>
            </div>


            <div class="container__col-big col-big">
                <div class="col-big__news-box news-box">
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
                    </ul>
                    <div class="news-box__btn-wrap">
                        <button class="news-box__btn btn btn--grey btn--big">Загрузить еще</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
