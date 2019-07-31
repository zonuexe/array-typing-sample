<?php

namespace zonuexe\ArrTyping;

class Book
{
    /** @var string */
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
