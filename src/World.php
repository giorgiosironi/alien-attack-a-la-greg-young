<?php

class World
{
    public function __construct()
    {
        $this->cityRepository = new CityRepository();
        $this->projections = [
            new AliensPositionProjection,
        ];
    }

    public function addCity($city)
    {
        $this->cityRepository->addCity(new City($city));
    }

    public function alienLands($alien)
    {
        $city = $this->cityRepository->findAFreeCity();
        $events = $city->alienLands(new Alien($alien));
        $this->applyToProjections($events);
    }

    public function aliensPositionProjection()
    {
        return $this->projections[0];
    }

    private function applyToProjections(array $events)
    {
        foreach ($events as $event) {
            foreach ($this->projections as $projection) {
                $projection->apply($event);
            }
        } 
    }
}
