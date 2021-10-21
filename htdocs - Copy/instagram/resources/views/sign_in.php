<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require("templates/header.php"); ?>
</head>
<body>
    <div class="container">
        <?php 

        if(!isset($_SESSION['user_data'])) {
        ?>
        <div class="row">
            <div class="col-6">
                <div class="phones-img"></div>
            </div>
            <div class="col-6 d-flex flex-column align-items-left justify-content-center right-pane">
                <div class="row">
                    <div class="col-12 text-center bordered" >
                        <h1 class="logo">Instagram</h1>
                        <form class="login-form" method="POST" action="?q=sign_in&action=user.log_in">
                            <input name="login" type="text" placeholder="Phone number, username or e-mail.">
                            <input name="password" type="password" placeholder="Password">
                            <input type="submit" value="Log In">
                            <span class="serparte">or</span>
                            <div class="social">
                                <p>Login in with Facebook</p>
                            </div>
                            <p>Forgot password?</p>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center bordered">
                        <p>Don't have an account? <a href="?q=sign_up">Sign up</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>Get the app.</p>
                        <div class="get-the-app">
                            <a href=""><img src="../public/images/appstore.png" alt=""></a>
                            <a href=""><img src="../public/images/googleplay.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        }
        else
        {
            ?>
            <div class="row">
            <div class="col-6">
                <div class="phones-img"></div>
            </div>
            <div class="col-6 d-flex flex-column align-items-left justify-content-center right-pane">
                <div class="row">
                    <div class="col-12 text-center bordered" >
                        <h1 class="logo">Instagram</h1>
                        <img src="../public/images/blank-avatar.jpg" width="40%" class="mb-3">
                        <div class="mb-4">
                            <a href="?q=home">
                                <button class='continue btn btn-xl'>Continue as <?php echo $_SESSION['user_data'][1]; ?></button>
                            </a>
                        </div>
                        <div>
                             <?=$_SESSION['user_data'][1]?>? <a href="index.php/?q=sign_out">Switch accounts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php 
            echo ("Zalogowany. <a href='index.php/?q=sign_out'>Wyloguj sie </a>");
        }
        
        ?>
    </div>
</body>
</html>