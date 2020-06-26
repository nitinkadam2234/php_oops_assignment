<?php

require 'vendor/autoload.php';

use RobotApplication\app\Validator as Validator;
use RobotApplication\app\Robot\Robot as Robot;

try {
  $longopts  = array('action::', 'floor::', 'area::');
  $args = getopt(null, $longopts);

  Validator::validateInputs($args);

  $robot = new Robot($args['floor'], $args['area']);
  $robot->start();
} catch(Exception $e) {
  echo 'Error: '. $e->getMessage() . PHP_EOL;
}
