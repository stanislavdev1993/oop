<?php

namespace polymorphism;

class Student extends Person
{
    public function getInfo()
    {
        return 'Student:' . $this->name;
    }
}