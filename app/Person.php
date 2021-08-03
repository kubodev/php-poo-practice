<?php

namespace WebtrainingZone\Models;

class Person
{
    protected $name;
    protected $lastName;
    protected $dateOfBirth;

    public function __construct($name, $lastName, $dateOfBirth)
    {
        $this->name= $name;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function think()
    {
        // TODO: Implement think() method.
    }

    public function breath()
    {
        // TODO: Implement breath() method.
    }


    public function walk(){

    }
    public function login(){

    }

    public function __toString()
    {
        return $this->name . " " . $this->lastName;
    }

}