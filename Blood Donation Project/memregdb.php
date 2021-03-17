<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$email = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $email ,$password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE Blood_Donation";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
 // echo "Error creating database: " . $conn->error;
}

$conn->close();
$dbname = "Blood_Donation";

// Create connection
$conn1 = new mysqli($servername, $email, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}

// sql to create table
$sql1 =  "CREATE TABLE Member(
email VARCHAR(50) PRIMARY KEY,
password VARCHAR(30))";

if ($conn1->query($sql1) === TRUE) {
  echo "Table Member created successfully";
} else {
 // echo "Error creating table: " . $conn1->error;
}

$sql2 =  "CREATE TABLE Donor(
email VARCHAR(50) PRIMARY KEY,
name VARCHAR(50),
fname VARCHAR(50),
password VARCHAR(30),
dob DATE,
gender VARCHAR(50),
blood VARCHAR(20),
division VARCHAR(20),
contact DECIMAL (11, 0)
)";

if ($conn1->query($sql2) === TRUE) {
  echo "Table Donor created successfully";
} else {
  //echo "Error creating table: " . $conn1->error;
}

$conn1->close();
?>
</body>
</html>