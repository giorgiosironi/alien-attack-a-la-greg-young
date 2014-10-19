<?php
use Events\AlienLanded;

class AliensPositionProjectionTest extends \PHPUnit_Framework_TestCase
{
    public function testAlienLandedEventsDictateTheFirstKnownPositionOfAnAlien()
    {
        $projection = new AliensPositionProjection();

        $event = new AlienLanded('1', 'New York');
        $projection->apply($event);

        $this->assertEquals('New York', $projection->whereIs('1'));
    }
}
