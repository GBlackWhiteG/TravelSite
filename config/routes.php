<?php

/**
 * @var $router
 */

/* MAIN */
$router->get('', 'main.php');
$router->get('admin', 'admin.php');
$router->get('account', 'account.php');

/* AUTH */
$router->get('signin', 'signin.php');
$router->get('signup', 'signup.php');

/* ROUTES */
$router->get('routes', 'routes/index.php');
$router->get('routes/show', 'routes/show.php'); // заменить на routes/{id}
$router->get('routes/create', 'routes/create.php');
$router->post('routes', 'routes/store.php');
$router->get('routes/edit', 'routes/edit.php');
$router->patch('routes/update', 'routes/update.php');
$router->delete('routes', 'routes/destroy.php');

/* REVIEWS */
$router->get('reviews', 'reviews/index.php');

/* NEWS */
$router->get('news', 'news/index.php');
