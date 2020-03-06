<?php

namespace PCollection\Contracts;

use PCollection\Types\Object;

interface Comparable
{
    public function compareTo(Object $o);
}