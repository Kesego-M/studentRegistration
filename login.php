<?php include ('shared/head.php'); ?>
<link rel="stylesheet" href="/styles/forms.css">
<link rel="stylesheet" href="/styles/auth.css">
</head>
  <body>
  <?php include ('shared/header.php'); ?>
    <main>
      <h1>Student login</h1>
      <% if (inputData.errorMessage) {%>
        <section class="alert">
          <h2>Invalid credentials</h2>
          <p><%= inputData.errorMessage %></p>    
        </section>
      <% } %>
      <form action="/login" method="POST">
        <input type="hidden" name="_csrf" value="<%= locals.csrfToken %>">
        <p>
          <label for="studentNum">Student Number</label>
          <input type="number" name="studentNum" id="studentNum" value="<%= inputData.studentNum %>" required>  
        </p>
        <p>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" value="<%= inputData.password %>" required>  
        </p> 
        <button class="btn">Login</button>
        <p ><a href="">Forgot password?</a></p>
      </form>
  </main>
  <?php include ('shared/footer.php'); ?>