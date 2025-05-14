<?php
session_start();

if (!isset($_SESSION['judge'])) {
  header("Location: login_judge.php");
  exit;
}

$conn = new mysqli("localhost", "root", "", "judges_final_project");

$g = $_POST['group'];
$m = $_POST['members'];
$t = $_POST['title'];
$a = $_POST['articulate'];
$to = $_POST['tools'];
$p = $_POST['presentation'];
$tw = $_POST['teamwork'];
$j = $_POST['judge_name'];
$c = $_POST['comments'];

// Calculate total
$total = $a + $to + $p + $tw;

// Insert judge's score
$conn->query("INSERT INTO scores (group_num, members, title, articulate, tools, presentation, teamwork, total, judge_name, comments)
VALUES ('$g', '$m', '$t', $a, $to, $p, $tw, $total, '$j', '$c')");

// Get average from all judges for that group
$avg_query = $conn->query("SELECT AVG(total) AS avg_score FROM scores WHERE group_num = '$g'");
$avg_row = $avg_query->fetch_assoc();
$avg = round($avg_row['avg_score'], 2);

// Update average table
$conn->query("REPLACE INTO group_avg (group_num, title, avg_score) VALUES ('$g', '$t', $avg)");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Submission Result</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; margin-top: 60px;">

  <h2 style="color: green;">Grade Submitted!</h2>
  <p style="font-size: 18px;">Your Total Score: <strong><?php echo $total; ?></strong></p>
  <p style="font-size: 18px;">Updated Group Average: <strong><?php echo $avg; ?></strong></p>

  <br><br>
  <a href="grade.php" style="text-decoration: none; padding: 10px 20px; background-color: #007BFF; color: white; border-radius: 4px;">Grade Another</a>
  &nbsp;&nbsp;
  <a href="logout.php" style="text-decoration: none; padding: 10px 20px; background-color: #DC3545; color: white; border-radius: 4px;">Logout</a>

</body>
</html>
