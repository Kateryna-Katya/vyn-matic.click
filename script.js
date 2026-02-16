document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Инициализация AOS (анимации при скролле)
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });

    // 2. Мобильное меню (Бургер)
    const burger = document.getElementById('burger');
    const nav = document.querySelector('.nav');
    const navLinks = document.querySelectorAll('.nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('burger--active');
        nav.classList.toggle('nav--active');
        document.body.classList.toggle('no-scroll'); // Чтобы не скроллился фон
    };

    burger.addEventListener('click', toggleMenu);

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (nav.classList.contains('nav--active')) {
                toggleMenu();
            }
        });
    });

    // 3. Изменение хедера при скролле
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(26, 26, 26, 0.95)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(26, 26, 26, 0.8)';
        }
    });

    // 4. Логика капчи
    const captchaQuestion = document.getElementById('captcha-question');
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    const correctAnswer = num1 + num2;
    
    if (captchaQuestion) {
        captchaQuestion.textContent = `${num1} + ${num2}`;
    }

    // 5. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phone-input');
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d]/g, '');
        });
    }

    // 6. Обработка формы контактов
    const contactForm = document.getElementById('contact-form');
    const successMessage = document.getElementById('form-success');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const userAnswer = parseInt(document.getElementById('captcha-answer').value);

            if (userAnswer !== correctAnswer) {
                alert('Неверный ответ на капчу. Попробуйте еще раз.');
                return;
            }

            const submitBtn = contactForm.querySelector('.form__submit');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Отправка...';

            // Имитация задержки сети
            setTimeout(() => {
                contactForm.reset();
                successMessage.style.display = 'flex';
                
                setTimeout(() => {
                    successMessage.style.display = 'none';
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Запросить доступ';
                }, 5000);
            }, 1500);
        });
    }

    // 7. Cookie Popup логика
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('cookie-popup--active');
    });
});