<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "judges_final_project";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select database
$conn->select_db($dbname);

// Create judges table
$sql = "CREATE TABLE IF NOT EXISTS judges (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) UNIQUE,
    password VARCHAR(20)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table judges created successfully.<br>";
} else {
    echo "Error creating judges table: " . $conn->error . "<br>";
}

// Create admins table
$sql = "CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) UNIQUE,
    password VARCHAR(20)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table admins created successfully.<br>";
} else {
    echo "Error creating admins table: " . $conn->error . "<br>";
}

// Create scores table
$sql = "CREATE TABLE IF NOT EXISTS scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    group_num VARCHAR(10),
    members TEXT,
    title VARCHAR(20),
    articulate INT,
    tools INT,
    presentation INT,
    teamwork INT,
    total INT,
    judge_name VARCHAR(20),
    comments TEXT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table scores created successfully.<br>";
} else {
    echo "Error creating scores table: " . $conn->error . "<br>";
}

// Create group_avg table
$sql = "CREATE TABLE IF NOT EXISTS group_avg (
    group_num VARCHAR(10) PRIMARY KEY,
    title VARCHAR(20),
    avg_score FLOAT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table group_avg created successfully.<br>";
} else {
    echo "Error creating group_avg table: " . $conn->error . "<br>";
}

// Insert sample judge users
$sql = "INSERT IGNORE INTO judges (username, password) VALUES 
    ('judge1', 'password1'),
    ('judge2', 'password2'),
    ('judge3', 'password3'),
    ('judge4', 'password4')";
if ($conn->query($sql) === TRUE) {
    echo "Sample judges inserted successfully.<br>";
} else {
    echo "Error inserting judges: " . $conn->error . "<br>";
}

// Insert admin user
$sql = "INSERT IGNORE INTO admins (username, password) VALUES 
    ('admin', 'adminpass123')";
if ($conn->query($sql) === TRUE) {
    echo "Admin user inserted successfully.<br>";
} else {
    echo "Error inserting admin: " . $conn->error . "<br>";
}

$conn->close();
?>

<p style="text-align: center; margin-top: 30px;">
  <a href="index.html" style="padding: 10px 20px; background: #007BFF; color: white; text-decoration: none; border-radius: 5px;">Login</a>
</p>
