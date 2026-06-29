<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes  = [
    '/Laracast/LevelOne/PHPForBeginners/Notes/' => 'controllers/index.php',
    '/Laracast/LevelOne/PHPForBeginners/Notes/about/' => 'controllers/about.php',
    '/Laracast/LevelOne/PHPForBeginners/Notes/notes/' => 'controllers/notes.php',
    '/Laracast/LevelOne/PHPForBeginners/Notes/notes/create/' => 'controllers/note-create.php',
    '/Laracast/LevelOne/PHPForBeginners/Notes/note/' => 'controllers/note.php',
    '/Laracast/LevelOne/PHPForBeginners/Notes/contact/' => 'controllers/contact.php'
];

function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else {
        absort();
    }
}

function absort($error_code){
    http_response_code($error_code);
    require("views/$error_code.php");
    die();
}

routeToController($uri,$routes);