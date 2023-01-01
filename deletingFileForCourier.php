<?php 

include "config.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
echo $selection_id;
$sql_statement = "DELETE FROM courier WHERE courier_id = $selection_id";

$result = mysqli_query($db, $sql_statement);

header ("Location: delete_courier.php");

}

else
{

	echo "The form is not set.";

}

?>