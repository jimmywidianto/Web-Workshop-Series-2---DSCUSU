<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airu Store - Nature Shoes</title>
    <link rel="icon" href="assets/Icon/Brand.png">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-background">
    <main>
        <section>
            <div class="login-wrapper">
                    <div class="back-menu">
                        <a href="Index.php"><img src="assets/Icon/arrow.svg" alt="back-icon">
                        Back</a>
                    </div>
                    <div class="register-container">
                        <div class="register-header">
                            <h1>Welcome, back!</h1>
                            <p>Just sign in to resume what you were doing.</p>
                        </div>
                        <div class="already-account">
                            <div class="already-login">
                                <p>Need a Dailypedia account?</p>
                                <a href="Register.php">Create an account</a>
                            </div>
                            <p>Login with:</p>
                            <div class="account-list">
                                <div class="account-icon">
                                    <img src="assets/Icon/Facebook.png" alt="facebook-icon">
                                    <a>Facebook</a>
                                </div>
                                <div class="account-icon">
                                    <img src="assets/Icon/Google.png" alt="Google-icon">
                                    <a>Google</a>
                                </div>
                            </div>
                        </div>
                            <hr>
                        <div>
                            <form method="POST" id="register-form" class="form-register">
                                <label for="username">Username:</label>
                                <input required type="text" id="username" name="username" placeholder="Your Username...">                                
                                <label for="password">Password:</label>
                                <input required type="password" id="password" name="password" placeholder="Your password...">
                                <div class="term-form">
                                    <input class="left" type="checkbox" name = "terms" value = "on">
                                    <label class="right">Remember me</label>
                                </div>
                                <input type="submit" form="register-form" value="Submit"></Input>
                            </form>
                            
                        </div>  
                    </div>

            </div>
        </section>
    </main>
</body>
</html>
