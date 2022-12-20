<?php 

include "config.php"; 

if (!empty($_POST['username'])){ 
    $username = $_POST['username']; 
    $address = $_POST['address']; 
    $online_cust_tel_no = $_POST['online_cust_tel_no'];

    $sql_statement = "INSERT INTO foods(username, `address`, online_cust_tel_no) VALUES ('$username','$address','$online_cust_tel_no')"; 
    $result = mysqli_query($db, $sql_statement);
    header("Location: add_online_customer.php");
} 
else 
{
    echo "Please enter the online customer name.";
}

?>
