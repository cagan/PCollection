<?php

use PCollection\Types\Object;

class Collection implements Iterator, ArrayAccess
{

    private $position;
    private $array = [];

    public function __construct()
    {
        $this->position = 0;
    }

    public function next()
    {
        ++$this->position;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function offsetExists($offset)
    {
        return isset($this->array[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->array[$offset]) ? $this->array[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->array[] = $value;
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }
}


class Generics {
    private $object;
    private $type;

    public function __construct(Object $object, $type)
    {
        if ($object instanceof Object) {
            $this->object = $object;
        }

        $this->type = $type;
    }
}

interface ListInterface {
    public function add(Object $e);
}

class ArrayList implements ListInterface {

}