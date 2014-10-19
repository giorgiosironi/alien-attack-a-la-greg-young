<?php
namespace Events;

class RoadBuilt
{
    private $firstCityName;
    private $secondCityName;
    
    public function __construct($firstCityName, $secondCityName)
    {
        $this->firstCityName = $firstCityName;
        $this->secondCityName = $secondCityName;
    }
}
