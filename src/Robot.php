<?php

require_once('Apartment.php');
require_once('Battery.php');

class Robot implements Apartment, Battery {

	public $floor;
	private $totalArea;
	private $cleaningTime;
	public $chargingPercentage = 0;
	public $cleanedArea = 0;
	public const HARD_FLOOR_CLEAN_TIME = 2;
	public const CARPET_FLOOR_CLEAN_TIME = 1;
	public const FULL_CHARGE_PERCENTAGE = 100;

	public function __construct($floor, $totalArea) {
    $this->floor = $floor;
		$this->totalArea = $totalArea;
  }

	public function clean() {
		if($this->floor == 'hard') {
			$this->cleaningTime = ROBOT::HARD_FLOOR_CLEAN_TIME;
			$this->hardFloor();
		} elseif($this->floor == 'carpet') {
			$this->cleaningTime = ROBOT::CARPET_FLOOR_CLEAN_TIME;
			$this->carpetFloor();
		} else {
			echo 'Please pass valid floor(hard/carpet).' . PHP_EOL;
		}
	}

	public function hardFloor() {
		$this->cleaningProcess();
	}

	public function carpetFloor() {
		$this->cleaningProcess();
	}

	public function cleaningProcess() {
		while ($this->cleanedArea < $this->totalArea) {

			if($this->chargingPercentage == 0) {
        $this->charge();
			}

			$this->chargingPercentage = $this->chargingPercentage - $this->cleaningTime;
			$this->cleanedArea += 1;

			echo "[Cleaning {$this->floor} floor] Cleaned Area: {$this->cleanedArea} mt sq, Charging Percentage: {$this->chargingPercentage}%" . PHP_EOL;
		}

		return $this->cleanedArea;
	}

	public function charge() {
		echo "[Charging] Cleaned Area: {$this->cleanedArea} mt sq, Charging Percentage: {$this->chargingPercentage}%" . PHP_EOL ;
		$this->chargingPercentage = ROBOT::FULL_CHARGE_PERCENTAGE;
		echo "[Charged] Cleaned Area: {$this->cleanedArea} mt sq, Charging Percentage: {$this->chargingPercentage}%" . PHP_EOL ;
	}
}
