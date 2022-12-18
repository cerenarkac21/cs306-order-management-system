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
        </style>
    </head>
    
      <body>


      <?php include "navbar.php";?>


        <div class="main">

          
        <h3>Please enter the details of the new food</h3>
           <form action="insertfood.php" method="POST"> 
            <b>Food Name</b>: 
            <input type="text" id="fname" name="fname">
            <b>Food Category</b>: 
            <input type="text" id="fcategory" name="fcategory">
            <b>Preparation time</b>: 
            <input type="text" id="fprep" name="fprep">
            <input type="submit" value="Submit"> 
        </form> 
        



          </div>

        
        

         
    
    
         
    
      </body>
    

</html>
