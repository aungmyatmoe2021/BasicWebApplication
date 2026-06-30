<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN, $router = null){
    if(!$condition){
        $router::absort($status);
    }
}

function base_path($path){
    return __DIR__ .$path;
}

function view($path, $attritubes = []){
    extract($attritubes);
    require(base_path('/../views'.$path));
}

spl_autoload_register(function ($class){
    $class = str_replace('\\',DIRECTORY_SEPARATOR,$class);
    $class = str_replace('Core/Core','Core',base_path('/'.$class . '.php'));
    require($class);
});