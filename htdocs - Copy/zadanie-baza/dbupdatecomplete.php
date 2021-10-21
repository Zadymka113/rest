<?php
session_start();
require 'db.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$id=$_GET['rn'];

$query = "UPDATE test_table SET name = '$name' WHERE id = '$id' ";
$data = mysqli_query($conn,$query);

$conn->close();
header("Location:update.php?update=success");
?>