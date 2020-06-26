<?php

namespace RobotApplication\app\Apartment;

use RobotApplication\app\Apartment\Apartment as Apartment;

class Floor implements Apartment {

  private $cleanedArea;
  private $totalArea;
  public const CARPET_FLOOR_CLEAN_TIME = 2;
  public const HARD_FLOOR_CLEAN_TIME = 1;

  public function __construct($totalArea){
    $this->totalArea = $totalArea;
    $this->cleanedArea = 0;
  }

  public function setCleanedArea($cleanedArea){
    $this->cleanedArea = $cleanedArea;
  }

  public function getCleanedArea(){
    return $this->cleanedArea;
  }

  public function setTotalArea($totalArea){
    $this->totalArea = $totalArea;
  }

  public function getTotalArea(){
    return $this->totalArea;
  }

  public function clean(){
    $this->cleanedArea += 1;
    return $this->cleanedArea;
  }
}
