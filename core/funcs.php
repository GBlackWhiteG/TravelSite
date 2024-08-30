<?php

function dump($data): void {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function dd($data): void {
    dump($data);
    die;
}

function abort($code = 404) {
    http_response_code($code);
    require_once VIEWS . "/errors/{$code}.blade.php";
    die;
}