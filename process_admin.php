<?php
session_start();

$conn = new mysqli("localhost", "root", "", "judges_final_project");

$user = $_POST['username'];
$pass = $_POST['password'];

$result = $conn->query("SELECT * FROM admins WHERE username = '$user' AND password = '$pass'");
if ($result->num_rows > 0) {
  $_SESSION['admin'] = $user;
  header("Location: admin.php");
} else {
  echo "Login failed. <a href='login_admin.php'>Try again</a>";
}
?>
