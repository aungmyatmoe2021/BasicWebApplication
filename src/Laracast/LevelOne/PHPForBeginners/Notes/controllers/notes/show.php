<?php

use Core\Database;
use Core\Router;

$config = require(base_path(BASE_PATH."../config.php"));
$db = new Database($config['database']);
$router = new Router();

$currentUserId = 1;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $note = $db->query("select * from notes where id = :id",[
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] == $currentUserId,403,$router);

    $db->query("DELETE FROM notes WHERE id = :id",[
        "id" => $_POST['id']
    ]);
    
    header('location: /Laracast/LevelOne/PHPForBeginners/Notes/notes/');
    exit();
}else{

    $note = $db->query("select * from notes where id = :id",[
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] == $currentUserId,403,$router);

    view(BASE_PATH."notes/show.view.php",[
        'heading' => 'Note',
        'note' => $note
    ]);
}