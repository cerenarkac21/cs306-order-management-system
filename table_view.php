<!DOCTYPE html>
<html>
<head>
<style>

<?php 

include "config.php";
$occupied = "#ee6b6e";
$not_occupied = "#72DC74";

?>


* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.tables{

    height: 43vh;
    width: 100%;   
     
}
.tables h1{
  background-color: #fff;
  height: 25%;
  width: 100%;
  text-align: center;
  padding-top: 20px;
  border-top: 2px solid;

}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}



/* ids (1-20) */
.table_ids {
  padding: 10px 0;
  background: white;
  margin: 0;
  margin-left: 50px;
  
}

.table_ids li {
  
  list-style-type: none;
  display: inline-block;
  width: 23.6%;
  padding-top: 15px;
  text-align: center;
  margin-bottom: 5px;
  font-size:15px;
  font-weight: bold;



  height: 60px;
  border: 2px solid;
}


.checkBut{
  border: none;
  color: red;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  transition-duration: 0.4s;
  cursor: pointer;

}


</style>
</head>
<body>

<div class="tables">

                  
                    <div>

                        <ul class="table_ids">
                        <li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 1');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 1</li>

						<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 2');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 2</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 3');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 3</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 4');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 4</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 5');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 5</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 6');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 6</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 7');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 7</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 8');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 8</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 9');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 9</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 10');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 10</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 11');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 11</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 12');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 12</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 13');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 13</li>


<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 14');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" > 14</li>

<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 15');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" >15</li>

<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 16');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" >16</li>
						

						<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 17');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" >17</li>

<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 18');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" >18</li>

<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 19');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" >19</li>

<li style="background-color: <?php 
						$result = $db->query('SELECT occupancy FROM table_entity WHERE table_id = 20');
						$row = $result->fetch_assoc();
						$value = $row['occupancy'];
						if ($value == 0){
							$color =  $not_occupied;
						}
						else {
							$color = $occupied;
						  }
					 	echo $color; ?>" >20</li>


                        </ul>

                    </div>

</div>
</body>

</html>
