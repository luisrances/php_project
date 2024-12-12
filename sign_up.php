<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/create_account.css">
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var message = document.getElementById("passwordMessage");
            var signUpButton = document.getElementById("btnSignup");
            
            var hasNumber = /\d/;
            var hasUppercase = /[A-Z]/;
            var hasLowercase = /[a-z]/;

            if (password.length >= 8 && hasNumber.test(password) && hasUppercase.test(password) && hasLowercase.test(password)) {
                message.style.color = 'green';
                message.innerText = 'Valid Password';
                signUpButton.disabled = false;
            } else {
                message.style.color = 'red';
                message.innerText = 'Invalid Password';
                signUpButton.disabled = true;
            }
        }
    </script>
</head>
<body>
    <div class="center" id="signUp_form">
        <div class="header"><h1>SIGN UP</h1></div>
        <div class="form">
            <div class="sign_up">
                <form action="sign_up.php" method="post">
                    <div class="txt_field">
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </div>
                    <div class="txt_field">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="password" id="password" placeholder="Password" required onkeyup="validatePassword()">
                        <small id="passwordMessage" style="color: red;"></small>
                    </div>
                    <div class="button_field">
                        <button type="submit" id="btnSignup" disabled>SIGN UP</button>
                    </div>
                </form>
                <div class="button_field">
                    <button type="button" onclick="openPage()">CANCEL</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openPage() {
            window.location.href = "index.php";
            return true;
        }
    </script>
</body>
</html>


<?php
include 'Conn_Functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    signUp($email, $password, $name);
}
?>
