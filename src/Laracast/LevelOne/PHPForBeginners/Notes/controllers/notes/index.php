<?php

use Core\Database;

$config = require(base_path(BASE_PATH."/../config.php"));
// require(base_path(BASE_PATH."Database.php"));

$db = new Database($config['database']);
$notes = $db->query("select * from notes where user_id=1")->findAll();

view(BASE_PATH."notes/index.view.php",[
    'heading' => 'My Note',
    "notes" => $notes
]);