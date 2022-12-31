<!DOCTYPE html>
<html>
<a href="javascript:location.reload()">Refresh</a>
<a href="javascript:location.reload()"></a>
<head>
	<title>Update Waiter Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
  .center {
    display: block;
    margin: 0 auto;
    text-align: center;
  }

  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
</style>

</head>
<body>

<div class="navbar">
            <a href="waiter_insertion.php">INSERT WAITER</a>
            <a href="delete_waiter.php">DELETE WAITER</a>
            <a href="update_waiter.php">UPDATE PASSWORD</a>
            <a href="adminHome.php">GO BACK TO ADMIN PAGE</a>
          </div>
<div class="container">



	<h4>Update Waiter Password</h4>
<hr>
<form method="post" action="update_waiter_password.php">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Waiter ID</th>
			<th>Name & Surname</th>
			<th>Telephone</th>
            <th>Old Password</th>
            <th></th>
            <th>New Password</th>
            

		</tr>
	</thead>
	<tbody>

    <?php
        
        $con = mysqli_connect("localhost","root","","foods_database");

        if (isset($_POST['ids'])){
            $selection_id = $_POST['ids'];
          
          }


        $brand_query = "SELECT * from waiter;";
        $query_run = mysqli_query($con, $brand_query);
        
    

        echo "Please check the boxes if you are doing any change!" . "<br>\n" . "REFRESH the page using 
        the button below!";



        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $brand)
            {
                ?>
                <tr>
                <td><?= $brand['waiter_id']; ?>
                    <input type="hidden" name="waiter_id[]" value="<?= $brand['waiter_id']; ?>">
                </td>

                <td><?= $brand['waiter_name_surname']; ?>
                    <input type="hidden" name="waiter_name_surname[]" value="<?= $brand['waiter_name_surname']; ?>">
                </td>

                <td><?= $brand['waiter_tel_no']; ?>
                    <input type="hidden" name="waiter_tel_no[]" value="<?= $brand['waiter_tel_no']; ?>">
                </td>


                <td><?= $brand['pssword']; ?>
                    <input type="hidden" name="pssword[]" value="<?= $brand['pssword']; ?>">
                </td>



                <td><input type="checkbox" name="prodid[]" value="<?= $brand['pssword']; ?>"></td>


                <td><input type="number" value=0000 name="updated_password[]" class="form-control"></td>
               


        
                
                </tr>
                
                <?php
                
            }
        }
        else
        {
            echo "No Record Found";
        }
    ?>

            

	</tbody>
</table>
<div class="text-center">
	<input type="submit" name="submit" class="btn btn-success" value="Update Password">
	</div>
</div>

<h2></h2>
<div class="center">
<a href="javascript:location.reload()">Refresh</a>
</div>



</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>