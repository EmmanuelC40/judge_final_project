<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Judge Login</title>
</head>
<body style="background-color: #f4f4f4; padding: 20px;">
  <form method="POST" action="process_judge.php" style="background: #ddd; padding: 50px; max-width: 400px; margin: auto; border: 4px solid #aaa;">
    <h2 style="text-align:center;">Judge Login</h2>
    
    <label><b>Username:</b></label><br>
    <input type="text" name="username" required style="width: 95%; padding: 7px;"><br><br>

    <label><b>Password:</b></label><br>
    <input type="password" name="password" required style="width: 95%; padding: 7px;"><br><br>

    <input type="submit" value="Login" style="padding: 10px 20px; background: #aaa; border: none; cursor: pointer; width: 100%;">
  </form>
</body>
</html>
