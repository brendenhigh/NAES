<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $user = "naesdb";
    $pass = "Naes";
    $db = "naesdb";

    $connection = mysqli_connect($host, $user, $pass, $db);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $stmt = $connection->prepare("INSERT INTO usersdb (first_name, last_name, email, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $username, $password);

    $first_name = $_POST['First_Name'];
    $last_name  = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    $stmt->execute();

    echo "New user created successfully";

    $stmt->close();
    $connection->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
    <h2>Signup</h2>
    <p>To signup use this form to fill out your full name, email address, username, and password.</p>
    <form method="post">
        <label>First Name:</label>
        <input type="text" name="First_Name"><br>
        <label>Last Name:</label>
        <input type="text" name="Last_Name"><br>
        <label>Email Address:</label>
        <input type="text" name="Email"><br>
        <label>Username:</label>
        <input type="text" name="Username"><br>
        <label>Password:</label>
        <input type="password" name="Password"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
