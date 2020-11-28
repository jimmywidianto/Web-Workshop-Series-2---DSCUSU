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
                        <?php
                        $name = "";
                        $username = "";
                        $email = "";
                        $birthdate = "";
                        $gender = "";
                        $password = "";
                        if($_POST) {
                            include "database/connecton.php";

                            try {
                                $query = "SELECT * FROM accounts WHERE username=:username or email=:email";
                                
                                $stmt = $con->prepare($query);

                                $name = htmlspecialchars(strip_tags($_POST['name']));
                                $username = htmlspecialchars(strip_tags($_POST['username']));
                                $email = htmlspecialchars(strip_tags($_POST['email']));
                                $birthdate = htmlspecialchars(strip_tags($_POST['bod']));
                                $gender = htmlspecialchars(strip_tags($_POST['gender']));
                                $password = md5(htmlspecialchars(strip_tags($_POST['password'])));

                                $stmt->bindParam(':username', $username);
                                $stmt->bindParam(':email', $email);

                                $stmt->execute();
                                $num = $stmt->rowCount();

                                if($num > 0) { 
                                    echo "<script>alert('Gagal melakukan registrasi. Username atau email sudah terdaftar.')</script>";

                                }
                                else {
                                    try {
                                        $query = "INSERT INTO accounts SET 
                                                  name=:name, 
                                                  username=:username, 
                                                  email=:email, 
                                                  birthdate=:birthdate, 
                                                  gender=:gender, 
                                                  password=:password,
                                                  level='user'";
                                        
                                        $stmt = $con->prepare($query);
        
                                        $stmt->bindParam(':name', $name);
                                        $stmt->bindParam(':username', $username);
                                        $stmt->bindParam(':email', $email);
                                        $stmt->bindParam(':birthdate', $birthdate);
                                        $stmt->bindParam(':gender', $gender);
                                        $stmt->bindParam(':password', $password);
        
                                        if($stmt->execute()) {
                                            
                                            header('Location: Index.php');
        
                                        }
                                        else {
                                            echo "<script>alert('Gagal melakukan registrasi. Silahkan periksa kembali data yang diinput.')</script>";
                                        }
        
                                    }
                                    catch(PDOException $e) {
                                        die('Error: ' . $e->getMessage());
                                    }
                                    
                                }

                            }
                            catch(PDOException $e) {
                                die('Error: ' . $e->getMessage());
                            }
                            
                        }
                        ?>
                    <div>
                        <form method="POST" id="register-form" class="form-register" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <label for="name">Name:</label>
                            <label for="name" style="color: red;" id="name_err"></label>
                            <input required type="text" id="name" name="name" onkeydown="return /[a-z, ]/i.test(event.key)" onkeyup="validate_name()" placeholder="Your Name...">

                            <label for="username">Username:</label>
                            <label for="username" style="color: red;" id="username_err"></label>
                            <input required type="text" id="username" name="username" minlength="4" maxlength="12" onkeyup="validate_username()" placeholder="Your Username...">

                            <label for="email">Email:</label>
                            <label for="email" style="color: red;" id="email_err"></label>
                            <input required type="email" id="email" name="email" onkeyup="validate_email()" placeholder="Your Email...">

                            <div class="left">
                                <label for="bod">Birth of Date:</label>
                                <input required type="date" id="bod" name="bod" value="<?php echo $birthdate; ?>">
                            </div>
                            <div class="right">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" required>
                                    <option disabled>Select</option>
                                    <?php if($gender == 'Male'): ?>
                                    <option value="male" selected>Male</option>
                                    <option value="Female">Female</option>
                                    <?php elseif($gender == 'Female'): ?>
                                    <option value="male">Male</option>
                                    <option value="Female" selected>Female</option>
                                    <?php else: ?>
                                    <option value="male">Male</option>
                                    <option value="Female">Female</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <label for="password">Password:</label>
                            <label for="password" style="color: red;" id="password_err"></label>
                            <input required type="password" id="password" minlength="8" onkeyup="validate_password()" name="password" placeholder="Your password...">
                            <div class="term-form">
                                <input class="left" required type="checkbox" name = "terms" value = "on">
                                <label class="right">I understand and agree with the Terms of Use and Privacy Policy</label>
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