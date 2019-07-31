<?php declare(strict_types=1);

namespace zonuexe\ArrTyping\Book
{
    use zonuexe\ArrTyping\Book;

    /**
     * @param array{begin?:?\DateTimeInterface,end?:?\DateTimeInterface} $options
     */
    function search(string $word, array $options): array
    {
        $begin = null;
        if (isset($options['begin'])) {
            $begin = $options['begin']->getTimestamp();
            assert($begin !== false);
        }

        $end = null;
        if (isset($options['end'])) {
            $end = $options['end']->getTimestamp();
            assert($end !== false);
        }

        $query = compile_query('search_book', $word, $begin, $end);

        return request_search_engine($query);
    }

    function search2(string $word, Book\SearchOptions $options): array
    {
        $begin = null;
        if ($options->begin !== null) {
            $begin = $options->begin->getTimestamp();
            assert($begin !== false);
        }

        $end = null;
        if (isset($options->end)) {
            $end = $options->end->getTimestamp();
            assert($end !== false);
        }

        $query = compile_query('search_book', $word, $begin, $end);

        return request_search_engine($query);
    }

    function compile_query(string $type, string $word, ?int $begin, ?int $end): string
    {
        $compiled_query = sprintf('%d', count([$type, $word, $begin, $end]));

        return $compiled_query;
    }

    function request_search_engine(string $query): array
    {
        return [new Book(str_rot13($query))];
    }
}
