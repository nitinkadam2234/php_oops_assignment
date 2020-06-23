<?php

require_once('Robot.php');

$args = getopt(null, ['floor:', 'area:']);
$robot = new Robot($args['floor'], $args['area']);
$robot->start();
