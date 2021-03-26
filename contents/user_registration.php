<?php
include './db_connect.php';

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    
    if($password!=$confirmPassword){
        echo "Password Mismatched";
        header("refresh: 4;../index.php");
    }else{
        $ins = "INSERT INTO registration VALUES(null,'$firstname','$lastname','$email','$username','$password',null)";
        $res = $conn->query($ins);

        if($res == true){
        header("refresh:4; imagegallery.php");
            
       }else{
        echo "Data rejected";
       }
    }
    }else{
    echo "You have not yet submitted this form";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader</title>
<style>
    body, html {
    height: 100%;
    text-align: center;
}

body {
  background-color: #ffffff;
}

.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #e14e42;
  top: 40%;
  right: 10%;
  animation: loader 2s infinite ease;
}

.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color:  #e7c82f;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% {
    transform: rotate(0deg);
  }
  
  25% {
    transform: rotate(180deg);
  }
  
  50% {
    transform: rotate(180deg);
  }
  
  75% {
    transform: rotate(360deg);
  }
  
  100% {
    transform: rotate(360deg);
  }
}

@keyframes loader-inner {
  0% {
    height: 0%;
  }
  
  25% {
    height: 0%;
  }
  
  50% {
    height: 100%;
  }
  
  75% {
    height: 100%;
  }
  
  100% {
    height: 0%;
  }
}
</style>
</head>
<body>
<span class="loader"><span class="loader-inner"></span></span>
</body>
</html>

