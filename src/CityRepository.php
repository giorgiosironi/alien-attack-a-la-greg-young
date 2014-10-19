<?php

class CityRepository
{
    private $list;
    
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    public function findAFreeCity()
    {
        return new City($this->list[0]); 
    }    
}
