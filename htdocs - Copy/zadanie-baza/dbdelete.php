<?php
session_start();
require 'db.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['rn'];
$query = "DELETE FROM test_table WHERE id = '$id' ";

$data = mysqli_query($conn,$query);

$conn->close();
header("Location:delete.php?delete=success");
?>