<?php 
require('../actions/post.load_all.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require("templates/header.php"); ?>
</head>

<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container">
            <div class="col-4">
                <a class="navbar-brand logo" href="#">Instagram</a>
            </div>
            <div class="col-4 text-center">
            <form class="form-inline">
                <input class="form-control text-center input-bg" type="search" placeholder="Search">
            </form>
            </div>
            <div class="col-4">
            <ul class="navbar-nav d-flex flex-row align-items-left justify-content-around ml-auto" style="width: 250px;">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-house-user fa-2x text-dark"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-paper-plane fa-2x text-dark"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-compass fa-2x text-dark"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-heart fa-2x text-dark"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-circle fa-2x text-dark"></i></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <div class="bordered">
                            <form method="POST" action="?q=home&action=post.add" enctype="multipart/form-data" class="d-flex flex-column">
                                <h5>Add new post:</h5>
                                <textarea placeholder="Input description" name="description" required></textarea>
                                <input type="file" name="photo" required />
                                <input type="submit" class="btn btn-sm btn-info" value="Save post!">
                            </form>
                        </div>
                    </div>
                </div>
                <?php 
                while($post = $posts->fetch_object()) {
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="bordered-post">
                                <?=$post->surname?>
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post->image); ?>" />
                                <?=$post->description?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-4">
                profil
                sugestie
            </div>
        </div>
    </div>
        <?php
    echo ("Zalogowany. <a href='index.php/?q=sign_out'>Wyloguj sie </a>");
        ?>
</body>

</html>