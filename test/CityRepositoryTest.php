<?php
require_once __DIR__ . '/../src/CityRepository.php';
require_once __DIR__ . '/../src/City.php';

class CityRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testARepositoryCanChooseAFreeCity()
    {
        $repository = new CityRepository(['A']);
        $this->assertEquals(new City('A'), $repository->findAFreeCity());
    }    
}
