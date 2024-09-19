<?php

global $db;

/**
 * @var Db $db
 */

use frm\Db;

$data = $_POST;
$id = $data['id'];

$db->query("DELETE FROM routes WHERE id = ?", [$id]);
if ($db->rowCount()) {
    $_SESSION['success'] = 'Post deleted';
} else {
    $_SESSION['error'] = 'Deletion error';
}

redirect('admin');
