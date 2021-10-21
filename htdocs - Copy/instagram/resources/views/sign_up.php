<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up for InstraGRAM</title>
    <?php require("templates/header.php"); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-4 d-flex flex-column align-items-left justify-content-center offset-md-3">
                <div class="row">
                    <div class="col-12 text-center bordered" >
                        <h1 class="logo">Instagram</h1>
                        <h4>Sign up to see photos and videos from your friends.</h4>
                        <div class="social">
                            <p>Login in with Facebook</p>
                        </div>
                        <span class="serparte">or</span>
                        <form class="login-form" method="POST" action="?q=sign_up&action=user.register">
                            <input name="email" type="text" placeholder="Mobile number or e-mail">
                            <input name="name" type="text" placeholder="Full Name">
                            <input name="login" type="text" placeholder="Username">
                            <input name="password" type="password" placeholder="Password">
                            <input type="submit" value="Next">
                            
                            <p class="text-center">By signing up, you agree to our Terms . Learn how we collect, use and share your data in our Data Policy and how we use cookies and similar technology in our Cookies Policy .</p>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center bordered">
                        <p>Have an account? <a href="?q=sign_in">Sign in</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>Get the app.</p>
                        <div class="get-the-app">
                            <a href=""><img src="/images/appstore.png" alt=""></a>
                            <a href=""><img src="/images/googleplay.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>