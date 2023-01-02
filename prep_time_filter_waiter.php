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


<?php include "waiterNavbar.php";?>


<h4>Please indicate the minimum and maximum preparation time (in minutes) 
    to filter the food database.</h4>

<form action="list_foods_select_range_waiter.php" method="POST"> 
    <b>Minimum Time</b>: 
    <input type="text" id="mintime" name="mintime"> 
    <b>Maximum Time</b>: 
    <input type="text" id="maxtime" name="maxtime">
    <input type="submit" value="Submit"> 
</form> 
