<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Style the submit button */
input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Add a background color to the submit button on mouse-over */
input[type=submit]:hover {
  background-color: #45a049;
}

.button {
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button3 {
  background-color: white;
  color: black;
  border: 2px solid #FF9D06;
}

.button3:hover {
  background-color: #FF9D06;
  color: white;
}

        </style>
    </head>
    
      <body>
        <button onclick=handleClick() class="button button3">Go to admin home</button>
        <script>
          function handleClick() {window.location.href = "adminHome.php";}
        </script>
        <div class="main">
        <h3>Please enter the details of the new cashier</h3>
           <form method="POST"> 
            <b>Name and Surname</b>: 
            <input type="text" id="cashier_name_surname" name="cashier_name_surname">
            <b>Telephone</b>: 
            <input type="text" id="cashier_tel_no" name="cashier_tel_no">
            <b>Password</b>: 
            <input type="text" id="pssword" name="pssword">
            <input type="submit" value="Submit"> 
        </form> 
        



          </div>

          <?php 

include "config.php"; 
if (!isset($_POST['cashier_name_surname'])){ 
    echo "Please fill the form.";
} 
else 
{
    $cashier_name_surname = $_POST['cashier_name_surname']; 
    $cashier_tel_no = $_POST['cashier_tel_no']; 
    $pssword = $_POST['pssword']; 

    $sql_statement = "INSERT INTO cashier (cashier_name_surname, cashier_tel_no, pssword) VALUES ('$cashier_name_surname','$cashier_tel_no','$pssword')"; 
    $result = mysqli_query($db, $sql_statement);
    echo "inserted into the table";
}

?>
    
      </body>
    

</html>
