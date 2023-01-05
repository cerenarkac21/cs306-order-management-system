<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style_login.css">
    <style>
    body {
      background: #ff9d08;
      font-family: 'Rubik', sans-serif;
    }</style>
</head>
<body>
    
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
            $noadmin = 1;
        #echo "Please enter a valid password!";
        }
    
    }
    ?>
    
    <div class="login-form">
    <h1>Courier Login</h1>
    <div class="content2">
        <h4>
    <?php
    if ($noadmin == 1) {
        echo "<br>\n";
        echo "\t\t". "Please enter a valid password!";
    }?></h4></div>
    <form method="post">
    <div class="content">
      <div class="input-field">
        <input type='pssword' name='pssword' placeholder="Password" value="<?= htmlspecialchars($pssword ?? "") ?>">
</div>
<div class="action">
        <button>Log in</button>
</div>
    </form>
    
</div>
</div>

    
</body>
</html>