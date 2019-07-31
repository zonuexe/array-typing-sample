<?php declare(strict_types=1);

namespace zonuexe;

use DateTimeImmutable;

class A
{
    /** @var ?DateTimeImmutable */
    public $dt1;
    //public ?DateTimeImmutable $dt2;
}

$a = new A();
if ($a->dt1 !== null) {
    var_dump($a->dt1->getTimestamp());
}
