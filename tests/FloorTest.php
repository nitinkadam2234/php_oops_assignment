<?php

namespace RobotApplication\app\Apartment\Floor;
namespace RobotApplication\tests;

use PHPUnit\Framework\TestCase;
use RobotApplication\app\Apartment\Floor as Floor;

class FloorTest extends TestCase {

  private $floor;
  private $totalArea;

  protected function setUp(): void {
    $this->totalArea = 70;
    $this->floor = new Floor($this->totalArea);
  }

  public function testSetCleanedArea(){
    $this->floor->setCleanedArea(50);
    $this->assertEquals(50, $this->floor->getCleanedArea());
  }

  public function testGetCleanedArea(){
    $this->assertEquals(0, $this->floor->getCleanedArea());
  }

  public function testSetTotalArea(){
    $this->floor->setTotalArea(700);
    $this->assertEquals(700, $this->floor->getTotalArea());
  }

  public function testGetTotalArea(){
    $this->assertEquals(70, $this->floor->getTotalArea());
  }

  public function testCharge() {
    $this->floor->clean();
    $this->assertEquals(1, $this->floor->getCleanedArea());
  }
}
