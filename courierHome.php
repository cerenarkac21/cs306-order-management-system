<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 8px 120px;
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

.courier {
  width: 500px;
  height: 500px;
  /* Center horizontally*/
  margin: 0 auto;
  display: flex;
  justify-content: center;
}

</style>
</head>
<body>

<div class="app">
    <div class="courier">
    <button onclick=handleClick1() class="button button1">Admin</button>
    <script>
        function handleClick1() {window.location.href = "log-in_admin.php";}
    </script>

    <button onclick=handleClick2() class="button button2">Waiter</button>
    <script>
        function handleClick2() {window.location.href = "log-in_waiter.php";}
    </script>
      

    </div>
</div>



</body>
</html>



