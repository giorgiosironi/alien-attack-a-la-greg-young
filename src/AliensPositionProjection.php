<?php
use Events\AlienLanded;

class AliensPositionProjection
{
    public function apply($event)
    {
        if ($event instanceof AlienLanded) {
            $this->positions[$event->alienName()] = $event->cityName();
        }    
    }

    public function whereIs($alienName)
    {
        return $this->positions[$alienName];
    }
}
