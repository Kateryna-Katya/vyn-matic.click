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
            <h1 data-aos="fade-up">Политика обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые образовательной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с требованиями UK GDPR и международными стандартами.
            </p>
            <p data-aos="fade-up">
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, в том числе защиты прав на
                неприкосновенность частной жизни, личную и семейную тайну.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul data-aos="fade-up">
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ и баз данных IT-школы,
                    обеспечивающих их доступность в сети интернет по адресу 
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному Пользователю.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие, совершаемое с 
                    использованием средств автоматизации или без них с данными Пользователя (сбор, запись, хранение, уточнение, удаление).
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя (для идентификации в системе обучения);</li>
                        <li>Адрес электронной почты (для доступа к материалам);</li>
                        <li>Номера телефонов (валидация по международным стандартам).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Обезличенные данные о посетителях (файлы «cookie») с помощью сервисов
                            Google Аналитика. Эти данные включают IP-адрес, тип браузера и параметры устройства для корректного отображения интерактивных элементов.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul data-aos="fade-up">
                <li>
                    Идентификация Пользователя для предоставления доступа к личному кабинету и 
                    образовательным ресурсам <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Установление обратной связи, включая направление уведомлений о новых курсах, 
                    графике лекций и обработку заявок на обучение.
                </li>
                <li>
                    Исполнение договоров на предоставление образовательных услуг в Великобритании и странах ЕС.
                </li>
                <li>
                    Информирование о технологиях нового поколения и программах карьерного роста. 
                    Вы можете отозвать согласие в любой момент, отправив письмо на 
                    <a href="mailto:hello@<?= $fullDomain ?>" class="text-link">hello@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">5. Безопасность и хранение данных</h2>
            <ul data-aos="fade-up">
                <li>
                    Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, 
                    исключающие доступ к ним неавторизованных лиц.
                </li>
                <li>
                    Ваши данные никогда, ни при каких условиях не будут переданы третьим лицам, 
                    за исключением случаев, связанных с исполнением действующего законодательства.
                </li>
                <li>
                    Срок обработки персональных данных является неограниченным. Пользователь может 
                    в любой момент отозвать свое согласие на обработку.
                </li>
            </ul>

            <h2 data-aos="fade-up">6. Заключительные положения</h2>
            <p data-aos="fade-up">
                Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-link">hello@<?= $fullDomain ?></a><br>
                <strong>Адрес кампуса:</strong> 15 Oxford St, Soho, London W1D 2PS, United Kingdom
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