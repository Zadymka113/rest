<?php 
if(!empty($_POST)) 
{
   

   print_r($_POST);
   print_r($_FILES);

   $description = trim(htmlspecialchars($_POST['description']));


   $query = "INSERT INTO posts (description, image, created_at, updated_at, ID_user) 
                VALUES ('".$description."','".addslashes(file_get_contents($_FILES['photo']['tmp_name']))."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','".$_SESSION['user_data'][0]."')";

    try {
        if($db_conn->query($query)) {
            header("Location: /?q=home");
        }
        else {
            echo "<script>alert('Blad dodawania obrazu');</script>";
        }
    }
    catch(Exception $e) {
        print_r($e);
    }
}
else {
    die('Error: no data to process');
}
