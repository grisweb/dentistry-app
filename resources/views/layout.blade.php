<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title') - Dentistry</title>
</head>

<body>
<header class="header">
    <div class="logo">
        <img src="img/logotip 2.png" class="logo__image"/>
        <div class="logo__text">
            Современная <br> стоматология
        </div>
    </div>

    @php
        $pages = [
            'home' => 'Главная',
            'services' => 'Услуги',
            'team' => 'Команда',
            'gallery' => 'Галерея',
            'contacts' => 'Контакты',
        ];
    @endphp

    <menu class="menu">
        @foreach($pages as $route => $name)
            <a href="{{route($route)}}" class="menu__item @if(Route::is($route)) menu__item_active @endif">
                <div class="tooltip">
                    {{$name}}
                    <span class="tooltiptext">{{$name}}</span>
                </div>
            </a>
        @endforeach
    </menu>
    <div class="header__right-menu right-menu">
        <div class="header__burger-menu burger-menu">
            <button class="burger-menu__btn">
                <img class="burger-menu__img" src="img/burger-menu.svg"/>
            </button>
            <ul class="burger-menu__navigation">
                @foreach($pages as $route => $name)
                    <a href="{{route($route)}}" class="burger-menu__item">
                        {{$name}}
                    </a>
                @endforeach
            </ul>
        </div>
        <div class="header__sign-in sign-in" onclick="setIsModalHidden()">
            sign in
        </div>
        <div class="sign-in-modal _hidden">
            <div class="sign-in-modal__content" onclick="event => event.stopPropagation()">
                <div class="sign-in-modal__header">
                    Вход
                </div>
                <div class="sign-in-modal__data">
                    <div class="sign-in-modal__form sign-in-form">
                        <input
                            type="text"
                            placeholder="email"
                            class="sign-in-form__item input"
                            id="sign-in-email"
                        >
                        <input
                            type="password"
                            class="sign-in-form__item input"
                            type="text"
                            placeholder="password"
                            id="sign-in-password"
                        >
                    </div>
                    <div class="sign-in-modal__btns">
                        <button class="sign-in-modal__button button" id="sign-in-submit">Войти</button>
                        <button class="sign-in-modal__button invert-btn" id="register-open"
                                onclick="setIsSecondModalHidden()">Нет аккаунта? Создать
                        </button>
                    </div>
                </div>
                <button class="sign-in-modal__close-btn close-btn" onclick="setIsModalHidden()">
                    <img src="img/close.png" alt="" class="employee-modal__close">
                </button>
            </div>
        </div>
        <div class="register-modal _hidden">
            <div class="register-modal__content" onclick="event => event.stopPropagation()">
                <div class="register-modal__header">
                    Регистрация
                </div>
                <div class="register-modal__data">
                    <div class="register-modal__form sign-in-form">
                        <input
                            type="text"
                            placeholder="Full Name"
                            class="sign-in-form__item input"
                            id="register-full-name"
                        >
                        <input
                            type="text"
                            placeholder="email"
                            class="sign-in-form__item input"
                            id="register-email"
                        >
                        <input
                            type="text"
                            placeholder="speciality"
                            class="sign-in-form__item input"
                            id="register-speciality"
                        >
                        <input
                            type="text"
                            placeholder="about you"
                            class="sign-in-form__item input"
                            id="register-about"
                        >
                        <input
                            type="password"
                            class="sign-in-form__item input"
                            type="text"
                            placeholder="password"
                            id="register-password"
                        >
                    </div>
                    <div class="register-modal__btns">
                        <button class="register-modal__button button" id="register-submit">Регистрация</button>
                        <button class="register-modal__button invert-btn" onclick="">Есть аккаунт? Войти</button>
                    </div>
                </div>
                <button class="register-modal__close-btn close-btn" onclick="setIsModalHidden()">
                    <img src="img/close.png" alt="" class="employee-modal__close">
                </button>
            </div>
        </div>
    </div>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="footer__content">
        <div class="footer__info-footer">
            <div class="info-footer__header">
                Современная <br>стоматология
            </div>
            <div class="info-footer__text">
                Секрет успеха нашей клиники заключается прежде<br>
                всего в том, что мы очень любим свою работу и <br>
                здоровье пациентов для нас превыше всего.
            </div>
        </div>
        <div class="footer__contacts-footer">
            <div class="contacts-footer__header">
                Контактные данные
            </div>
            <div class="contacts-footer__address">
                <img src="img/address.png" class="contacts-footer__image">
                <div class="contacts-footer__address">
                    г. Таганрог, пер. Не_скажу, 1
                </div>
            </div>
            <div class="contacts-footer__time">
                <img src="img/time.png" class="contacts-footer__clock"/>
                <div class="contacts-footer__days">
                    Пн-Пт: с 9.00 до 19.00 <br>
                    Сб-Вс: с 10.00 до 14.00
                </div>

            </div>
        </div>
        <div class="footer__phones-footer">
            <div class="phones-footer__phone">
                8 (8634) 64-17-61
            </div>
            <div class="phones-footer__phone">
                8 (950) 843-17-86
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        © 2022 Разработана непонятно кем
    </div>
</footer>
<button id="navigation-arrow" onclick="topFunction()">
    &#8593;
    вверх
</button>

@stack('scripts')
</body>
</html>
