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
        <a href="select_dish.php">CREATE CHECK</a>
        <a href="admin.php">DELETE FOOD</a>
        <a href="list_foods.php">LIST FOODSSSSS</a>
    </div>
    </body>
</html>