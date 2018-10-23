<?php
    require 'connect.php';
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">''
    <link rel="stylesheet" type="text/css" media="screen" href="login_style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="input-box-style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="button-style.css" />
</head>
<body>
    <header>

    </header>
    <div id="nav-bar" class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li style="float:right;"><a href="#">Signup</a></li>
        </ul>
    </div>

    <center>
        <form method="POST" action="login-controller.php">
            <div class="login-panel" id="login-panel">
                <h1>Login</h1>
                <div class="group" style="width: 300px">      
                    <input type="text" name="username" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Username</label>
                </div>
                <div class="group" style="width: 300px">      
                    <input type="password" name="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
                <a href="#">Forgot Password</a>
                <button class="btn" type="button" style="background-color:#f8b109">
                    <span>Login</span>
                </button>
            </div>
        </form>
    </center>


</body>
</html>