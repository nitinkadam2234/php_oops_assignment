<?php

use PHPUnit\Framework\TestCase;

class BatteryTest extends TestCase {

  private $battery;

  protected function setUp(): void {
    $this->battery = new Battery();
  }

  public function testCharge() {
    $this->battery->charge();
    $this->assertEquals(100, $this->battery->chargingPercentage);
  }
}
