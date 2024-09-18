<?php

global $db;

/**
 * @var Db $db
 */

use frm\Db;

$news_data = $db->query("SELECT * FROM news")->findAll();

$pageTitle = 'Путешествия по России :: Новости';

require_once '../app/views/news.blade.php';