<?php

class World
{
    public function __construct()
    {
        $this->cityRepository = new CityRepository;
    }

    public function alienLands($alien)
    {
        $city = $this->cityRepository->findAFreeCity();
    }

    public function aliensPositionProjection()
    {
        return new AliensPositionProjection;
    }
}
