<?php
use Events\RoadBuilt;
use Events\TravelStarted;

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
        $this->givenTwoConnectedCities('A', 'B');
        $this->givenAnAlienInTheFirstCity('1');

        $events = $this->firstCity->alienWanders();

        $this->assertEquals(
            [
                new TravelStarted('1', 'A', 'B'),
            ],
            $events
        );
    }    

    private function givenTwoConnectedCities($firstCityName, $secondCityName)
    {
        $this->firstCity = new City($firstCityName);
        $this->firstCity->connectTo($secondCityName);
    }

    private function givenAnAlienInTheFirstCity($alienName)
    {
        $this->firstCity->alienLands(new Alien($alienName));
    }
}
