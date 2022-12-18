<?php 

include "config.php"; 

if (!empty($_POST['fname'])){ 
    $fname = $_POST['fname']; 
    $fcategory = $_POST['fcategory']; 
    $fprep = $_POST['fprep']; 
    $fprice = $_POST['fprice']; 

    $sql_statement = "INSERT INTO foods(fname, fcategory, fprep, fprice) VALUES ('$fname','$fcategory','$fprep', '$fprice')"; 
    $result = mysqli_query($db, $sql_statement);
    header("Location: food_insertion.php");
} 
else 
{
    echo "Please enter the food name.";
}

?>
