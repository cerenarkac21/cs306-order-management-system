<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Style the submit button */
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}
        </style>
    </head>
    
      <body>


      <?php include "cashierNavbar.php";?>


        <div class="main">

          
        <h3>Please enter the details of the new food</h3>
           <form action="insertReservation.php" method="POST"> 
            <b>Reserved Time</b>: 
            <input type="text" id="reserved_time" name="reserved_time">
            <b>Reservation Time</b>: 
            <input type="text" id="reservation_time" name="reservation_time">
            <b>Reserver Name</b>: 
            <input type="text" id="reserver_name" name="reserver_name">
            <b>Number of People</b>: 
            <input type="text" id="number_of_ppl" name="number_of_ppl">
            <b>Reservation Type</b>: 
            <input type="text" id="what_type_of" name="what_type_of">
            <b>Assigned Table</b>: 
            <input type="text" id="assigned_table" name="assigned_table">
            <input type="submit" value="Submit"> 
        </form> 
        
