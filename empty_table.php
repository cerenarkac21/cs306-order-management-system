
<div align="check_ordered_these">

	<table>

    <tr> <th> ID </th> <th> NAME </th> <th>CATEGORY</th> <th>PREP TIME</th> <th>PRICE</th> </tr> 

<?php 

include "config.php";

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];
echo $selection_id;
$sql_statement1 = "SELECT f.* FROM foods f 
                INNER JOIN orders o ON f.fid = o.food_id 
                INNER JOIN receives r ON o.check_id = r.check_id 
                WHERE r.table_id = $selection_id;";
$result = mysqli_query($db, $sql_statement1);
while($row = mysqli_fetch_assoc($result))
{
    $fid = $row['fid'];
    $fname = $row['fname'];
    $fcategory = $row['fcategory'];
    $fprep = $row['fprep'];
    $fprice = $row['fprice'];

    echo "<tr>" . "<th>" . $fid . "</th>" . "<th>" . $fname . "</th>" . "<th>" . $fcategory . "</th>" . "<th>" . $fprep . "</th>" . "<th>" . $fprice . "</th>" . "</tr>" ;
}



$sql_statement2 = "UPDATE table_entity SET occupancy=0 WHERE table_id=$selection_id;
                  DELETE FROM orders
                  WHERE check_id IN (SELECT check_id FROM receives WHERE table_id = $selection_id);
                  DELETE FROM receives WHERE table_id=$selection_id;
                  ";

$result = mysqli_multi_query($db, $sql_statement2);
/*
find the check_id with the given table_id
find the rows with the given check_id from the orders table.
*/

}

else
{

	echo "The form is not set.";

}

?>

</table>
</div>