<?php require VIEWS . '/incs/nav.php' ?>
<div class="main-wrapper">
    <main>
        <section class="admin-page">
            <div class="container">
                <div class="admin-flex-layout">
                    <h2>Админская панель</h2>
                    <div class="routes-list">
                        <div class="title-block__admin">
                            <h3>Маршруты</h3>
                            <a href="routes/create">Добавить маршрут</a>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Название</th>
                                <th>Краткое описание</th>
                                <th>Цена</th>
                                <th>Изменить</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($routes_data as $routes) : ?>
                            <tr class="table-row__admin">
                                <td><?= $routes['id'] ?></td>
                                <td><?= $routes['title'] ?></td>
                                <td><?= $routes['short_desc'] ?></td>
                                <td><?= $routes['cost'] ?></td>
                                <td>
                                    <button class="btn">Изменить</button>
                                </td>
                                <td>
                                    <button class="btn red-bg">Удалить</button>
                                </td>
                            </tr>
                            <tr>
                                <td><?= $routes['id'] ?></td>
                                <td><input type="text" value="<?= $routes['title'] ?>"></td>
                                <td><textarea><?= $routes['short_desc'] ?></textarea></td>
                                <td><input type="text" value="<?= $routes['cost'] ?>"></td>
                                <td>
                                    <button class="btn">Сохранить</button>
                                </td>
                                <td>
                                    <button class="btn">Отменить</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require VIEWS . '/incs/footer.php' ?>
</div>