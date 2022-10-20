@extends('layout');

@section('title', 'Page Title')

@section('content')
    <div class="welcome">
        <div class="welcome__content">
            <div class="welcome__text">
                <div class="welcome__title">
                    Добро Пожаловать в <br>Современную стоматологию
                </div>
                <div class="welcome__subtitle">
                    Мы вам рады
                </div>
            </div>
            <a href="{{route('services')}}">
                <button class="welcome__button button">
                    Посмотреть все услуги
                </button>
            </a>
        </div>
        <img src="img/kisspng-madhavbaug-clinic-thakurli-coding-alcoholism-thera-black-nurse-5b35a3500db0c3.0956155715302418720561 1.png"
             class="welcome__image"/>
    </div>

    <div class="main-page__services">
        <div class="services__title">
            Наши услуги
        </div>
        <div class="services__text">
            Наша команда высококвалифицированных специалистов поможет максимально быстро и безболезненно решить все ваши
            проблемы. Ниже вы можете ознакомиться со списком оказываемых нами услуг. Мы сделаем всё, чтобы у вас была
            красивая улыбка!
        </div>
        <div class="services__slider" data-slider="services-slider" data-loop="true">
            <button class="slider__button" id="slider__prev-btn" data-slide="prev">
                <img src="img/prev.PNG" class="slider__arrow"/>
            </button>
            <div class="services__slider-wrapper">
                <div class="services__items">
                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service1.png"/>
                            <div class="service__header">
                                Лечение пародонтита
                            </div>
                            <div class="service__text">
                                Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                                симптомы,
                                которые неизбежно приводят красшатыванию и выпадению зубов.
                            </div>
                        </div>
                    </div>
                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service2.png"/>
                            <div class="service__header">
                                Терапевтическая стоматология
                            </div>
                            <div class="service__text">
                                Благодаря современным методам лечения и новейшему оборудованию, используемому в стоматологии
                                зубов, возрастает уровень качества лечения зубов.
                            </div>
                        </div>
                    </div>

                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service3.png"/>
                            <div class="service__header">
                                Диагностиеские исследования
                            </div>
                            <div class="service__text">
                                При первичном обращении пациента стоматолог проводит осмотр его полости рта и дополнительные
                                необходимые исследования для постановки четкого диагноза.
                            </div>
                        </div>
                    </div>

                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service4.png"/>
                            <div class="service__header">
                                Металл коронки
                            </div>
                            <div class="service__text">
                                Чаще применяются для жевательных зубов боковых отделов, которые не так видны. Внешний вид
                                коронок из металлокерамики практически идентичен натуральным зубам.
                            </div>
                        </div>
                    </div>

                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service1.png"/>
                            <div class="service__header">
                                Лечение пародонтита
                            </div>
                            <div class="service__text">
                                Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                                симптомы,
                                которые неизбежно приводят красшатыванию и выпадению зубов.
                            </div>
                        </div>
                    </div>

                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service1.png"/>
                            <div class="service__header">
                                Лечение пародонтита
                            </div>
                            <div class="service__text">
                                Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                                симптомы,
                                которые неизбежно приводят красшатыванию и выпадению зубов.
                            </div>
                        </div>
                    </div>

                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service1.png"/>
                            <div class="service__header">
                                Лечение пародонтита
                            </div>
                            <div class="service__text">
                                Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                                симптомы,
                                которые неизбежно приводят красшатыванию и выпадению зубов.
                            </div>
                        </div>
                    </div>

                    <div class="services__item">
                        <div class="service">
                            <img class="service__img" src="img/service1.png"/>
                            <div class="service__header">
                                Лечение пародонтита
                            </div>
                            <div class="service__text">
                                Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                                симптомы,
                                которые неизбежно приводят красшатыванию и выпадению зубов.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="slider__button" id="slider__next-btn" data-slide="next">
                <img src="img/next.PNG" class="slider__arrow"/>
            </button>
        </div>
        <a href="{{route('services')}}">
            <button class="services__button button">
                Все услуги
            </button>
        </a>
    </div>
    <div class="guarantee">
        <div class="guarantee__title">
            Мы гарантируем
        </div>
        <div class="guarantee__text">
            Все стоматологические процедуры проводятся нашими опытными врачами по самым высоким стандартам с использованием
            лучших доступных материалов и технологий.
        </div>
        <div class="services__items guarantee__items">
            <div class="guarantee__service service">
                <img class="service__img" src="img/service1.png"/>
                <div class="service__title title">
                    Лечение пародонтита
                </div>
                <div class="guarantee__service-text service__text">
                    Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                    симптомы,
                    которые неизбежно приводят красшатыванию и выпадению зубов.
                </div>
            </div>
            <div class="guarantee__service service">
                <img class="service__img" src="img/service1.png"/>
                <div class="service__title title">
                    Лечение пародонтита
                </div>
                <div class="guarantee__service-text service__text">
                    Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                    симптомы,
                    которые неизбежно приводят красшатыванию и выпадению зубов.
                </div>
            </div>
            <div class="guarantee__service service">
                <img class="service__img" src="img/service1.png"/>
                <div class="service__title title">
                    Лечение пародонтита
                </div>
                <div class="guarantee__service-text service__text">
                    Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                    симптомы,
                    которые неизбежно приводят красшатыванию и выпадению зубов.
                </div>
            </div>
            <div class="guarantee__service service">
                <img class="service__img" src="img/service1.png"/>
                <div class="service__title title">
                    Лечение пародонтита
                </div>
                <div class="guarantee__service-text service__text">
                    Неприятный запах изо рта, кровоточивость десен, зубные над- и поддесневые отложения - это
                    симптомы,
                    которые неизбежно приводят красшатыванию и выпадению зубов.
                </div>
            </div>
        </div>
    </div>

    <div class="command">
        <div class="command__title title">
            Наши услуги
        </div>
        <div class="command__text">
            Наша команда высококвалифицированных специалистов поможет максимально быстро и безболезненно решить все ваши
            проблемы. Ниже вы можете ознакомиться со списком оказываемых нами услуг. Мы сделаем всё, чтобы у вас была
            красивая улыбка!
        </div>
        <div class="command__slider" data-slider="command-slider" data-loop="true">
            <button class="slider__button" id="command-slider__prev-btn" data-slide="prev">
                <img src="img/prev.PNG" class="slider__arrow"/>
            </button>
            <div class="command__slider-wrapper">
                <div class="command__items">
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command1.png"/>
                        <div class="command-item__title title">
                            Раскольников Р. Р.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command2.png"/>
                        <div class="command-item__title title">
                            Раольникова А. Р.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command3.png"/>
                        <div class="command-item__title title">
                            Мармеладова С. З.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command4.png"/>
                        <div class="command-item__title title">
                            Каквастам С. А.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command3.png"/>
                        <div class="command-item__title title">
                            Каквастам С. А.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command3.png"/>
                        <div class="command-item__title title">
                            Каквастам С. А.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command3.png"/>
                        <div class="command-item__title title">
                            Каквастам С. А.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                    <div class="command__item command-item">
                        <img class="command-item__img" src="img/command1.png"/>
                        <div class="command-item__title title">
                            Каквастам С. А.
                        </div>
                        <div class="command-item__subheader">
                            Врач-стоматолог
                        </div>
                        <a href="employee.html">
                            <button class="invert-btn">
                                УЗНАТЬ БОЛЬШЕ
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <button class="slider__button" id="command-slider__next-btn" data-slide="next">
                <img src="img/next.PNG" class="slider__arrow"/>
            </button>
        </div>
        <div class="command__text">
            В Современной Стоматологии вас встретят с улыбкой, вы получите быстрое и качественное обслуживание, по доступным
            ценам и без переплат. Наш персонал обладает большим опытом в сфере стоматологии и будет рад ответить на все
            интересующие вас вопросы, объяснить суть проведения необходимых процедур простым и доступным языком. Наши
            специалисты имеют высокий уровень аккредитации и постоянно следят за новостями современной медицины, чтобы
            оставаться в курсе всех происходящих в стоматологии
        </div>
        <a href="services.html">
            <button class="command__button button">
                ВСЕ УСЛУГИ
            </button>
        </a>
    </div>
@endsection

@push('scripts')
    <script src="js/index.js"></script>
    <script src="js/navigation-arrow.js"></script>
    <script src="js/sign-in-modal.js"></script>
@endpush
