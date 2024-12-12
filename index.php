<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js"></script>
</head>
<body>

<?php
session_start();
include 'Conn_Functions.php';

if (isset($_COOKIE['user_name'])) {
    $_SESSION['user_name'] = $_COOKIE['user_name'];
    header("Location: main.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']); 
    login($email, $password, $remember_me);
}
?>

<div class="center" id="login_form">
    <div class="label">
        <h1>LOGIN</h1>
    </div>
    <div class="form">
        <div class="login_page">
            <form action="index.php" method="POST">
                <div class="txt_field">
                    <input type="text" name="email" id="email" placeholder="Email" required onclick="clearTextbox()">
                </div>
                <div class="txt_field">
                    <input type="password" name="password" placeholder="Password" id="password" required onclick="clearTextbox()">
                </div>
                <div class="button_field">
                    <button type="submit" id="btnLogin">LOGIN</button>
                </div>
                <div > <label> 
                    <input type="checkbox" name="remember_me" id="remember_me"> Remember Me </label> <br>
                </div>
            </form>
            <div class="create_account">
                Not a member?
                <a href="sign_up.php">Create Account</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
