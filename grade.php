<?php
session_start();

if (!isset($_SESSION['judge'])) {
  header("Location: login_judge.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Grade Submission</title>
</head>
<body style="background-color: #f4f4f4; padding: 20px;">

<form method="POST" action="submit.php" style="background: #ddd; padding: 20px; max-width: 700px; margin: auto; border: 1px solid #aaa;">
  <h2 style="text-align:center;">Computer Science Project</h2>

  <label><b>Group Members:</b></label><br>
  <input type="text" name="members" required style="width: 98%; padding: 5px; margin-bottom: 10px;"><br>

  <label><b>Project Title:</b></label><br>
  <input type="text" name="title" required style="width: 98%; padding: 5px; margin-bottom: 10px;"><br>

  <label><b>Group Number:</b></label><br>
  <input type="text" name="group" required style="width: 98%; padding: 5px; margin-bottom: 20px;"><br>

  <table style="width:100%; border-collapse: collapse; background: #ddd; border: 1px solid #aaa;">
    <tr>
      <th style="padding: 8px; border: 1px solid #aaa; background: #ccc;">Criteria</th>
      <th style="padding: 8px; border: 1px solid #aaa; background: #ccc;">Developing (0–10)</th>
      <th style="padding: 8px; border: 1px solid #aaa; background: #ccc;">Accomplished (10–15)</th>
    </tr>
    <tr>
      <td style="padding: 8px; border: 1px solid #aaa;">Articulate requirements</td>
      <td colspan="2" style="padding: 8px; border: 1px solid #aaa;"><input type="number" name="articulate" min="0" max="15" required style="width: 100%;"></td>
    </tr>
    <tr>
      <td style="padding: 8px; border: 1px solid #aaa;">Choose appropriate tools and methods for each task</td>
      <td colspan="2" style="padding: 8px; border: 1px solid #aaa;"><input type="number" name="tools" min="0" max="15" required style="width: 100%;"></td>
    </tr>
    <tr>
      <td style="padding: 8px; border: 1px solid #aaa;">Give clear and coherent oral presentation</td>
      <td colspan="2" style="padding: 8px; border: 1px solid #aaa;"><input type="number" name="presentation" min="0" max="15" required style="width: 100%;"></td>
    </tr>
    <tr>
      <td style="padding: 8px; border: 1px solid #aaa;">Functioned well as a team</td>
      <td colspan="2" style="padding: 8px; border: 1px solid #aaa;"><input type="number" name="teamwork" min="0" max="15" required style="width: 100%;"></td>
    </tr>
    <tr>
      <td style="padding: 8px; border: 1px solid #aaa;"><strong>Total</strong></td>
      <td colspan="2" style="padding: 8px; border: 1px solid #aaa;">(calculated after submission)</td>
    </tr>
  </table><br>

  <label><b>Judge's name:</b></label><br>
  <input type="text" name="judge_name" required style="width: 98%; padding: 5px; margin-bottom: 10px;"><br>

  <label><b>Comments:</b></label><br>
  <textarea name="comments" rows="4" style="width: 98%; padding: 5px;"></textarea><br><br>

  <input type="submit" value="Submit" style="padding: 10px 20px; background: #aaa; border: none; cursor: pointer;">
</form>

<!-- Logout Button -->
<p style="text-align: center; margin-top: 20px;">
  <a href="logout.php" style="padding: 10px 20px; background: #c00; color: white; text-decoration: none; border-radius: 5px;">Logout</a>
</p>

</body>
</html>
