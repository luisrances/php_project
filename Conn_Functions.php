<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dekatlon_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

function signUp($email, $password, $name) {
    global $conn;

    if (empty($email) || empty($password) || empty($name)) {
        echo "<script>alert('All fields are required'); window.location.href = 'sign_up.php';</script>";
        return;
    }else {
        $stmt = $conn->prepare("INSERT INTO useraccount (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password); 

        if ($stmt->execute()) {
            echo "<script>alert('Sign up successful'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href = 'sign_up.php';</script>";
        }

        $stmt->close();
    }
}


function login($email, $password, $remember_me) {
    global $conn;
    session_start();

    if (empty($email) || empty($password)) {
        echo "<script>alert('Email and password cannot be empty'); window.location.href = 'index.php';</script>";
        return;
    }

    $stmt = $conn->prepare("SELECT password, name FROM useraccount WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($user_password, $name);
    $stmt->fetch();

    if ($password === $user_password) {
        if ($remember_me) {
            setcookie('user_name', $name, time() + 86400 , "/"); // 86400 = 1 day
            $_SESSION['user_name'] = $name;
        }
        echo "<script>alert('Login successful'); window.location.href = 'main.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href = 'index.php';</script>";
    }

    $stmt->close();
}
?>
