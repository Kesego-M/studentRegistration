<?php

$servername = "reg-system.cdhckq0angqq.eu-north-1.rds.amazonaws.com";
$dBName = 'students';
$dBUsername = "admin";
$dBPassword = 'DAP2dPXEntuEDHYqtt3s';

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
