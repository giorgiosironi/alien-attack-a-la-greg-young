<?php
use Events\CityBuilt;

class CityRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testARepositoryCanAddACityToTheAvailableOnes()
    {
        $repository = new CityRepository();
        $events = $repository->addCity(new City('A'));
        $this->assertEquals(
            [
                new CityBuilt('A'),
            ],
            $events
        );
    }

    public function testARepositoryCanChooseAFreeCity()
    {
        // TODO: Extract Given step 
        $repository = new CityRepository();
        $events = $repository->addCity(new City('A'));
        $this->assertEquals(new City('A'), $repository->findAFreeCity());
    }

    public function testARepositoryCanChooseAFreeCity_LegacyConstructor()
    {
        $repository = new CityRepository(['A']);
        $this->assertEquals(new City('A'), $repository->findAFreeCity());
    }    
}
