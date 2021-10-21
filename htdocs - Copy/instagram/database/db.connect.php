<?php

require 'db.conf.php';

$db_conn = new mysqli($db_host,$db_username, $db_password, $db_name);
//$db_conn->set_charset("utf8mb4");

