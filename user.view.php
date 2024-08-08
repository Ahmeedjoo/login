<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Hello, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
</body>
</html>
