<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Экспертный консалтинг и стратегии роста
    </title>
<link rel="icon"
    href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3ClinearGradient id='grad' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23635BFF;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%230A2540;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Cpath d='M4 16H9L12 6L18 26L21 16H28' stroke='url(%23grad)' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'/%3E%3Ccircle cx='28' cy='16' r='3' fill='%23635BFF' /%3E%3C/svg%3E"
    type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Manrope:wght@500;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategies" class="nav__link">Стратегии</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline header__cta">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Настоящая Политика конфиденциальности распространяется на персональные данные,
                предоставляемые студентами и абитуриентами <strong><?= $domainTitle ?></strong>, как для прохождения обучения
                и участия в образовательных программах, так и для других взаимодействий в электронном
                формате, а также при участии в экспертных вебинарах и акциях, обеспечивая
                техническую поддержку и информационное сопровождение на пути к вашей карьере в IT.
            </p>

            <p data-aos="fade-up" data-aos-delay="200">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние инструменты (например, сервисы визуализации или платформы для кода), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с добровольного согласия
                пользователя и исключительно для предоставления качественных образовательных услуг: доступа к учебной платформе,
                участия в практических сессиях, получения методических материалов и внедрения инноваций в ваше обучение. Для
                предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования и защищенную цифровую инфраструктуру.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации в соответствии с требованиями законодательства Великобритании. В остальных случаях школа хранит данные студента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p data-aos="fade-up">
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель сбора (завершение обучения) была достигнута или по запросу студента.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul data-aos="fade-up">
                <li>время доступа и IP-адрес;</li>
                <li>источники перехода на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы, посещаемые пользователем в рамках учебной платформы;</li>
                <li>просмотры информационных и учебных блоков;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации или заполнении форм на получение доступа к платформе мы собираем информацию, 
                необходимую для аутентификации и персонализации вашего пошагового пути:
            </p>
            <ul data-aos="fade-up">
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи с куратором;</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>информация о соглашениях на обучение между студентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы обратной связи;</li>
                <li>сведения о пройденных курсах, выполненных проектах и полученных сертификатах;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная законодательством Англии и ЕС.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки персональных данных:</h2>
            <ul data-aos="fade-up">
                <li>предоставление образовательных услуг и доступа к личной платформе обучения;</li>
                <li>учет пожеланий студентов при разработке новых учебных модулей;</li>
                <li>информирование о новых курсах, вебинарах и вакансиях партнеров через e-mail;</li>
                <li>обеспечение экспертной поддержки на всех этапах обучения.</li>
            </ul>

            <h2 data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не предоставляет данные студентов третьим лицам, за исключением:
            </h2>
            <ul data-aos="fade-up">
                <li>получения прямого согласия пользователя на такую передачу (например, для трудоустройства);</li>
                <li>по требованию компетентных органов Великобритании в соответствии с законом;</li>
                <li>случаев стратегической реорганизации образовательной платформы.</li>
            </ul>

            <h2 data-aos="fade-up">Использование файлов cookie и точечных маркеров</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Англия), 
                чтобы сделать ваше взаимодействие с <strong><?= $fullDomain ?></strong> максимально удобным. Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2 data-aos="fade-up">Права пользователя</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать свои данные или отозвать согласие на их обработку в соответствии с нормами UK GDPR, 
                пожалуйста, свяжитесь с командой поддержки <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:hello@<?= $fullDomain ?>" class="text-link">hello@<?= $fullDomain ?></a>.
            </p>
        </div>
    </section>
</main>




     <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">Технологии нового поколения для вашего бизнеса. Переосмыслите подход к
                    развитию вместе с экспертной поддержкой.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategies">Стратегии</a></li>
                    <li><a href="./#expertise">Экспертиза</a></li>
                    <li><a href="./#insights">Инсайты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li><i data-lucide="phone" class="icon-sm"></i> +390697639457</li>
                    <li><i data-lucide="mail" class="icon-sm"></i> hello@
                        <?= $fullDomain ?>
                    </li>
                    <li><i data-lucide="map-pin" class="icon-sm"></i> Kurfürstendamm 21, 10719 Berlin, Germany</li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div class="mobile-menu">
    <button class="mobile-menu__close"><i data-lucide="x"></i></button>
    <ul class="mobile-menu__list">
        <li><a href="./#hero" class="mobile-menu__link">Главная</a></li>
        <li><a href="./#strategies" class="mobile-menu__link">Стратегии</a></li>
        <li><a href="./#expertise" class="mobile-menu__link">Экспертиза</a></li>
        <li><a href="./#insights" class="mobile-menu__link">Инсайты</a></li>
        <li><a href="./#reviews" class="mobile-menu__link">Отзывы</a></li>
        <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
    </ul>
</div>

<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--accent-sm">Принять</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script type="module" src="script.js"></script>    
 
    
</body>

</html>