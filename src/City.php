<?php
use Events\AlienLanded;
use Events\RoadBuilt;
use Events\TravelStarted;

class City
{
    private $name;
    private $alien;
    private $outgoingRoads;
    
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
        return $events;
    }     

    public function connectTo($anotherCityName)
    {
        $events = [
            new RoadBuilt($this->name, $anotherCityName),
        ];
        $this->applyEvents($events);
        return $events;
    }

    public function alienWanders()
    {
        // TODO: for consistency, call applyEvents()
        $chosenCityName = $this->outgoingRoads[0];
        return [
            new TravelStarted(
                $this->alien->name(),
                $this->name,
                $chosenCityName
            ),
        ];
    }

    private function applyEvents(array $events)
    {
        foreach ($events as $event) {
            if ($event instanceof AlienLanded) {
                $this->alien = new Alien($event->alienName());
            }
            if ($event instanceof RoadBuilt) {
                $this->outgoingRoads[] = $event->targetCityName();
            }
        } 
    }
}
