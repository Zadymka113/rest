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
<style type="text/css">
.toupdate {
    margin-left: 50px;
}
</style>
<?php
    include 'nav.php';
    require 'db.php';

    $id = $_GET['rn'];

    echo "
    <div class='toupdate'>
    <h1>Update this record</h1>
    <form action='dbupdatecomplete.php?rn=$id' method='post'>
    <label for=''>Name</label>
    <input type='text' name='name' id='name'>
    <input type='submit' href='dbupdatecomplete.php?rn=$id' value='update'></input>
    </form>
    </div>";

    ?>
</style>
</body>
</html>