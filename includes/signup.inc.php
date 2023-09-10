<?php 
if(isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $studentNum = $_POST['studentNum'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($studentNum) || empty($email) || empty($password)) {
    header("Location: ../signup.php?error=emptyfields&studentNum=".$studentNum."&email=".$email);
    exit();
  } else if (!filter_var()) {
    header("Location: ../signup.php?error=invalidmail&studentNum=".$studentNum);
    exit();
  };

}