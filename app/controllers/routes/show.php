<?php

global $db;

/**
 * @var Db $db
 */

use core\classes\Db;

$id = $_GET['id'] ?? 0;

$route = $db->query("SELECT * FROM routes WHERE id = ? LIMIT 1", [$id])->findOrFail();

$pageTitle = "Путешествия по России :: Маршрут №{$id}";

require_once VIEWS . '/routes/show.blade.php';