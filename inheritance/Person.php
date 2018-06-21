<?php

namespace inheritance;

class Person
{
    protected $age;
    protected $name;

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}