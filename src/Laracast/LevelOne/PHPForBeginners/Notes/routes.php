<?php

// return [
//     '/Laracast/LevelOne/PHPForBeginners/Notes/' => 'controllers/index.php',
//     '/Laracast/LevelOne/PHPForBeginners/Notes/about/' => 'controllers/about.php',
//     '/Laracast/LevelOne/PHPForBeginners/Notes/notes/' => 'controllers/notes/index.php',
//     '/Laracast/LevelOne/PHPForBeginners/Notes/notes/create/' => 'controllers/notes/create.php',
//     '/Laracast/LevelOne/PHPForBeginners/Notes/note/' => 'controllers/notes/show.php',
//     '/Laracast/LevelOne/PHPForBeginners/Notes/contact/' => 'controllers/contact.php'
// ];

$router->get('/Laracast/LevelOne/PHPForBeginners/Notes/', 'controllers/index.php');
$router->get('/Laracast/LevelOne/PHPForBeginners/Notes/about/', 'controllers/about.php');
$router->get('/Laracast/LevelOne/PHPForBeginners/Notes/contact/', 'controllers/contact.php');

$router->get('/Laracast/LevelOne/PHPForBeginners/Notes/notes/', 'controllers/notes/index.php');
$router->get('/Laracast/LevelOne/PHPForBeginners/Notes/note/', 'controllers/notes/show.php');

$router->get('/Laracast/LevelOne/PHPForBeginners/Notes/notes/create/', 'controllers/notes/create.php');

$router->delete('/','controllers/notes/destroy.php');
