<?php
require_once('./utilis/connect.php');

$request = $db->query('SELECT * FROM message JOIN user ON message.user_id = user.id ORDER BY message.id DESC LIMIT 10   ');
    $jointures = $request->fetchAll();
    $jointures = array_reverse($jointures);


