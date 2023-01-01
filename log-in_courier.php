<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    
    <h1>Login Here</h1>

    <?php

    include "config.php";

    if (isset($_POST['pssword'])){
        $pssword = $_POST['pssword'];
        $query = "SELECT * FROM courier WHERE pssword='$pssword'";
        $result = mysqli_query($db, $query);
        // Check if a matching row was found
        if (mysqli_num_rows($result) > 0) {
            // A matching row was found
            $query2 = "SELECT courier_id FROM courier WHERE pssword='$pssword'";
            $myresult = mysqli_query($db, $query2);


            while($id_rows = mysqli_fetch_assoc($myresult))
            {
                $courier_id = $id_rows['courier_id'];
                
            }

            header ("Location: deleteOnlineOrder_courier.php?id=$courier_id");
        } 
        else {
        // No matching row was found, so the input value does not exist in the corresponding table
        echo "Please enter a valid password";
        }

    }
    ?>
    
    <form method="post">
        <label for='pssword'>password</label>
        <input type='pssword' name='pssword' value="<?= htmlspecialchars($pssword ?? "") ?>">
        <button>Log in</button>
    </form>
    
</body>
</html>