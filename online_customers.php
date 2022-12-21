<head>
    <link rel="stylesheet" href="style.css">
    </head>


<?php 

include "config.php";
include "cashierNavbar.php";
?>



<h3>
	Select an online customer:
</h3>

<form action="create_online_customer.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT userID, username from online_customer";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$userID = $id_rows['userID'];
	$username = $id_rows['username'];
	
	echo "<option value=$userID>". "#" . $userID. " ".$username . "</option>";
  
  
}

?>
</select>

<button>SELECT</button>
</form>
