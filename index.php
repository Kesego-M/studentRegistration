<?php include ('includes/head.php'); ?>
<title>Home</title>
</head>
  <body>
  <?php include ('includes/header.php'); ?>
    <main>
      <h1>North-West University Student Registration App</h1>
      <p>For students - by students</p>

      <% if (!locals.isAuth) { %>
        <p><a class="btn" href="/login">Start Here</a></p>
      <% } %>

      <% if (locals.isAuth) { %>
        <p><a class="btn" href="/student/dashboard">Go To Dashboard</a></p>
      <% } %>

  </main>
  <?php include ('includes/footer.php'); ?>