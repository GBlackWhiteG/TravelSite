<?php require VIEWS . '/incs/nav.php' ?>
<?php require VIEWS . '/incs/header.php' ?>
<div class="main-wrapper">
    <main>
        <section class="routes-page">
            <div class="container">
                <h2 class="">Маршрут <?= $id ?></h2>
                <p><?= h($route['short_desc']) ?></p>
                <p><?= h($route['description']) ?></p>
            </div>
        </section>
    </main>
    <?php require VIEWS . '/incs/footer.php' ?>
</div>