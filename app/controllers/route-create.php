<?php

/**
 * @var Db $db
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fillable = ['title', 'short_desc', 'description', 'cost', 'img_url'];
    $data = load($fillable);

    $errors = [];
    if (empty($data['title'])) {
        $errors['title'] = 'Title is required';
    }
    if (empty($data['short_desc'])) {
        $errors['short_desc'] = 'Short description is required';
    }
    if (empty($data['description'])) {
        $errors['description'] = 'Description is required';
    }
    if (empty($data['cost'])) {
        $errors['cost'] = 'Cost is required';
    }
    if (empty($data['img_url'])) {
        $errors['img_url'] = 'Image url is required';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO routes (`title`, `short_desc`, `description`, `cost`, `img_url`) VALUES (:title, :short_desc, :description, :cost, :img_url)", $data);
        redirect('/routes/create');
    }
}

$userNav = False;
$pageTitle = "Путешествия по России :: Админская панель";

require_once VIEWS . '/route-create.blade.php';