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
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать в IT-школу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                обучения и взаимодействия с нашей платформой, обеспечить её корректную работу и
                анализировать активность пользователей, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие
                именно технологии мы применяем, для каких целей, и как вы можете ими
                управлять.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой фрагмент данных (текстовый файл),
                который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                или смартфоне), когда вы его посещаете. Это позволяет платформе 
                <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                (например, выбранный курс, язык интерфейса, настройки региона Англия и другие параметры) 
                в течение определенного времени, чтобы вам не приходилось вводить их 
                повторно при каждом визите.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                    критически важны для функционирования образовательной платформы. Они позволяют вам
                    перемещаться по страницам <strong><?= $domainTitle ?></strong>, заходить в личный кабинет и использовать базовые возможности. 
                </li>
                <li>
                    <strong>Аналитические и производительные файлы cookie:</strong>
                    Эти файлы собирают анонимную информацию о том, как студенты
                    используют наш сайт, помогая нам улучшать контент курсов и программ.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                    сайту запоминать ваш выбор для предоставления более
                    персонализированного опыта в рамках наших образовательных программ.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                    используются для доставки объявлений, соответствующих вашим интересам в сфере IT.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
            <p data-aos="fade-up">Основные цели использования файлов cookie в <strong><?= $domainTitle ?></strong>:</p>
            <ul data-aos="fade-up">
                <li>Обеспечение стабильной и безопасной работы платформы обучения.</li>
                <li>Анализ пользовательского поведения для оптимизации структуры учебных материалов.</li>
                <li>Персонализация контента и настроек для удобства пользователей в Великобритании и Европе.</li>
                <li>Предоставление релевантных маркетинговых материалов о новых курсах и скидках.</li>
            </ul>

            <h2 data-aos="fade-up">Ваш выбор и управление файлами cookie</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над файлами cookie. Вы можете в любой
                момент изменить свои настройки в браузере или через наш Cookie-popup. Однако, обратите
                внимание: отключение строго необходимых cookie может привести к
                некорректной работе некоторых функций нашего сайта, включая доступ к учебным модулям.
            </p>

            <h2 data-aos="fade-up">Файлы cookie третьих сторон</h2>
            <p data-aos="fade-up">
                На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы
                сторонних компаний, например, Google Analytics для аналитики или Three.js для 3D-визуализаций в учебных материалах. 
                Мы рекомендуем вам ознакомиться с их политиками конфиденциальности на их официальных ресурсах.
            </p>

            <h2 data-aos="fade-up">Обновления настоящей политики</h2>
            <p data-aos="fade-up">
                Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в технологиях обучения или
                законодательстве. Продолжение использования нашего сайта будет означать ваше согласие с обновленными условиями.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли какие-либо вопросы касательно нашей политики
                использования файлов cookie в <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>" class="text-link">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697639457" class="text-link">+390697639457</a><br>
                Адрес: 15 Oxford St, Soho, London W1D 2PS, United Kingdom
            </p>
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