<?php

class User
{   
    private $name;
    private $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()//geter
    {
        return $this->name;
    }

    public function getAge()//geter
    {
        return $this->age;
    }

    public function setName($name)//seter
    {
        $this->name = $name;
    }

    public function setAge($age)//seter
    {
        $this->age = $age;
    }


    public function selfIntroduction()
    {   

        return "私の名前は" . $this->name . "です\n" 
                . "年齢は" . $this->age . "歳です\n";
    }
}

