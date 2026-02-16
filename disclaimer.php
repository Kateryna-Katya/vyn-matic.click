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
            <h1 data-aos="fade-up">Отказ от ответственности (Дисклеймер)</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                <strong>Общая информация:</strong> Все учебные материалы, курсы и сведения,
                опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-образовательный характер. Они не являются и не должны
                рассматриваться как прямая гарантия трудоустройства, профессиональный юридический совет 
                или финансовая рекомендация. Проект <strong><?= $domainTitle ?></strong> предоставляет инструменты для обучения, 
                но не берет на себя ответственность за конечные бизнес-решения пользователя.
            </p>

            <p data-aos="fade-up" data-aos-delay="200">
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> делает все возможное для поддержания актуальности контента, однако мы не даем безусловных гарантий
                относительно точности или полноты представленной информации. Любые упоминания потенциального карьерного старта, 
                уровня зарплат выпускников или преимуществ программы пассивного дохода являются примерами, основанными на рыночных показателях Англии и ЕС, и не гарантируют аналогичных результатов для каждого студента. 
                Индивидуальные итоги обучения зависят от вашего личного вклада и ситуации на рынке труда.
            </p>

            <p data-aos="fade-up" data-aos-delay="300">
                <strong>Ограничение ответственности:</strong> Администрация платформы <strong><?= $fullDomain ?></strong>,
                её владельцы и партнеры не несут ответственности за
                любые прямые или косвенные убытки, возникшие в результате использования материалов сайта. Вся
                ответственность за применение изученных методологий и использование технологий, которые меняют правила игры,
                лежит исключительно на пользователе. Контент собирается из передовых и надежных IT-источников, актуальных на момент публикации.
            </p>

            <p data-aos="fade-up" data-aos-delay="400">
                <strong>Предупреждение о рисках:</strong> Любая деятельность, связанная с инвестициями в обучение или изменением карьерного пути, сопряжена с определенным уровнем риска. Перед принятием
                важных стратегических решений мы настоятельно рекомендуем провести
                собственный анализ рынка Великобритании и проконсультироваться с квалифицированным
                независимым специалистом в области карьеры или права.
            </p>

            <p data-aos="fade-up" data-aos-delay="500">
                <strong>Подтверждение пользователя:</strong> Продолжая использовать
                образовательную платформу <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                действуете по собственной воле, полностью осознаете и принимаете все
                упомянутые риски и условия данного отказа от ответственности.
            </p>

            <div class="pages-footer" data-aos="fade-in" data-aos-delay="600" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(173, 255, 47, 0.1);">
                <p style="font-size: 0.9rem; opacity: 0.7; color: var(--text-dim);">Последнее обновление: Февраль 2026</p>
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