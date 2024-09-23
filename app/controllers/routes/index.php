<?php

$db = db();

/**
 * @var Db $db
 */

use frm\Db;

$routes_data = $db->query('SELECT * FROM routes')->findAll();

$pageTitle = 'Путешествия по России :: Маршруты';

require_once VIEWS . '/routes/index.blade.php';
