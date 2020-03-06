<?php

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


class Post {
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}


$collection = new Collection();
$collection[] = new Post(1);
$collection[] = new Post(2);
$collection[] = new Post(3);
$collection[] = new Post(4);
$collection[] = 'abc';

foreach ($collection as $item) {
    echo "{$item->getId()}\n";
}

class String {}

class Integer {}

class Double {}


