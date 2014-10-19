<?php
namespace Events;

class RoadBuilt
{
    private $firstCityName;
    private $secondCityName;
    
    public function __construct($firstCityName, $secondCityName)
    {
        // TODO: rename to source and target
        $this->firstCityName = $firstCityName;
        $this->secondCityName = $secondCityName;
    }

    public function targetCityName()
    {
        return $this->secondCityName;
    }
}
