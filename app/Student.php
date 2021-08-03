<?php

namespace WebtrainingZone\Models;

class Student extends Person
{
    protected $universityID;

    public function __construct($name, $lastName, $dateOfBirth, $universityID)
    {
        parent::__construct($name, $lastName, $dateOfBirth);
        $this->universityID = $universityID;
    }

    public function enrollToCourse() {

    }

    public function __toString()
    {
        return parent::__toString() . " " . $this->universityID;
    }
}