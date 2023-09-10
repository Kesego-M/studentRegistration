<?php include ('shared/head.php'); ?>
<title>Home</title>
</head>
  <body>
  <?php include ('shared/header.php'); ?>
    <main>
      <h1>North-West University Student Registration App</h1>
      <p>For students - by students</p>

      <% if (!locals.isAuth) { %>
        <p><a class="btn" href="/login">Start Here</a></p>
      <% } %>

      <% if (locals.isAuth) { %>
        <p><a class="btn" href="/student/dashboard">Go To Dashboard</a></p>
      <% } %>

      <p>
        <a class="btn" href="signup.php">Sign up</a>
      </p>

  </main>
  <?php include ('shared/footer.php'); ?>