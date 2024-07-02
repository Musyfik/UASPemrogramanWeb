<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    $result = $mysqli->query("SELECT * FROM users WHERE nim='$nim'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
    } else {
        echo 'Login failed';
    }
}
?>

<form method="POST">
    NIM: <input type="text" name="nim"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
