<?php

class AcceptanceTest extends \PHPUnit_Framework_TestCase
{
    public function testAnAlienLandsInACity()
    {
        $this->givenAnAlien('1');
        $this->givenACity('A');

        $this->whenAlien('1')->lands();

        $this->thenAlien('1')->isAtCity('A');
    }    
}
