<?php
namespace Events;

class AlienLanded
{
    private $alienName;
    private $cityName;
    
    public function __construct($alienName, $cityName)
    {
        $this->alienName = $alienName;
        $this->cityName = $cityName;
    }
}
