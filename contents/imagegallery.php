<?php
session_start();
ob_start();

$myfullname = $_SESSION['firstname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Image Gallery</title>
    <link rel="stylesheet" href="../asset/css/imagegallery.css">
    <link rel="stylesheet" href="../asset/library/fontawesome-free-5.0.13/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../asset/css/utility.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h3 class="logo h_3">TeeJay<span>Studio</span></h3>
            <nav>
                <ul>
                    <li class="oncheck">Home</li>
                    <li><a href="mailto:joshuataiwo07@gmail.com">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
            <li>
                <span class="h_2"><i class="fas fa-user-circle"></i> Welcome! <?php echo $myfullname; ?> &nbsp;</span>
            </li>
            <div><a href="logout.php" id="logout">Logout</a></i></div>
        </div>
        <div id="grid">
        <aside class="aside-nav">
                <ul class="navigation-links">
                    <li><a href="#">Editorial</a></li>
                    <li><a href="#">Following</a></li>
                    <li class="oncheck">Categories</li>
                    <li><a href="animals.php">Animals</a></li>
                    <li><a href="food.php">Food</a></li>
                    <li><a href="nature.php">Nature</a></li>
                    <li><a href="technology.php">Technology</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Health</a></li>
                    <li><a href="#">Art and Culture</a></li>
                    <li><a href="#">Furniture</a></li>
                </ul>
        </aside>
        <div class="grid">
            <div class="home">
            <h1 class="h_1">Welcome to TeeJay<span>Studio</span></h1>
            <h3 class="h_3">A place to download images with ease</h3>
            <i class="fas fa-search"></i><input type="search" placeholder="search photos here...">
            </div>
        </div>
        </div>
    </div>
</body>
</html>
