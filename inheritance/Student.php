<?php

namespace inheritance;

class Student extends Person
{
    protected $course;

    public function setCourse(int $course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
}