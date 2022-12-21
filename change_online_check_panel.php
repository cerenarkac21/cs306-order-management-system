
<!DOCTYPE html>
<html>
<a href="javascript:location.reload()">Refresh</a>
<head>
	<title>Add Order to Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">



	<h4>Content of the Check: <?php echo $check_id = $_POST['ids']; ?></h4>
<hr>
<form method="post" action="change_online_check.php">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Food</th>
			<th>Price</th>
			<th>Current Quantity</th>
            <th>Total Price</th>
            <th></th>
            <th>Change Quantity</th>
            

		</tr>
	</thead>
	<tbody>

    <?php
        
        $con = mysqli_connect("localhost","root","","foods_database");

        if (isset($_POST['ids'])){
            $selection_id = $_POST['ids'];
          
          }


        $brand_query = "SELECT f.fid, f.fname, f.fprice, o.quantity, f.fprice * o.quantity AS total_price
        FROM orders o
        JOIN foods f ON o.food_id = f.fid
        WHERE o.check_id = $selection_id;";
        $query_run = mysqli_query($con, $brand_query);
        
    

        echo "Please check the boxes if you are doing any change!" . "<br>\n" . "REFRESH the page using 
        the button in the leftmost corner after ANY update!";



        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $brand)
            {
                ?>
                <tr>
                <td><?= $brand['fname']; ?>
                    <input type="hidden" name="prodname[]" value="<?= $brand['fname']; ?>">
                </td>

                <td><?= $brand['fprice']; ?>
                    <input type="hidden" name="prod_price[]" value="<?= $brand['fprice']; ?>">
                </td>

                <td><?= $brand['quantity']; ?>
                    <input type="hidden" name="prod_quantity[]" value="<?= $brand['quantity']; ?>">
                </td>


                <td><?= $brand['total_price']; ?>
                    <input type="hidden" name="prod_total_price[]" value="<?= $brand['total_price']; ?>">
                </td>



                <td><input type="checkbox" name="prodid[]" value="<?= $brand['fname']; ?>"></td>


                <td><input type="number" value=0 name="prod_updated_qty[]" class="form-control"></td>
                <input type="hidden" name="userID[]" value="<?= $userID; ?>">
                <input type="hidden" name="check_id[]" value="<?= $check_id; ?>">
                <input type="hidden" name="food_id[]" value="<?= $brand['fid']; ?>">
        
                
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
	<input type="submit" name="submit" class="btn btn-success" value="Change Quantity/Delete">
	</div>
</div>

<h1></h1>
<div class="text-center">
	<input type="submit" name="submit" class="btn btn-success" value="Add Food">
	</div>
</div>

</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>