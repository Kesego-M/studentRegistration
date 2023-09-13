<?php include('includes/head.php'); ?>
</head>

<body>
  <?php include('includes/header.php'); ?>
  <main>
    <h1>Payment</h1>
    <section class="alert-payment">
      <h4>Amount Due:</h4>
    </section>

    <form class="payment-form">
      <label for="card-number">Card Number:</label>
      <input type="text" id="card-number" placeholder="1234 5678 9012 3456">

      <label for="card-holder">Cardholder Name:</label>
      <input type="text" id="card-holder" placeholder="John Doe">

      <div class="half-width">
        <label for="expiry">Expiration Date:</label>
        <input type="text" id="expiry" placeholder="MM/YY">
      </div>

      <div class="half-width">
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" placeholder="123">
      </div>

      <button type="submit">Submit Payment</button>
    </form>
  </main>
  <?php include('includes/footer.php'); ?>