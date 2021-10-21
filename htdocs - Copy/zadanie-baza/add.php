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

<div class="addrecords" id="addrecords">
<h1>Add a record</h1>

<form class="addrecordsform" action="dbadd.php" method="post">
    <label for="">Name</label>
    <input type="text" name="name">
    <input name="submit" type="submit" value="Add a record">
</form>
</div>
    
</body>
</html>