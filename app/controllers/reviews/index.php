<?php

global $db;

/**
 * @var Db $db
 */

use frm\Db;

$comments_data = $db->query("SELECT * FROM comments")->findAll();

$pageTitle = 'Путешествия по России :: Отзывы';

require_once VIEWS . '/reviews.blade.php';