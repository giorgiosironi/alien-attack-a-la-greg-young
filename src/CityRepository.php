<?php
use Events\CityBuilt;

class CityRepository
{
    private $list = [];
    
    public function add(City $city)
    {
        $this->list[] = $city;
        return [new CityBuilt($city->name())];
    }

    public function findAFreeCity()
    {
        return $this->list[0]; 
    }    
}
