<?php require VIEWS . '/incs/nav.php' ?>
<?php require VIEWS . '/incs/header.php' ?>
<div class="main-wrapper">
    <main>
        <section class="routes-page">
            <div class="container">
                <h2 class="">Маршруты</h2>
                <ul class="routes-grid-layout">
                    <?php foreach ($routes_data as $route) : ?>
                    <a href="route?id=<?= $route['id'] ?>">
                        <li class="routes-item">
                            <img src="<?= $route['img_url'] ?>" alt="route-img">
                            <div class="text-block__routes">
                                <h4><?= h($route['title']) ?></h4>
                                <p><?= h($route['short_desc']) ?></p>
                            </div>
                        </li>
                    </a>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </main>
    <?php require VIEWS . '/incs/footer.php' ?>
</div>