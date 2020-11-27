<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airu Store - Nature Shoes</title>
    <link rel="icon" href="assets/Icon/Brand.png">
    <link rel="stylesheet" href="style.css">
</head>
<body class="register-background">
    <main>
        <section>
            <div class="register-wrapper">

                <div class="back-menu">
                    <a href="Index.php"><img src="assets/Icon/arrow.svg" alt="back-icon">
                    Back</a>
                </div>
                <div class="register-container">
                    <div class="register-header">
                        <h1>Create an account</h1>
                        <p>Register for free for further recommendations from us for your productivity!</p>
                    </div>
                    <div class="already-account">
                        <div class="already-login">
                            <p>Already have an account? </p>
                            <a href="Login.php">Login</a>
                        </div>
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
                            <label for="email">Email:</label>
                            <input required type="email" id="email" name="email" placeholder="Your Email...">
                            <div class="left">
                                <label for="bod">Birth of Date:</label>
                                <input required type="date" id="bod" name="bod">
                            </div>
                            <div class="right">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" required>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <label for="password">Password:</label>
                            <input required type="password" id="password" name="password" placeholder="Your password...">
                            <div class="term-form">
                                <input class="left" required type="checkbox" name = "terms" value = "on">
                                <label class="right">I understand and agree with the Terms of Use and Privacy Policy</label>
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