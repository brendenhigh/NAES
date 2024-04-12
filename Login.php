<?php

$host = "localhost";
$user = "naesdb";
$pass = "Naes";
$db = "naesdb";

$connection = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
	echo "Failed to connect to the database: " . mysqli_connect_error();
	exit();
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <form action="Login.php" method="post">
      <label>Username:</label>
      <input type="text" name="username"><br>
      <label>Password:</label>
      <input type="password" name="password"><br>
      <button type="submit">Login</button>
    </form>
  </body>
</html>
