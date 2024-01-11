<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gttc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$sql = "INSERT INTO register (username,firstname, lastname, email, phone, password, gender)
        VALUES ('$username', '$firstname', '$lastname', '$email', '$phone', '$password', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful! <br>";
    echo '<br><br><br><a href="login.html" style="background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 3px; text-decoration: none;">Go to Login Page</a>';
  } 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
