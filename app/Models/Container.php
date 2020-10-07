<?php

namespace App\Models;

class Container
{

    protected $bindings = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }   

    public function resolve($key)
    {
        if (isset($this->bidnings[$key])) {
            return call_user_func($this->bindings[$key]);
        }
    }
}