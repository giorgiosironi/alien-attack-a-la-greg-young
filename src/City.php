<?php
use Events\AlienLanded;

class City
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function alienLands(Alien $alien)
    {
        return [
            new AlienLanded($alien->name(), $this->name),
        ]; 
    }     
}
