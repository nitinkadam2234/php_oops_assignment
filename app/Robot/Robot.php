<?php

// Robot has-a battery
// Robot can work

namespace RobotApplication\app\Robot;

use RobotApplication\app\Robot\Workable as Workable;
use RobotApplication\app\Battery\Battery as Battery;
use RobotApplication\app\Apartment\Floor as Floor;

class Robot implements Workable {

  private $floor;
  private $totalArea;
  private $cleanedArea;
  private $cleaningAreaTime;

  public function __construct($floor, $totalArea) {
    $this->floor = strtolower($floor);
    $this->totalArea = $totalArea;
    $this->cleanedArea = 0;
    $this->battery = new Battery();
  }

  public function start() {
    if($this->floor == 'hard') {
      $this->cleaningAreaTime = Floor::HARD_FLOOR_CLEAN_TIME;
      $floorObj = new Floor($this->totalArea);
      $this->work($floorObj);
    } elseif($this->floor == 'carpet') {
      $this->cleaningAreaTime = Floor::CARPET_FLOOR_CLEAN_TIME;
      $floorObj = new Floor($this->totalArea);
      $this->work($floorObj);
    }
  }

  public function work($floorObj) {
    $perAreaDischargePercentage = $this->cleaningAreaTime * (Battery::FULL_CHARGE_PERCENTAGE / Battery::TIME_TO_DISCHARGE);

    while ($floorObj->getCleanedArea() < $floorObj->getTotalArea()) {
      if($this->battery->getChargingPercentage() > 0) {

        $remainingCharging = $this->battery->getChargingPercentage() - $perAreaDischargePercentage;

        $this->battery->setChargingPercentage($remainingCharging);
  
        $this->cleanedArea = $floorObj->clean();
  
        echo "[Cleaning {$this->floor} floor] Cleaned Area: {$this->cleanedArea} mt sq, Charging Percentage:". round(abs($this->battery->getChargingPercentage()), 2) ."%" . PHP_EOL;
      } else {
        $this->battery->charge();
      }
    }

    return $this->cleanedArea;
  }
}
