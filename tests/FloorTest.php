<?php

use PHPUnit\Framework\TestCase;

class FloorTest extends TestCase {

  private $floor;
  private $totalArea;

  protected function setUp(): void {
    $this->totalArea = 70;
    $this->floor = new Floor($this->totalArea);
  }

  public function testCharge() {
    $this->floor->clean();
    $this->assertEquals(1, $this->floor->cleanedArea);
  }
}
