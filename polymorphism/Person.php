<?php

namespace polymorphism;

class Person
{
    protected $name;

    public function getInfo()
    {
        return 'Person:' . $this->name;
    }
}