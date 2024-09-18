<?php

global $db;

/**
 * @var Db $db
 */

$routes_data = $db->query('SELECT * FROM routes')->findAll();

$userNav = False;
$pageTitle = "Путешествия по России :: Админская панель";

require_once VIEWS . '/admin.blade.php';