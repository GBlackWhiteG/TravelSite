<?php

/**
 * @var Validator $validation ;
 */

use frm\Validator;

require VIEWS . '/incs/nav.php' ?>

<div class="main-wrapper">
    <main>
        <section class="admin-page">
            <div class="container">
                <?php get_alerts(); ?>
                <div class="wrapper">
                    <h3>Добавить маршрут</h3>
                    <form action="/routes" method="POST" class="modal-wrapper">
                        <label for="title">Название</label>
                        <input id="title" type="text" name="title" value="<?= old('title') ?>">
                        <?= isset($validation) ? $validation->listErrors('title') : '' ?>

                        <label for="short_desc"> Краткое описание </label>
                        <textarea id="short_desc" name="short_desc"><?= old('short_desc') ?></textarea>
                        <?= isset($validation) ? $validation->listErrors('short_desc') : '' ?>

                        <label for="description">Описание</label>
                        <textarea id="description" name="description"><?= old('description') ?></textarea>
                        <?= isset($validation) ? $validation->listErrors('description') : '' ?>

                        <label for="cost">Цена</label>
                        <input id="cost" type="text" name="cost" value="<?= old('cost') ?>">
                        <?= isset($validation) ? $validation->listErrors('cost') : '' ?>

                        <label for="img_url">Ссылка на картинку</label>
                        <input id="img_url" type="text" name="img_url" value="<?= old('img_url') ?>">
                        <?= isset($validation) ? $validation->listErrors('img_url') : '' ?>

                                <!-- <input id="img_url" type="file" name="img_url"> -->
                        <input type="submit" value="Добавить" class="btn">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require VIEWS . '/incs/footer.php' ?>
</div>