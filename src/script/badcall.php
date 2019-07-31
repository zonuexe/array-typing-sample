<?php declare(strict_types=1);

namespace zonuexe\ArrTyping;

$books = Book\search2('ネコソギラジカル', Book\SearchOptions::fromArray([
    'begin' => '2002-11-01',
]));

$books = Book\search('ネコソギラジカル', [
    'begin' => '2002-11-01',
]);
