<head>
    <link rel="stylesheet" href="style.css">
    </head>


<?php 

include "config.php";
include "cashierNavbar.php";
?>



<h3>
	Select an online check:
</h3>

<form action="change_online_check_panel.php" method="POST">
<select name="ids">




<?php

$sql_command = "SELECT o.userID, o.username, r.check_id
FROM online_customer o
JOIN receives_online r ON o.userID = r.userID;";

$myresult = mysqli_query($db, $sql_command);


while($id_rows = mysqli_fetch_assoc($myresult))
{
	$userID = $id_rows['userID'];
	$username = $id_rows['username'];
	$check_id = $id_rows['check_id'];
	
	echo "<option value=$check_id>". "#" . $userID. " " . $username ." | ".$check_id . "</option>";
  
  
}

?>
</select>

<button>SELECT</button>
</form>
