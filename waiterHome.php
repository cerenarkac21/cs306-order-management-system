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
        <?php include "waiterNavbar.php";?>
        <?php include "tables.php";?>


        <div class="waiter">

          
            <h3>Number of active checks: </h3>
        
           
        

        </div>

      </body>
    
</html>
