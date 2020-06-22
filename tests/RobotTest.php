<?php

use PHPUnit\Framework\TestCase;

class RobotTest extends TestCase {

  private $robot;

  protected function setUp(): void {
    $arg = ['floor' => 'hard', 'area' => 50];
    $this->robot = new Robot($arg['floor'], $arg['area']);
  }

  public function testCharge() {
    $this->robot->charge();
    $this->assertEquals(100, $this->robot->chargingPercentage);
  }

  public function testClean() {
    $this->robot->clean();

    $this->assertEquals(50, $this->robot->cleanedArea);
  }
}
