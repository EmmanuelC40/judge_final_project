<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login_admin.php");
  exit;
}

$conn = new mysqli("localhost", "root", "", "judges_final_project");
$result = $conn->query("SELECT * FROM group_avg");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding-top: 50px; text-align: center;">

  <table align="center" style="background: #ddd; padding: 20px; border: 1px solid #aaa;">
    <tr>
      <td>
        <h2>Group Averages</h2>
        <table border="1" cellpadding="10" style="margin: auto; background: white;">
          <tr><th>Group #</th><th>Title</th><th>Average Score</th></tr>
          <?php while ($row = $result->fetch_assoc()) {
            echo "<tr>
              <td>{$row['group_num']}</td>
              <td>{$row['title']}</td>
              <td>" . round($row['avg_score'], 2) . "</td>
            </tr>";
          } ?>
        </table>
        <br>
        <a href="logout.php" style="text-decoration: none; color: black;">Logout</a>
      </td>
    </tr>
  </table>

</body>
</html>
