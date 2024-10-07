<?php

$db = db();

/**
 * @var Db $db
 */

use frm\Db;

$total = $db->query('SELECT COUNT(*) FROM routes')->columnCount();
$per_page = 3;
$page = $_GET['page'] ?: 1;

$pagination = new \frm\Pagination((int)$page, $per_page, $total);
$start = $pagination->getStart();

$routes_data = $db->query("SELECT * FROM routes ORDER BY id DESC LIMIT $start, $per_page")->findAll();

$pageTitle = 'Путешествия по России :: Маршруты';

require_once VIEWS . '/routes/index.blade.php';
