<?php

namespace app\Classes;


abstract class BloodDonor
{

    protected $name;
    protected $bloodGroup;
    protected $age;

    public function __construct($name, $age, $bloodGroup)
    {
        $this->name = $name;
        $this->age = $age;
        $this->bloodGroup = $bloodGroup;
    }

    abstract public function donateBlood();


    public function displayDonorInfo()
    {

        echo "Name  :" . $this->name . "\n";
        echo "Age :" . $this->age . "\n";
        echo "Blood Group :" . $this->bloodGroup . "\n";

    }

    public function getName()
    {
        return $this->name;
    }

    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }



}