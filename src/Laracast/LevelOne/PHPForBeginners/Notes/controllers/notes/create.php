<?php

use Core\Database;
use Core\Validator;

$config = require(base_path(BASE_PATH."../config.php"));
require(base_path(BASE_PATH."Validator.php"));
$db = new Database($config['database']);
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'A body of no more than 1,000 characters is required';
    }

    if(empty($errors)){
         $db->query("INSERT INTO notes(BODY,USER_ID) VALUES (:body, :user_id)",[
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view(BASE_PATH."notes/create.view.php",[
    'heading' => 'Create Note',
    'errors' => $errors
]);