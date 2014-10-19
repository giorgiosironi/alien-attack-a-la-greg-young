<?php

class CityTest extends \PHPUnit_Framework_TestCase
{
    public function testACityCanBeConnectedToAnotherThroughARoad()
    {
        // TODO: Value Object CityName, representing identity?
        // using it in events?
        $city = new City('A');
        $events = $city->connectTo('B');
        $this->assertEquals(
            [
                new RoadBuilt('A', 'B'),
            ],
            $events
        );
    }

    public function testAnAlienCanWanderToAnotherCity()
    {
        $this->markTestIncomplete('We need to build roads first!');
    }    
}
