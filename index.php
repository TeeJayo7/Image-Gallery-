<?php
include './contents/db_connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/index.css">
    <link rel="stylesheet" href="./asset/library/fontawesome-free-5.0.13/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./asset/css/utility.css">
    <link rel="stylesheet" href="./asset/css/login.css">
    <title>Registration</title>
</head>
<body>
        <div class="pagewrapper">
            <div class="imagewrapper">
                <div class="logo"><h2 class="h_2">TeeJay<span>Studio</span></h2></div>
                <div class="text">
                    <h1 class="h_1" id="production">Production <br>Starts Here</h1>
                    <h3>Get access to millions of <br>unique images for free <br> with high resolutions </h3>
                </div>
            </div>
            <div class="separator"></div>
            <div class="form">
                <form action="./contents/user_registration.php" method="POST">
                    <center><h2 class="h_2">Join TeeJay<span>Studio</span></h2></center>
                    <div id="form">
                    <center><div class="input_f"><i class="fas fa-user"></i><label class="label_u" for=""> Firstname</label><input name="firstname" required id="fname" type="text" placeholder="firstname here..."></div><p></p>
                    <div class="input_l"><i class="fas fa-user"></i><label class="label_u" for=""> Lastname</label><input name="lastname" required id="lname" type="text" placeholder="lastname here..."></div><p></p>
                    <div class="input_e"><i class="fas fa-envelope"></i><label class="label_u" for=""> E-mail</label><input type="email" id="email" placeholder="e-mail here..." required name="email" class="email" id=""></div><p></p>
                    <div class="input_u"><i class="fas fa-user"></i><label class="label_u" for=""> Username</label><input name="username" required id="uname" type="text" placeholder="username here..."></div><p></p>
                    <div class="input_p">
                        <i class="fas fa-eye-slash"></i><label class="label_u" for=""> Password</label><input id="password" required type="password" name="password" placeholder="password..."><p></p>
                        <i class="fas fa-eye-slash"></i><label class="label_u" for=""> Confirm Password</label><input required id="confirmPassword" type="password" name="confirmPassword" placeholder="confirm password...">
                    </div><p></p>
                    <div class="input_s"><input type="submit" value="submit" name="submit" id="submit" class="submit_u"></div></center>
                    </div>
                    <center><h3 class="h_3" id="style">Already have an account? <a href="#" onclick="showModalBox()" class="login">login</a></h3></center>
                </form>
            </div>
        </div>
        <div id="loginContainer" class="login-page-wrapper">
            <div class="login-wrapper">
                <form action="./contents/user_login.php" method="post">
                    <h1 id="display">
                        Login
                    </h1>
                    <label for="">Username</label>
                    <input type="text" id="user-n" name="username" placeholder="username here...."><p></p>
                    <label for="Password">Password</label>
                    <input type="password" id="pass-w" name="password" placeholder="password here...."><p></p>
                    <center><input type="submit" name="login" value="Login"></center>
                    <p>Don't have an account yet, <button id="sign-up"><a href="index.html"> Sign up</a></button></p>
                </form>
            </div>
            <button id="close" onclick="closeModalBox()" title="Close" class="close">X</button>
        </div>
        <script src="./asset/js/modal.js"></script>
</body>
</html>