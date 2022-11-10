<?php 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueJay Pantry Admin Login</title>
    <link rel="stylesheet" href="loginStyle.css">
    <script src="loginMain.js"></script>
</head>

<body>
<div id="home">
        <a href="https://bluejaypantry.etowndb.com/" >
            <img src="\docs\images\home-big.png" alt="home icon" height="75px">
        </a>
    </div>
    <div id="main">
        <h1>Admin Login</h1>
            <div id="errorDiv" class="hidden">
                <label>Incorrect Username and Password!<hr id="errorHr"></label>
            </div>
        <label id="usernameLabel">Username:</label><br>
        <input id="username" placeholder="Type your username">
        <br>
        <br>
        <label id="passwordLabel">Password:</label><br>
        <input id="password" type="password" placeholder="Type your password">
        <br>
        <div id="forgotPasswordDiv">
            <a id="forgotPassword"
                href="C:\Users\Aiden\OneDrive - Elizabethtown College\Software Engineering\Campus Cartographers\campuscartographers\src\Forgot Password\forgotPassword.html">Forgot
                Password?</a>
        </div>
        <br>
        <button id="logBtn">LOGIN</button>
    </div>
</body>

</html>