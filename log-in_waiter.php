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
        $query = "SELECT * FROM waiter WHERE pssword='$pssword'";
        $result = mysqli_query($db, $query);
        // Check if a matching row was found
        if (mysqli_num_rows($result) > 0) {
        // A matching row was found
            header ("Location: waiterHome.php");
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