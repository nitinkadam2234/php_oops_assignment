<?php

require_once('Apartment.php');

class Floor implements Apartment {
  
  public $cleanedArea;
  public $totalArea;
  public const CARPET_FLOOR_CLEAN_TIME = 2;
  public const HARD_FLOOR_CLEAN_TIME = 1;

  public function __construct($totalArea){
    $this->totalArea = $totalArea;
    $this->cleanedArea = 0;
  }

  public function clean(){
    $this->cleanedArea += 1;
    return $this->cleanedArea;
  }
}
