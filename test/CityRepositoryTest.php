<?php

class CityRepositoryTest extends \PHPUnit_Framework_TestCase
{
    public function testARepositoryCanChooseAFreeCity()
    {
        $repository = new CityRepository(['A']);
        $this->assertEquals(new City('A'), $repository->findAFreeCity());
    }    
}
