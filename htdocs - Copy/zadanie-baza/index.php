<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
    <?php
    include 'nav.php';
    ?>
    <h1>Home page</h1>
    
    <h2>All database records:</h2>

    <div class="records" id="records">
    <?php

session_start();
require 'db.php';

$sql = "SELECT * FROM test_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]."   name: ".$row["name"]."<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    </div>

</body>
</html>