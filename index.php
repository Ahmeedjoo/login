<?php

include "users.php";

session_start();
$error_message = "";
$flag = false;
foreach ($users as $user) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == $user['email'] && $password == $user['password']) {
            $_SESSION['name'] = $user['name'];
            header("Location: http://localhost/tasks/login task/user.view.php");
            exit();
        } else {
            $flag = true;
        }
    }
};

if($_POST['email'] != '' && $_POST['password'] != '' && $flag)
{
    $error_message = "Invalid email or password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Title</title>
</head>
<body>
    <form method="post">
        <label for="name">User Login Form</label>
        <input type="text" name="email" aria-label="name">
        <input type="password" name="password" aria-label="name">
        <button type="submit"> submit </button>
        <h3><?php echo $error_message ?></h3>
    </form>
</body>
</html>
