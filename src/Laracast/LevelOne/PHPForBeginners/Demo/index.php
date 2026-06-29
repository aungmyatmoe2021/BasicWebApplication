<?php

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
];

function filteredItems($items,$key,$value,$operator,$fn){
    $filterItems = [];
    foreach($items as $item){
        if($fn($item,$key,$value,$operator)){
            $filterItems[] = $item;
        }
    }
    return $filterItems;
}

$filteredBooks = function($items,$key,$value,$operator){
    return filteredItems($items,$key,$value,$operator,function($item,$key,$value,$operators){
        return match ($operators) {
            "==" => $item[$key] == $value,
            "!=" => $item[$key] != $value,
            ">" => $item[$key] > $value,
            "<" => $item[$key] < $value,
            ">=" => $item[$key] >= $value,
            "<=" => $item[$key] <= $value,
        };
    });
};

include 'index.view.php';