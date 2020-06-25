<?php

use PHPUnit\Framework\TestCase;

class BatteryTest extends TestCase {

  private $battery;

  protected function setUp(): void {
    $this->battery = new Battery();
  }

  public function testSetChargingPercentage(){
    $this->battery->setChargingPercentage(100);
    $this->assertEquals(100, $this->battery->getChargingPercentage());
  }

  public function testGetChargingPercentage(){
    $this->assertEquals(0, $this->battery->getChargingPercentage());
  }

  public function testCharge() {
    $this->battery->charge();
    $this->assertEquals(100, $this->battery->getChargingPercentage());
  }
}
