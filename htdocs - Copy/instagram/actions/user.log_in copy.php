<?php 
if(!empty($_POST)) 
{
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

    $user = $db_conn->query("SELECT ID_user, surname FROM users WHERE ( login = '".$login."' OR email = '".$login."') AND password = '".sha1($password)."' ");


    if($user->num_rows == 1)
    {
        $user_data = $user->fetch_object();

        $_SESSION['user_data'] = [$user_data->ID_user, $user_data->surname];
        echo "Zalogowano!";
        header("Refresh: 3; url=/?q=home");
    }
    else {
        echo "Dane nieprawidlowe";
    }
}
else {
    die('Error: no data to process');
}
