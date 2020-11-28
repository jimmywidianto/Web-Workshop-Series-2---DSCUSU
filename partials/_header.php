<?php
session_start();
if(isset($_SESSION['level'])) {
    if($_SESSION['level'] != "user") {
        header('Location: admin/Index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airu Store - Nature Shoes</title>
    <link rel="icon" href="assets/Icon/Brand.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>
    <header>
        <nav>
            <div class="left">
                <ul class="menu">
                    <li class="brand"><img src="assets/Icon/Brand.png" alt="brand"></li>
                    <li class="item"><a href="Index.php">Home</a></li>
                    <li class="item"><a href="#">Men</a></li>
                    <li class="item"><a href="#">Women</a></li>
                    <li class="item"><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="right">
                <ul class="menu">
                    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
                    <?php if(!isset($_SESSION['level'])): ?>
                    <li class="item"><a href="Register.php">Register</a></li>
                    <li class="item" id="line"><span>|</span></li>
                    <li class="item"><a href="Login.php">Login</a></li>
                    <?php else: ?>
                    <li class="item"><a href="#"><?php echo $_SESSION['name']; ?></a></li>
                    <li class="item" id="line"><span>|</span></li>
                    <li class="item"><a href="Logout.php">Logout</a></li>
                    <?php endif;?>
                    
                </ul>
            </div>
        </nav>
    </header>