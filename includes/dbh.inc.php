<?php

$host = "reg-system.cdhckq0angqq.eu-north-1.rds.amazonaws.com";
$dBName = 'nwu-students';
$dBUsername = "admin";
$dBPassword = 'DAP2dPXEntuEDHYqtt3s';

$mysqli = new mysqli($host, $dBUsername, $dBPassword, $dBName);

if ($mysqli -> connect_errno) {
  die("Connection error: " . $mysqli->connect_error);
};

return $mysqli;
