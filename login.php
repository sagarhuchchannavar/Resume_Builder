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
$password = $_POST['password'];

 $sql = "SELECT * FROM register WHERE username = '$username' and password='$password'";
 $result = $conn->query($sql);
 $row=mysqli_fetch_array($result);
 if ($row) {

header("location:index.php");

 }else{
   die("Query error: " . $conn->error);
}

// if ($result->num_rows == 1) {
//     $row = $result->fetch_assoc();
//     $hashedPassword = $row["password"];
//     if (password_verify($password, $hashedPassword)) {
//         echo "valid";
//         header("Location: index.php");
//         exit();
//     } else {
//         $error = "Invalid password";
//     }
// } else {
//     $error = "Username not found";
// }

// $conn->close();
?>
