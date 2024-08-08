<?php require 'app/views/incs/header.php' ?>
<div class="main-wrapper">
    <main>
        <section class="routes-page">
            <div class="container">
                <h2 class="">Маршруты</h2>
                <ul class="routes-grid-layout">
                    <?php foreach ($routes_data as $route) : ?>
                    <li class="routes-item">
                        <img src="<?= $route['img-src'] ?>" alt="route-img">
                        <div class="text-block__routes">
                            <h4><?= $route['title'] ?></h4>
                            <p><?= $route['desc'] ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </main>
    <?php require 'app/views/incs/footer.php' ?>
</div>