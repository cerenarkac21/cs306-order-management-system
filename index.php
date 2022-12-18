<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM foods"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $fid = $row['fid']; 
    $fname = $row['fname']; 
    $fcategory = $row['fcategory']; 
    $fprep = $row['fprep'];
    $fprice = $row['fprice'];
    echo $fid . " " . $fname . " " . $fcategory . " " . $fprep . " " . $fprice . "<br>"; 
} 

?>