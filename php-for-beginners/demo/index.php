<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'https://example.com',
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'https://example.com',
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'https://example.com',
    ],
];

function filter(array $items, string $key, string $value): array {
    return array_filter($items, function ($item) use ($key, $value) {
        return $item[$key] === $value;
    });
}

require "index.view.php";