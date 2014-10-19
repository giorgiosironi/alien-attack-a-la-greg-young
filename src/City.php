<?php
use Events\AlienLanded;
use Events\RoadBuilt;
use Events\TravelStarted;

class City
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function alienLands(Alien $alien)
    {
        $events = [
            new AlienLanded($alien->name(), $this->name),
        ]; 
        $this->applyEvents($events);
    }     

    public function connectTo($anotherCityName)
    {
        return [
            new RoadBuilt($this->name, $anotherCityName),
        ];
    }

    public function alienWanders()
    {
        return [
            new TravelStarted(
                $this->alien->name(),
                $this->name,
                ''
            ),
        ];
    }

    private function applyEvents(array $events)
    {
        foreach ($events as $event) {
            if ($event instanceof AlienLanded) {
                $this->alien = new Alien($event->alienName());
            }
        } 
    }
}
