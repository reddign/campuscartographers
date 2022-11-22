<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
// print_r($_SESSION);
if(isset($_SESSION["LoginStatus"]) && $_SESSION["LoginStatus"]== "YES"){
	// header("location: ../homePage/index.php");
	exit;
}
require "loginMain.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueJay Pantry Admin Login</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>

<body>
    <div id="main">
        <h1>Admin Login</h1>
        <div id="error"><?php if(isset($_SESSION["error"])){echo $_SESSION["error"];} ?></div>
        <form action="login.php" method="POST">
            <label id="usernameLabel">Username:</label><br>
            <input id="username" name="user" placeholder="Type your username" required>
            <br>
            <br>
            <label id="passwordLabel">Password:</label><br>
            <input id="password" name="pass" type="password" placeholder="Type your password" required>
            <br>
            <br>
            <input type="submit" id="loginBtn" name="loginBtn" value="LOGIN">
            <!-- <button>LOGIN</button> -->
        </form>
    </div>
</body>

</html>