<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/albertusnova.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/sf_ui_display_regular.woff" as="font" type="font/woff" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->

    <script defer src="js/main.js"></script>

    <!-- Marquiz script start -->
    <script>
        (function(w, d, s, o){
            var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function() {
                    Marquiz.init(o);
                });
            };
            d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
                host: '//quiz.marquiz.ru',
                region: 'eu',
                id: '643913f7e984a500254d65b4',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: false,
                disableOnMobile: false
            }
        );
    </script>
    <!-- Marquiz script end -->
</head>

<body>
    <header class="header">
        <div class="container header-container">
            <div class="header-logo">
                <a class="logo" href="javascript:;">
                    <picture>
                        <source srcset="img/logo.webp" type="image/webp">
                        <img
                                loading="lazy"
                                src="img/logo.png"
                                class="image"
                                width="240"
                                height="240"
                                alt="Логотип"
                        >
                    </picture>
                </a>
            </div>
            <div class="header-contacts header-contacts-left">
                <div class="header-contacts-view">
                    <picture>
                        <source srcset="img/globus.webp" type="image/webp">
                        <img
                            loading="lazy"
                            src="img/globus.png"
                            class="image"
                            width="65"
                            height="80"
                            alt="Изображение блока"
                        >
                    </picture>
                </div>
                <div class="header-contacts-descr">
                    <p>
                        <span class="color-yellow">Новосибирск</span>
                    </p>
                    <p>
                        <a class="link link--tdu" href="tel:+73833181320">+7 (383) 318-13-20</a>
                    </p>
                </div>
            </div>
            <div class="header-contacts header-contacts-right">
                <div class="header-contacts-view">
                    <picture>
                        <source srcset="img/map-x.webp" type="image/webp">
                        <img
                                loading="lazy"
                                src="img/map-x.png"
                                class="image"
                                width="80"
                                height="65"
                                alt="Изображение блока"
                        >
                    </picture>
                </div>
                <div class="header-contacts-descr">
                    <p>
                        <span>пр-т&nbsp;Димитрова, д.&nbsp;5&nbsp;(ЦУМ), оф.&nbsp;401 <span class="desktop-only">(4&nbsp;этаж)</span></span>
                    </p>
                    <p>
                        <span>ул.&nbsp;Яринская,&nbsp;д.&nbsp;8</span>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main class="main">