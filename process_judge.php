<?php
session_start();

$conn = new mysqli("localhost", "root", "", "judges_final_project");

$user = $_POST['username'];
$pass = $_POST['password'];

$result = $conn->query("SELECT * FROM judges WHERE username = '$user' AND password = '$pass'");
if ($result->num_rows > 0) {
  $_SESSION['judge'] = $user;
  header("Location: grade.php");
} else {
  echo "Login failed. <a href='login_judge.php'>Try again</a>";
}
?>
