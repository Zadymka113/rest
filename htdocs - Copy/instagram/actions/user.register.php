<?php 
if(!empty($_POST)) 
{
    $email = htmlspecialchars(trim($_POST['email']));
    $name = htmlspecialchars(trim($_POST['name']));
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

    if($db_conn->query("SELECT ID_user FROM users WHERE login = '".$login."' OR email = '".$email."'")->num_rows<1)
    {
        $query = "INSERT INTO users (login, email, password, surname, forename, created_at, updated_at)
        VALUES ('".$login."','".$email."','".sha1($password)."','".$name."','".$name."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."')";


        if($db_conn->query($query)) {
            echo "Dodano uzytkownika";
            header("Refresh: 3; url=/");
        }
        else {
            echo 'Error';
        }

    }
    else {
        echo "Taki użytkownik już istnieje";
    }
}
else {
    die('Error: no data to process');
}
