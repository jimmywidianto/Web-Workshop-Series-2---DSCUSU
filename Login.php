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
                        
                        <?php
                        if($_POST) {
                            include "database/connecton.php";

                            try {
                                $query = "SELECT * FROM accounts WHERE username=:username and password=:password";
                                
                                $stmt = $con->prepare($query);

                                $username = htmlspecialchars(strip_tags($_POST['username']));
                                $password = md5(htmlspecialchars(strip_tags($_POST['password'])));

                                $stmt->bindParam(':username', $username);
                                $stmt->bindParam(':password', $password);

                                $stmt->execute();
                                $num = $stmt->rowCount();

                                if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row);
                                }

                                if($num === 1) {
                                    session_start();
                                    
                                    $_SESSION['id'] = $id;
                                    $_SESSION['name'] = $name;
                                    $_SESSION['level'] = $level;

                                    if($level == "admin") {
                                        header('Location: admin/Index.php');

                                    }
                                    else if($level == "user") {
                                        header('Location: Index.php');
    
                                    }
                                    echo($level);
                                }
                                else {
                                    echo "<script>alert('Gagal melakukan registrasi. Silahkan periksa kembali data yang diinput')</script>";
                                }

                            }
                            catch(PDOException $e) {
                                die('Error: ' . $e->getMessage());
                            }
                        }
                        ?>

                        <div>
                            <form method="POST" id="register-form" class="form-register" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <label for="username">Username:</label>
                                <label for="username" style="color: red;" id="username_err"></label>
                                <input required type="text" id="username" name="username" minlength="4" maxlength="12" onkeyup="validate_username()" placeholder="Your Username...">

                                <label for="password">Password:</label>
                                <label for="password" style="color: red;" id="password_err"></label>
                                <input required type="password" id="password" minlength="8" onkeyup="validate_password()" name="password" placeholder="Your password...">
                                <div class="term-form">
                                    <input class="left" type="checkbox" name = "terms" value = "on">
                                    <label class="right">Remember me</label>
                                </div>
                                <input type="submit" form="register-form" value="Submit"></Input>
                            </form>
                            <script type="text/javascript" src="partials/_validate.js"></script>
                            
                        </div>  
                    </div>

            </div>
        </section>
    </main>
</body>
</html>