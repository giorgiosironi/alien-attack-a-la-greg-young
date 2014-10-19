<?php
namespace Events;

class CityBuilt
{
    private $cityName;
    
    public function __construct($cityName)
    {
        $this->cityName = $cityName;
    }
}
