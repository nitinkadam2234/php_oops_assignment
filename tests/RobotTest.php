<?php

use PHPUnit\Framework\TestCase;

class RobotTest extends TestCase {

  private $robot;

  public function testCleanHardFloor() {
    $arg = ['floor' => 'hard', 'area' => 70];

    $this->robot = new Robot($arg['floor'], $arg['area']);

    $floorObj = new Floor($this->robot->totalArea);

    $this->robot->work($floorObj);

    $this->assertEquals(70, $this->robot->cleanedArea);
  }

  public function testCleanCarpetFloor() {
    $arg = ['floor' => 'carpet', 'area' => 60];

    $this->robot = new Robot($arg['floor'], $arg['area']);

    $floorObj = new Floor($this->robot->totalArea);

    $this->robot->work($floorObj);

    $this->assertEquals(60, $this->robot->cleanedArea);
  }
}
