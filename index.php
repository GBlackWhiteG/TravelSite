<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/assets/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Путешествия по России :: Главная</title>
</head>
<body>
<nav class="nav">
    <div class="container">
        <div class="nav-items__wrapper">
            <a href="#">Logo</a>
            <div class="nav-items">
                <a href="#">Главная</a>
                <a href="#">Маршруты</a>
                <a href="#">Отзывы</a>
                <a href="#">Новости</a>
            </div>
            <a href="#">Вход</a>
        </div>
    </div>
</nav>
<header class="header">
    <div class="header__wrapper">
        <img src="./public/img/main.jpg" alt="Главное изображение" class="main-image">
        <h1><span>путешествия по</span><br>россии</h1>
        <form class="header-inputs__wrapper">
            <input type="text" placeholder="Дата">
            <input type="text" placeholder="Место">
            <input class="btn" type="submit" value="">
        </form>
    </div>
</header>
<main>
    <section class="company">
        <div class="container">
            <span class="sub-title">Лучшая</span>
            <h2>Наша компания</h2>
            <div class="company-content__wrapper">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic.</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English.</p>
            </div>
        </div>
    </section>

    <section class="routes">
        <div class="container">
            <span class="sub-title">Самые</span>
            <h2>Популярные места для отдыха</h2>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="./public/img/slide1.jpg" alt="slide-img"></div>
                <div class="swiper-slide"><img src="./public/img/slide1.jpg" alt="slide-img"></div>
                <div class="swiper-slide"><img src="./public/img/slide1.jpg" alt="slide-img"></div>
                <div class="swiper-slide"><img src="./public/img/slide1.jpg" alt="slide-img"></div>
                <div class="swiper-slide"><img src="./public/img/slide1.jpg" alt="slide-img"></div>
                <div class="swiper-slide"><img src="./public/img/slide1.jpg" alt="slide-img"></div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <span class="sub-title">Информация</span>
            <h2>О нас</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200
                Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
                reasonable.</p>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="news-content__wrapper">
                <div class="news-image__wrapper"><img src="./public/img/news1.jpg" alt="news-image"></div>
                <div class="new-content">
                    <span class="sub-title">Последние</span>
                    <h2>Новости</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet..</p>
                    <a class="more-btn" href="#">подробнее</a>
                </div>
            </div>
        </div>
    </section>

    <section class="review">
        <div class="container">
            <div class="review-content__wrapper">
                <span class="sub-title">Отзывы</span>
                <h2>Что говорят наши клиенты</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>
                <div class="stars">
                    <img src="./public/img/star.svg" alt="star">
                    <img src="./public/img/star.svg" alt="star">
                    <img src="./public/img/star.svg" alt="star">
                    <img src="./public/img/star.svg" alt="star">
                    <img src="./public/img/star.svg" alt="star">
                </div>
                <span class="review-author">Майнкрафт Стив</span>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <div class="feedback-content__wrapper">
                <div class="feedback-content">
                    <span class="sub-title">Обратная связь</span>
                    <h2>Остались вопросы?</h2>
                    <form class="feedback-form__wrapper" action="">
                        <input type="text">
                        <input type="text">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <input class="btn" type="submit" value="Отправить">
                    </form>
                </div>
                <div id="map" style="width: 600px; height: 400px"></div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <span>&copy; Copyright <?php echo date("Y") ?></span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://api-maps.yandex.ru/v3/?apikey=ba73c534-98c0-4b51-99f0-b3a05b94e08f&lang=ru_RU"></script>
<script src="./public/scripts/swiper.js"></script>
<script src="./public/scripts/yandexMap.js"></script>
</body>
</html>