<?php include ('shared/head.php'); ?>
<link rel="stylesheet" href="/styles/forms.css">
<link rel="stylesheet" href="/styles/auth.css">
</head>
  <body>
  <?php include ('shared/header.php'); ?>
    <main>
<h1>Create a new account</h1>
      <form action="includes/signup.inc.php" method="POST">
        <p>
          <label for="studentNum">Student Number</label>
          <input type="text" name="studentNum" id="studentNum" required>  
        </p>
        <p>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" minlength="6" required>  
        </p> 
        <p>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" required>  
        </p>
        <button class="btn" name="signup-submit">Sign up</button>
      </form>

<?php include ('shared/footer.php'); ?>