<?php

function dump($data): void
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function print_arr($data): void
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function dd($data): void
{
    dump($data);
    die;
}

function abort($code = 404): void
{
    http_response_code($code);
    require_once VIEWS . "/errors/{$code}.blade.php";
    die;
}

function load($fillable = []): array
{
    $data = [];
    foreach ($_POST as $k => $v) {
        if (in_array($k, $fillable)) {
            $data[$k] = trim($v);
        }
    }

    return $data;
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function old($fieldname)
{
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function redirect($url = ''): void
{
    if (!$url) {
        $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }

    header("Location: {$url}");
    exit;
}

function get_alerts()
{
    if (isset($_SESSION['success'])) {
        require_once VIEWS . '/incs/alert_success.php';
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        require_once VIEWS . '/incs/alert_error.php';
        unset($_SESSION['error']);
    }
}

function db(): \frm\Db
{
    return \frm\App::get(\frm\Db::class);
}

