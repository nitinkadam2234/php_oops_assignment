<?php

namespace RobotApplication\app;

class Validator {

  public function validateInputs($arg) {
    $argOptions = array('action', 'floor', 'area');
    $floorTypes = array('hard', 'carpet');

    if(!array_key_exists('action', $arg)) {
      throw new \Exception('Please provide action param.');
    }

    if(!array_key_exists('floor', $arg)) {
      throw new \Exception('Please provide floor param.');
    }

    if(!array_key_exists('area', $arg)) {
      throw new \Exception('Please provide area param.');
    }

    if (strtolower($arg['action']) != 'clean') {
      throw new \Exception('Please provide valid action(clean).');
    }

    if (!in_array($arg['floor'], $floorTypes)) {
      throw new \Exception('Please provide valid floor type(hard/carpet).');
    }

    if (!is_numeric($arg['area'])) {
      throw new \Exception("Please provide valid numberic area value.");
    }
  }
}
