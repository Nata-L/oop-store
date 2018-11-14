<?php

namespace OOPStore;

class Category 
{
    private $name;
    // protected
    // public $name;

    public function __construct($name)
    {
        $this->name = $name;
        // or
        // $this->setName($name);
    }

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
