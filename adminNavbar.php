<html>
  <head>
      <link rel="stylesheet" href="style.css">
      <style>

      /* css here */
      /* The navigation bar */
      .adminNavbar {
      overflow: hidden;
      background-color: #333;
      position: fixed; /* Set the navbar to fixed position */
      top: 0; /* Position the navbar at the top of the page */
      width: 100%; /* Full width */
      
      }

      /* Links inside the navbar */
      .adminNavbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-weight: bold;
      }

      /* Change background on mouse-over */
      .adminNavbar a:hover {
      background: #ddd;
      color: black;
      }

      </style>
  </head>
    
  <body>
    <div class="adminNavbar">
        <a href="insertWorkers.php">INSERT WORKER</a>
        <a href="deleteWorkers.php">DELETE WORKER</a>
        <a href="food_insertion.php">CHANGE MENU</a>
        <a href="cashierHome.php">CASHIER PAGE</a>
        <a href="waiterHome.php">WAITER PAGE</a>
        <a href="deleteOnlineOrder_admin.php">COURIER PAGE</a>
        <a href="admin_chat.php">SUPPORT PAGE</a>
    </div>
    </body>
</html>