<?php

namespace zonuexe\ArrTyping\Book;

class SearchOptions
{
    /** @var ?\DateTimeInterface 検索期間の始点 */
    public $begin;
    /** @var ?\DateTimeInterface 検索期間の終点 */
    public $end;

    /**
     * @param array{begin?:?\DateTimeInterface,end?:?\DateTimeInterface} $array
     */
    public static function fromArray(array $array): self
    {
        $option = new self();
        $option->begin = $array['begin'] ?? null;
        $option->end = $array['end'] ?? null;

        return $option;
    }
}
