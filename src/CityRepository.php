<?php
use Events\CityBuilt;

class CityRepository
{
    private $list;
    
    public function __construct(array $list = [])
    {
        $this->list = array_map(
            function($cityName) {
                return new City($cityName);
            },
            $list
        );
    }

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
