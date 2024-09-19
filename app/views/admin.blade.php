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
                            <?php foreach ($routes_data as $route) : ?>
                            <tr class="table-row__admin">
                                <td><?= $route['id'] ?></td>
                                <td><?= $route['title'] ?></td>
                                <td><?= $route['short_desc'] ?></td>
                                <td><?= $route['cost'] ?></td>
                                <td>
                                    <button class="btn">Изменить</button>
                                </td>
                                <td>
                                    <form action="/routes" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $route['id'] ?>">
                                        <button type="submit" class="btn red-bg">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td><?= $route['id'] ?></td>
                                <td><input type="text" value="<?= $route['title'] ?>"></td>
                                <td><textarea><?= $route['short_desc'] ?></textarea></td>
                                <td><input type="text" value="<?= $route['cost'] ?>"></td>
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