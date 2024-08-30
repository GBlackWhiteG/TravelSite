<?php

/**
 * @var Db $db
 */

$id = $_GET['id'] ?? 0;

$route = $db->query("SELECT * FROM routes WHERE id = ? LIMIT 1", [$id])->findOrFail();

$pageTitle = "Путешествия по России :: Маршрут №{$id}";

require_once VIEWS . '/route.blade.php';