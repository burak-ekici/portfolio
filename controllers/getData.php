<?php

require_once(dirname(__DIR__) . '/models/videoAdminModels.php');

function db()
{
    $db = getPosts();
    return $db;
};


$videos = db();