<?php
use Events\CityBuilt;

class CityRepository
{
    private $list = [];
    
    public function addCity(City $city)
    {
        $this->list[] = $city;
        return [new CityBuilt($city->name())];
    }

    public function findAFreeCity()
    {
        return $this->list[0]; 
    }    
}
