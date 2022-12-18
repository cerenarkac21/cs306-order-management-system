<!DOCTYPE html>
<html>
<head>
	<title>Add Order to Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h4>Please select orders for the table <?php echo $table_id = $_GET['table'];?></h4>
<hr>
<form method="post" action="add_order.php">
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th>Food</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
	</thead>
	<tbody>

    <?php
        
        $con = mysqli_connect("localhost","root","","foods_database");

        
        $brand_query = "SELECT * FROM foods";
        $query_run = mysqli_query($con, $brand_query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $brand)
            {
                ?>
                <tr>
                    <td><input type="checkbox" name="prodid[]" value="<?= $brand['fname']; ?>"></td>
                <td><?= $brand['fname']; ?>
                    <input type="hidden" name="prodname[]" value="<?= $brand['fname']; ?>">
                </td>
                <td><?= $brand['fprice']; ?>
                    <input type="hidden" name="prod_price[]" value="<?= $brand['fprice']; ?>">
                </td>

                <td><input type="number" value=1 name="prod_qty[]" class="form-control"></td>
                <input type="hidden" name="table_id[]" value="<?= $table_id; ?>">
        
                
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
	<input type="submit" name="submit" class="btn btn-success" value="Submit">
	</div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>