<?php require 'app/views/incs/header.php' ?>
<div class="main-wrapper">
    <main>
        <section class="reviews-page">
            <div class="container">
                <h2 class="">Отзывы</h2>
                <ul class="reviews-grid-layout">
                    <?php foreach ($comments_data as $comment) : ?>
                    <li class="reviews-item">
                        <div class="avatar-wrapper"><img src="<?= $comment['img-src'] ?>" alt="avatar-img"></div>
                        <div class="text-block__reviews">
                            <p><?= $comment['text'] ?></p>
                            <div class="stars">
                                <img src="./public/img/star.svg" alt="star">
                                <img src="./public/img/star.svg" alt="star">
                                <img src="./public/img/star.svg" alt="star">
                                <img src="./public/img/star.svg" alt="star">
                                <img src="./public/img/star.svg" alt="star">
                            </div>
                            <span><?= $comment['name'] ?></span>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </main>
    <?php require 'app/views/incs/footer.php' ?>
</div>