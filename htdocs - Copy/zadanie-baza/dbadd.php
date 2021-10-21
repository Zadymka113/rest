<?php
$servername = "localhost";
$dbname = "zadanie-baza";

$conn = new mysqli("localhost", "root", "", "zadanie-baza");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name= $_POST['name'];

$sql = "INSERT INTO test_table (name)
VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location:add.php?add=success");
?>