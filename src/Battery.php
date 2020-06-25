<?php

// Battery is-a Chargable

class Battery implements Chargable {

  private $chargingPercentage;
  private const FULL_CHARGE_TIME = 30;
  public const TIME_TO_DISCHARGE = 60;
  public const FULL_CHARGE_PERCENTAGE = 100;

  public function __construct() {
    $this->chargingPercentage = 0;
  }

  public function setChargingPercentage($chargingPercentage){
    $this->chargingPercentage = $chargingPercentage;
  }

  public function getChargingPercentage(){
    return $this->chargingPercentage;
  }

  public function charge() {
    $timer = 0;
    while ($timer < Battery::FULL_CHARGE_TIME) {

      $addCharging = $this->chargingPercentage + (Battery::FULL_CHARGE_PERCENTAGE/Battery::FULL_CHARGE_TIME);

      $this->setChargingPercentage($addCharging);

      $timer += 1;

      echo "[Battery Charging] ". round($this->chargingPercentage, 2) . "%" . PHP_EOL ;
    }

    return $this->chargingPercentage;
  }
}
