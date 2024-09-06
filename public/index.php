<?php

use frm\Db;

require_once __DIR__ . '/../vendor/autoload.php';

require_once dirname(__DIR__) . '/config/config.php';

require_once CORE . '/funcs.php';

$db_config = require_once CONFIG . '/db.php';
$db = (Db::getInstance())->getConnection($db_config);

require_once CONFIG . '/routes.php';
require_once CORE . '/router.php';
