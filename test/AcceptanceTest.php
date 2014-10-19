<?php

class AcceptanceTest extends \PHPUnit_Framework_TestCase
{
    private $aliens = [];

    public function testAnAlienLandsInACity()
    {
        $this->givenAnAlien('1');
        $this->givenACity('A');

        $this->whenAlien('1')->lands();

        $this->thenAlien('1')->isAtCity('A');
    }    

    protected function setUp()
    {
        $this->world = new World();
    }

    private function givenAnAlien($alien)
    {
        $this->aliens[] = $alien;
    }

    private function givenACity($city)
    {
        $this->world->addCity($city);
    }

    private function whenAlien($alien)
    {
        $this->selectedAlien = $alien;
        return $this;
    }

    private function lands()
    {
        $this->world->alienLands($this->selectedAlien); 
    }

    private function thenAlien($alien)
    {
        $this->selectedAlien = $alien;
        return $this;
    }

    private function isAtCity($city)
    {
        $projection = $this->world->aliensPositionProjection();
        $this->assertEquals(
            $city,
            $projection->whereIs($this->selectedAlien)
        );
    }
}
