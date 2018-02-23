@extends('front.layout')
@section('content')
    <header class="header">
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
        </nav>
    </header>


    <main class="content"> /////
        <div class="content__main-topics main-topics">
            <p class="main-topics__title">Главные темы</p>
            <ul class="main-topics__list">
                <li class="main-topics__item"><a href="#" class="main-topics__link">Подорожание бензина</a></li>
                <li class="main-topics__item"><a href="#" class="main-topics__link">Переход на латиницу</a></li>
                <li class="main-topics__item"><a href="#" class="main-topics__link">Забастовка шахтеров</a></li>
                <li class="main-topics__item"><a href="#" class="main-topics__link">Суд над Винокуровым</a></li>
                <li class="main-topics__item"><a href="#" class="main-topics__link">Новый год в РК</a></li>
            </ul>
        </div>

        <div class="content__container container">
            <div class="container__col-average col-average">
                <div class="col-average__last-news last-news">
                    <p class="last-news__title">Последние новости</p>
                    <ul class="last-news__list">
                        <li class="last-news__item"><a href="#" class="last-news__link"></a></li>
                        <li class="last-news__item"><a href="#" class="last-news__link"></a></li>
                        <li class="last-news__item"><a href="#" class="last-news__link"></a></li>
                        <li class="last-news__item"><a href="#" class="last-news__link"></a></li>
                    </ul>
                </div>
            </div>
            <div class="container__col-big col-big"></div>
            <div class="container__col-small col-small"></div>
        </div>
    </main>


    <footer class="footer"></footer>
@endsection
