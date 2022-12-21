<?php 

include "config.php"; 

if (!empty($_POST['reserved_time'])){ 
    $reserved_time = $_POST['reserved_time']; 
    $reservation_time = $_POST['reservation_time']; 
    $reserver_name = $_POST['reserver_name'];
    $number_of_ppl = $_POST['number_of_ppl'];
    $what_type_of = $_POST['what_type_of'];
    $assigned_table = $_POST['assigned_table'];
    $sql_statement = "INSERT INTO reservation (reserved_time, reservation_time, reserver_name, number_of_ppl, what_type_of, assigned_table) VALUES ('$reserved_time','$reservation_time','$reserver_name','$number_of_ppl','$what_type_of','$assigned_table')"; 
    $result = mysqli_query($db, $sql_statement);
    header("Location: add_online_customer.php");
} 
else 
{
    echo "Please enter the online customer name.";
}

?>
