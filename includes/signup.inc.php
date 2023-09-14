<?php

if (empty($_POST['studentNum'])) {
  die('Student Number is empty');
};

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die('Email address invalid');
};

if (strlen($_POST['password']) < 6) {
  die('Password must be at least 6 characters');
};

$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . '/dbh.inc.php';

$sql = "INSERT INTO students (studentNum, password, email) VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
  die('SQL Error: ' . $mysqli->error);
};

$stmt->bind_param("sss", 
$_POST['studentNum'], 
$hashedPassword,
$_POST['email']);

if ($stmt->execute()) {
  header("Location: ../login.php");
  exit;
};

