<?php

namespace RobotApplication\app\Robot;
namespace RobotApplication\tests;

use PHPUnit\Framework\TestCase;
use RobotApplication\app\Robot\Robot as Robot;
use RobotApplication\app\Apartment\Floor as Floor;

class RobotTest extends TestCase {

  private $robot;

  public function testCleanHardFloor() {
    $arg = ['floor' => 'hard', 'area' => 70];
    $this->robot = new Robot($arg['floor'], $arg['area']);
    $floorObj = new Floor($arg['area']);

    $this->robot->work($floorObj);
    $this->assertEquals(70, $floorObj->getCleanedArea());
  }

  public function testCleanCarpetFloor() {
    $arg = ['floor' => 'carpet', 'area' => 60];
    $this->robot = new Robot($arg['floor'], $arg['area']);
    $floorObj = new Floor($arg['area']);

    $this->robot->work($floorObj);
    $this->assertEquals(60, $floorObj->getCleanedArea());
  }
}
