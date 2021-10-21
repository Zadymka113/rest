<?php

session_start();

require('../database/db.connect.php');

if(isset($_GET['q'])) {
    if(file_exists('../resources/views/'.$_GET['q'].'.php'))
    {
        if(isset($_GET['action'])) {
            if(file_exists('../actions/'.$_GET['action'].'.php')){
                require('../actions/'.$_GET['action'].'.php');
            }
        }
        require('../resources/views/'.$_GET['q'].'.php');
    }
    else {
        echo "<h1>Not found</h1>";
    }
}
else
{
    header("Location: http://localhost/instagram/public/index.php?q=sign_in");
}