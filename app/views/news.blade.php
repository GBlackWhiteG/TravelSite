<?php require 'app/views/incs/header.php' ?>
<div class="main-wrapper">
    <main>
        <section class="news-page">
            <div class="container">
                <h2 class="">Новости</h2>
                <ul class="news-grid-layout">
                    <?php foreach ($news_data as $news) : ?>
                    <li class="news-item">
                        <div class="image-wrapper__news"><img src="<?= $news['img-src'] ?>" alt="news-img"></div>
                        <div class="new-content-block">
                            <h4><?= $news['title'] ?></h4>
                            <p><?= $news['content'] ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </main>
    <?php require 'app/views/incs/footer.php' ?>
</div>