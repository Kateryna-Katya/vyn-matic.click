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
        <?= $domainTitle ?> | Передовая IT-школа
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%231a1a1a'/%3E%3Cpath d='M10 10h12v12H10z' fill='none' stroke='%23adff2f' stroke-width='2'/%3E%3Crect x='14' y='14' width='4' height='4' fill='%23adff2f'/%3E%3Cpath d='M16 6v4M16 22v4M6 16h4M22 16h4' stroke='%23adff2f' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#method" class="nav__link">Методология</a></li>
                    <li><a href="./#career" class="nav__link">Карьера</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>
            <a href="./#contact" class="btn btn--outline">Связаться</a>
            <button class="burger" id="burger">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Условия использования</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать в IT-школу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «Школа», «мы»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя нашу образовательную платформу и любые связанные с ней
                услуги, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование сайта.
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Школа предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным учебным материалам, пошаговым программам обучения, экспертным вебинарам и другим инструментам 
                карьерного роста в IT-сфере (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с нашей цифровой инфраструктурой.
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">
                Вы обязуетесь использовать платформу исключительно в законных целях для личного профессионального развития. При использовании <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul data-aos="fade-up">
                <li>
                    Публиковать или передавать любую информацию, которая является незаконной, нарушает авторские права школы или других студентов, либо содержит вредоносный код.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную работу платформы, её безопасность или привести к перегрузке серверов <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Использовать автоматизированные скрипты (ботов) для парсинга учебного контента или иного взаимодействия с сайтом без нашего письменного разрешения.
                </li>
                <li>
                    Предоставлять недостоверную информацию о себе при регистрации на курсы или запросе доступа к платформе.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
            <p data-aos="fade-up">
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая уникальные методики обучения, программный код примеров, графику, видео-уроки и логотипы (далее — «Контент»), является объектом интеллектуальной
                собственности Школы. Вам предоставляется ограниченная, непередаваемая лицензия на использование Контента в личных целях для обучения. 
                Любое копирование, тиражирование или продажа Контента без предварительного 
                письменного разрешения правообладателя строго запрещено и преследуется по закону.
            </p>

            <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
            <p data-aos="fade-up">
                Образовательные материалы предоставляются по принципу «как есть» (as is). Мы стремимся к высочайшему качеству обучения, но не даем гарантий, что контент является абсолютно исчерпывающим в контексте сверхдинамичного рынка IT в Великобритании и странах ЕС.
            </p>
            <p data-aos="fade-up">
                Школа не несет ответственности за любые прямые или косвенные
                убытки, возникшие в результате использования или невозможности использования материалов <strong><?= $domainTitle ?></strong>. 
                Успех вашего обучения и карьерного роста зависит исключительно от ваших усилий и рыночной конъюнктуры.
            </p>

            <h2 data-aos="fade-up">5. Изменения условий</h2>
            <p data-aos="fade-up">
                Мы оставляем за собой право изменять настоящие Условия для отражения изменений в технологиях обучения или законодательстве. 
                Все правки вступают в силу с момента их публикации. Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> означает автоматическое согласие с новой редакцией Условий.
            </p>

            <h2 data-aos="fade-up">6. Разрешение споров</h2>
            <p data-aos="fade-up">
                Все разногласия стороны стремятся разрешить путем переговоров. В случае невозможности достижения согласия, споры подлежат рассмотрению в соответствии 
                с действующим законодательством по месту регистрации Оператора в <strong>Великобритании (Англии)</strong>.
            </p>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы по поводу настоящих Условий, пожалуйста, свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>" class="text-link">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697639457" class="text-link">+390697639457</a><br>
                Адрес: 15 Oxford St, Soho, London W1D 2PS, United Kingdom
            </p>
            
            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(173, 255, 47, 0.1);">
                <p style="font-size: 0.9rem; opacity: 0.7; color: var(--text-dim);">Последняя редакция: Февраль 2026</p>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer__text">
                        Инновационная технология обучения, которая меняет правила игры в индустрии образования.
                    </p>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">Меню</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#courses">Курсы</a></li>
                        <li><a href="./#method">Методология</a></li>
                        <li><a href="./#career">Карьера</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__list">
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
                    <ul class="footer__contact-list">
                        <li><i class="fas fa-phone"></i> +390697639457</li>
                        <li><i class="fas fa-envelope"></i> support@
                            <?= $fullDomain ?>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i> 15 Oxford St, London, UK</li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom">
                <p>&copy; 2026
                    <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
                </p>
            </div>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="accept-cookies" class="btn btn--primary">Принять</button>
    </div>
</div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>