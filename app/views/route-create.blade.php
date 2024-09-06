<?php require VIEWS . '/incs/nav.php' ?>
<div class="main-wrapper">
    <main>
        <section class="admin-page">
            <div class="container">
                <div class="admin-flex-layout">
                    <h3>Добавить маршрут</h3>
                    <form action="" method="POST" class="modal-wrapper">
                        <label for="title">Название</label>
                        <input id="title" type="text" name="title" value="<?= old('title') ?>">
                        <?php if (isset($errors['title'])): ?>
                        <span><?= $errors['title'] ?></span>
                        <?php endif; ?>

                        <label for="short_desc">Краткое описание</label>
                        <textarea id="short_desc" name="short_desc"><?= old('short_desc') ?></textarea>
                        <?php if (isset($errors['short_desc'])): ?>
                        <span><?= $errors['short_desc'] ?></span>
                        <?php endif; ?>

                        <label for="description">Описание</label>
                        <textarea id="description" name="description"><?= old('description') ?></textarea>
                        <?php if (isset($errors['description'])): ?>
                        <span><?= $errors['description'] ?></span>
                        <?php endif; ?>

                        <label for="cost">Цена</label>
                        <input id="cost" type="text" name="cost" value="<?= old('cost') ?>">
                        <?php if (isset($errors['cost'])): ?>
                        <span><?= $errors['cost'] ?></span>
                        <?php endif; ?>

                        <label for="img_url">Ссылка на картинку</label>
                        <input id="img_url" type="text" name="img_url" value="<?= old('img_url') ?>">
                        <?php if (isset($errors['img_url'])): ?>
                        <span><?= $errors['img_url'] ?></span>
                        <?php endif; ?>

                        <!-- <input id="img_url" type="file" name="img_url"> -->
                        <input type="submit" value="Добавить" class="btn">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require VIEWS . '/incs/footer.php' ?>
</div>