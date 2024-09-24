<?php

/**
 * @var $router
 */

const MIDDLEWARE = [
    'auth' => \frm\middleware\Auth::class,
    'guest' => \frm\middleware\Guest::class,
    'admin' => \frm\middleware\Admin::class,
];

/* MAIN */
$router->get('', 'main.php');
$router->get('admin', 'admin.php');
$router->get('account', 'account.php');

/* AUTH */
$router->get('logout', 'logout.php')->only('auth');
$router->get('login', 'login.php')->only('guest');
$router->get('register', 'register.php')->only('guest');

/* ROUTES */
$router->get('routes', 'routes/index.php')->only('auth');
$router->get('routes/show', 'routes/show.php'); // заменить на routes/{id}
$router->get('routes/create', 'routes/create.php')->only('admin');
$router->post('routes', 'routes/store.php');
$router->get('routes/edit', 'routes/edit.php');
$router->patch('routes/update', 'routes/update.php');
$router->delete('routes', 'routes/destroy.php');

/* REVIEWS */
$router->get('reviews', 'reviews/index.php');

/* NEWS */
$router->get('news', 'news/index.php');
