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

?>