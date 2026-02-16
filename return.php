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
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <h2 data-aos="fade-up">Условия для оформления возврата</h2>
            <p data-aos="fade-up">
                В <strong><?= $domainTitle ?></strong> мы стремимся обеспечить высочайшее качество обучения. Однако вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание учебных модулей или экспертных материалов существенно отличается от программы курса, заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При возникновении критических ошибок на платформе <strong><?= $fullDomain ?></strong>, которые делают пошаговый путь обучения невозможным и не были устранены в течение 72 часов.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Согласно законодательству Великобритании, вы имеете право отказаться от участия в программе в течение 14 (четырнадцати) календарных дней с момента оплаты, если вы еще не получили доступ к основной части учебных материалов.
                </li>
            </ul>

            <h2 data-aos="fade-up">Процедура запроса на возврат</h2>
            <p data-aos="fade-up">
                Чтобы инициировать процедуру возврата средств, пожалуйста, следуйте этой инструкции:
            </p>
            <ol class="custom-list" data-aos="fade-up">
                <li>
                    Отправьте письмо на наш официальный email: 
                    <a href="mailto:hello@<?= $fullDomain ?>" class="text-link">hello@<?= $fullDomain ?></a>.
                </li>
                <li>В теме письма укажите: «Запрос на возврат средств — [Ваше Имя]».</li>
                <li>Укажите email, использованный при регистрации, и точное название курса.</li>
                <li>Опишите причину возврата. Это поможет нам сделать нашу технологию нового поколения еще лучше.</li>
                <li>Наша экспертная поддержка рассмотрит заявку и предоставит ответ в течение 3-х рабочих дней.</li>
            </ol>

            <h2 data-aos="fade-up">Сроки и способ возврата</h2>
            <p data-aos="fade-up">
                После одобрения запроса возврат денежных средств будет произведен в течение 7–14 рабочих дней. Деньги возвращаются тем же способом, которым была совершена оплата. Фактический срок зачисления зависит от регламента вашего банка в <strong>Англии</strong> или другой стране вашего пребывания.
            </p>

            <h2 data-aos="fade-up">Исключения и ограничения</h2>
            <p data-aos="fade-up">Возврат средств не может быть осуществлен, если:</p>
            <ul data-aos="fade-up">
                <li>Запрос подан по истечении 14 календарных дней с момента покупки (вне рамок критических ошибок платформы).</li>
                <li>Вы изучили или скачали более 50% материалов образовательной программы.</li>
                <li>Причиной невозможности обучения являются технические проблемы на стороне пользователя (низкая скорость интернета, несовместимое ПО).</li>
                <li>Были нарушены правила использования платформы <strong><?= $domainTitle ?></strong>.</li>
            </ul>

            <h2 data-aos="fade-up">Изменения в политике</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять настоящую Политику возврата в соответствии с изменениями законодательства Великобритании. Актуальная версия всегда доступна на этой странице.
            </p>

            <h2 data-aos="fade-up">Свяжитесь с нами</h2>
            <p data-aos="fade-up">
                По всем вопросам, связанным с возвратом средств или условиями обучения, пожалуйста, обращайтесь:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>" class="text-link">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697639457" class="text-link">+390697639457</a>
            </p>
            
            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(173, 255, 47, 0.1);">
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