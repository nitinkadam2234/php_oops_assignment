<?php

require_once('Workable.php');
require_once('Battery.php');
require_once('Floor.php');

// Robot has-a battery
// Robot can work

class Robot implements Workable {

  public $floor;
  public $totalArea;
  public $cleaningAreaTime;

  public function __construct($floor, $totalArea) {
    $this->floor = $floor ? strtolower($floor) : '';
    $this->totalArea = $totalArea;
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
    } else {
      echo 'Please pass valid floor(hard/carpet).' . PHP_EOL;
    }
  }

  public function work($floorObj) {
    $perAreaDischargePercentage = $this->cleaningAreaTime * (Battery::FULL_CHARGE_PERCENTAGE / Battery::TIME_TO_DISCHARGE);

    while ($floorObj->cleanedArea < $floorObj->totalArea) {
      if($this->battery->chargingPercentage > 0) {
        $this->battery->chargingPercentage = $this->battery->chargingPercentage - $perAreaDischargePercentage;
  
        $this->cleanedArea = $floorObj->clean();
  
        echo "[Cleaning {$this->floor} floor] Cleaned Area: {$this->cleanedArea} mt sq, Charging Percentage:". round(abs($this->battery->chargingPercentage), 2) ."%" . PHP_EOL;
      } else {
        $this->battery->charge();
      }
    }

    return $this->cleanedArea;
  }
}
