<?php include ('includes/head.php'); ?>
<script src="/scripts/module-selector.js" defer></script>
</head>
  <body>
  <?php include ('includes/header.php'); ?>
    <main>
      <h1>Student Registration</h1>
      <h2>Modules</h2>
      <section>
        <label for="year">Select year</label>
        <select name="year" id="year">
          <option value="0">Year 1</option>
          <option value="1">Year 2</option>
          <option value="2">Year 3</option>
          <option value="3">Year 4</option>
        </select>
        <div class="modules">
          <% for (const module of modules) {%>
            <ul>
              <li>
                <input type="checkbox" name="module" id="module" value="<%= module._id%>"/>
                <label for="module"><%= module.moduleCode%></label>
              </li>
            </ul>        
          <% } %>
      </div>
      </section>  
    </main>
    <?php include ('includes/footer.php'); ?>