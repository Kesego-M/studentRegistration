<?php

global $is_invalid;
$is_invalid = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $mysqli = require __DIR__ . '/dbh.inc.php';

  $sql = sprintf("SELECT * FROM students WHERE studentNum = %s", $_POST["studentNum"]);

  $result = $mysqli->query($sql);

  $student = $result->fetch_assoc();

  if ($student) {

    if (password_verify($_POST['password'], $student['password'])) {
      header("Location: ../dashboard.php");
      // die('Login success');
    };

  }

  $is_invalid = true;

}