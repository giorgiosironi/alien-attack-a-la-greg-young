<?php
use Events\CityBuilt;

class CityRepository
{
    private $list = [];
    
    public function add(City $city)
    {
        $events = [new CityBuilt($city->name())];
        $this->applyEvents($events);
        return $events;
    }

    public function findAFreeCity()
    {
        return $this->list[0]; 
    } 

    private function applyEvents($events)
    {
        foreach ($events as $event) {
            if ($event instanceof CityBuilt) {
                $this->list[] = new City($event->cityName());
            }
        }
    }
}
