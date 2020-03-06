<?php


namespace PCollection\Types;

use PCollection\Contracts\Comparable;

class PInteger extends Object implements Comparable
{
    public function __construct($value)
    {
        parent::__construct($value);
    }

    public static function valueOf($value)
    {
        return new static($value);
    }

    public static function compare(int $x, int $y): bool
    {
        return PInteger::valueOf($x)->compareTo(new PInteger($y));
    }

    public function compareTo(Object $o): bool
    {
        return $this->getValue() === $o->getValue();
    }
}

$pInteger = PInteger::valueOf(10)->compareTo(new PInteger(10));


