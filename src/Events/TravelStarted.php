<?php
namespace Events;

class TravelStarted
{
    private $alienName;
    private $sourceCityName;
    private $targetCityName;
    
    public function __construct($alienName, $sourceCityName, $targetCityName)
    {
        $this->alienName = $alienName;
        $this->sourceCityName = $sourceCityName;
        $this->targetCityName = $targetCityName;
    }
}
