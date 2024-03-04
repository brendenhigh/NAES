<?php
  $host = "localhost";
  $user = "admin";
  $pass = "password";
  $db = "eventsdb";

  if (mysqli_connect_errno){
    echo "Failed to connect to the database: " . mysqli_connect_error();
    exit();
  }
  $connection = mysqli_connect($host, $user, $pass, $db);
?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
    <form>
      
    </form>

  <?php $connection->close(); ?>
</body>
</html>
