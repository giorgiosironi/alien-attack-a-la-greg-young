<?php
use Events\AlienLanded;
require_once __DIR__ . '/../src/AliensPositionProjection.php';
require_once __DIR__ . '/../src/Events/AlienLanded.php';

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
