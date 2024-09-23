<?php

$container = new \frm\ServiceContainer();
$container->setService(\frm\Db::class, function() {
    $db_config = require CONFIG . '/db.php';
    return (\frm\Db::getInstance())->getConnection($db_config);
});

\frm\App::setContainer($container);
