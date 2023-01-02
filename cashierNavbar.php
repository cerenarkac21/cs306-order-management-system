<html>
  <head>
      <link rel="stylesheet" href="style.css">
      <style>

      /* css here */
      /* The navigation bar */
      .cashierNavbar {
      overflow: hidden;
      background-color: #333;
      position: fixed; /* Set the navbar to fixed position */
      top: 0; /* Position the navbar at the top of the page */
      width: 100%; /* Full width */
      
      }

      /* Links inside the navbar */
      .cashierNavbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-weight: bold;
      }

      /* Change background on mouse-over */
      .cashierNavbar a:hover {
      background: #ddd;
      color: black;
      }

      </style>
  </head>
    
  <body>
    <div class="cashierNavbar">
        <a href="get_payment.php">GET PAYMENT</a>
        <a href="add_online_customer.php">ADD ONLINE CUSTOMER</a>
        <a href="online_customers.php">ADD ONLINE ORDER</a>
        <a href="select_online_check.php">UPDATE ONLINE CHECK</a>

    </div>
    </body>
</html>