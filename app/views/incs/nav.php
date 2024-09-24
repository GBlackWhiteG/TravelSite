<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/public/assets/main.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/nav.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/header.css">
    <link rel="stylesheet" type="text/css" href="/public/assets/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title><?= $pageTitle ?? 'Путешествия по России' ?></title>
</head>
<body>

<div class="wrapper">
    <nav class="nav">
        <div class="container">
            <div class="nav-items__wrapper <?= $userNav === NULL ? '' : 'nav-items-admin__wrapper'?>">
                <a href="/">Logo</a>
                <div class="nav-items">
                    <a href='/'>Главная</a>
                    <a href="/routes">Маршруты</a>
                    <a href="/reviews">Отзывы</a>
                    <a href="/news">Новости</a>
                </div>
                <a href="/login">Вход</a>
            </div>
        </div>
    </nav>