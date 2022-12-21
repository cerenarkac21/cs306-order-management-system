<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 8px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
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

.users {
  width: 200px;
  height: 200px;
  /* Center horizontally*/
  margin: 0;
  display: flex;
}

</style>
</head>
<body>

<div class="app">
    <h4>Delete workers</h4>
    <div class="users">
        <button onclick=handleClick1() class="button button1">Delete waiter</button>
        <script>
          function handleClick1() {window.location.href = "delete_waiter.php";}
        </script>

        <button onclick=handleClick2() class="button button2">Delete courier</button>
        <script>
          function handleClick2() {window.location.href = "delete_courier.php";}
        </script>

        <button onclick=handleClick3() class="button button3">Delete cashier</button>
        <script>
          function handleClick3() {window.location.href = "delete_cashier.php";}
        </script>

    </div>
</div>



</body>
</html>
