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
    
<div class="chooserecords">
    <h1>Choose a record to update</h1>

    <h2>All database records:</h2>

    <div class="records2" id="records2">
        <?php

        session_start();
        require 'db.php';


        $sql = "SELECT * FROM test_table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        echo "
        <table>
        <tr>
        <td>"."id = ".$row["id"]."</td>
        <td>"."name= ".$row["name"]."</td>
        <td><a href = 'dbupdate.php?rn=$row[id]'>Update</a></td> <br>
        </tr>
        </table>";

        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>
        </div>
</div>

</body>
</html>