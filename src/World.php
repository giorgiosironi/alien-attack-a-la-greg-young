<?php

class World
{
    public function __construct()
    {
        $this->cityRepository = new CityRepository(['A']);
    }

    public function alienLands($alien)
    {
        $city = $this->cityRepository->findAFreeCity();
        var_dump($city);
    }

    public function aliensPositionProjection()
    {
        return new AliensPositionProjection;
    }
}
