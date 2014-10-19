<?php
use Events\CityBuilt;

class CityRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->repository = new CityRepository();
    }
    
    public function testARepositoryCanAddACityToTheAvailableOnes()
    {
        $events = $this->repository->add(new City('A'));
        $this->assertEquals(
            [
                new CityBuilt('A'),
            ],
            $events
        );
    }

    public function testARepositoryCanChooseAFreeCity()
    {
        $this->givenExistingCities('A');
        $this->assertEquals(new City('A'), $this->repository->findAFreeCity());
    }

    private function givenExistingCities($name)
    {
        $this->repository->add(new City('A'));
    }
}
