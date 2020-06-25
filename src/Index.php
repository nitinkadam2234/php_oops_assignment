<?php

require 'vendor/autoload.php';

try {
  $longopts  = array('action::', 'floor::', 'area::');
  $args = getopt(null, $longopts);

  Validator::validateInputs($args);

  $robot = new Robot($args['floor'], $args['area']);
  $robot->start();
} catch(Exception $e) {
  echo 'Error: '. $e->getMessage() . PHP_EOL;
}
