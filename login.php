<?php

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
?>
<?php include ('shared/head.php'); ?>
<link rel="stylesheet" href="/styles/forms.css">
<link rel="stylesheet" href="/styles/auth.css">
</head>
  <body>
  <?php include ('shared/header.php'); ?>
    <main>
      <h1>Student login</h1>
      
      <?php if($is_invalid): ?>
        <section class="alert">
          <h2>Invalid credentials</h2>
        </section>
      <?php endif; ?>

      <form method="POST">
        <input type="hidden" name="_csrf" value="<%= locals.csrfToken %>">
        <p>
          <label for="studentNum">Student Number</label>
          <input type="number" name="studentNum" id="studentNum" value="" required>  
        </p>
        <p>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" value="" required>  
        </p> 
        <button class="btn" name="login-submit">Login</button>
        <p ><a href="">Forgot password?</a></p>
      </form>
  </main>
  <?php include ('shared/footer.php'); ?>