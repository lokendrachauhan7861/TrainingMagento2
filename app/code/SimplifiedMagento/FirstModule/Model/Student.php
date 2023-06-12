<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Student 
{
    private $name;
    private $age;
    private $scores;

    public function __construct($name ="lokendra",$age = 30, array $scores = array('maths'=>92, 'programmimg'=>90))
    {
         $this->name = $name;
         $this->age = $age;
         $this->scores = $scores;
    }
  
}