<?php

/**
 * @var Db $db
 */

use frm\Db;
use frm\Validator;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fillable = ['title', 'short_desc', 'description', 'cost', 'img_url'];
    $data = load($fillable);

    $validator = new Validator();
    $validation = $validator->validate($data, [
        'title' => [
            'required' => true,
            'min' => 5,
            'max' => 190,
        ],
        'short_desc' => [
            'required' => true,
            'min' => 10,
            'max' => 190,
        ],
        'description' => [
            'required' => true,
            'min' => 10,
            'max' => 1000,
        ],
        'cost' => [
            'required' => true,
        ],
        'img_url' => [
            'required' => true,
        ]
    ]);

    if (!$validation->hasErrors()) {
        if ($db->query("INSERT INTO routes (`title`, `short_desc`, `description`, `cost`, `img_url`) VALUES (:title, :short_desc, :description, :cost, :img_url)", $data)) {
            $_SESSION['success'] = 'OK';
        } else {
            $_SESSION['error'] = 'DB Error';
        }
        redirect('/routes/create');
    } else {
        $errors = $validation->getErrors();
    }

    if (empty($errors)) {

    }
}

$userNav = False;
$pageTitle = "Путешествия по России :: Админская панель";

require_once VIEWS . '/route-create.blade.php';