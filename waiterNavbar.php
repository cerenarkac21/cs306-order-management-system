<html>
  <head>
      <link rel="stylesheet" href="style.css">
      <style>

      /* css here */
      /* The navigation bar */
      .waiterNavbar {
      overflow: hidden;
      background-color: #333;
      position: fixed; /* Set the navbar to fixed position */
      top: 0; /* Position the navbar at the top of the page */
      width: 100%; /* Full width */
      
      }

      /* Links inside the navbar */
      .waiterNavbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-weight: bold;
      }

      /* Change background on mouse-over */
      .waiterNavbar a:hover {
      background: #ddd;
      color: black;
      }

      </style>
  </head>
    
  <body>
    <div class="waiterNavbar">
        <a href="waiterHome.php">TABLES</a>
        <a href="select_table_check.php">CHANGE ORDER</a>
        <a href="list_food_waiter.php">LIST FOODS</a>
        <a href="select_dish_waiter.php">FILTER BY CATEGORY</a>
        <a href="prep_time_filter_waiter.php">FILTER BY PREPARATION TIME</a>
        <a href="client_chat.php">SUPPORT PAGE</a>
    </div>
    </body>
</html>