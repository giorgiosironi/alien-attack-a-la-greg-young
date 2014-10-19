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

    public function alienName()
    {
        return $this->alienName;
    }

    public function cityName()
    {
        return $this->cityName;
    }
}
