<?php

// Kiểm tra nếu người dùng chưa đăng nhập, chuyển họ đến trang đăng nhập
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Page</h1>
    <p>Welcome, admin!</p>
    <p>Here are your privileges:</p>
    <ul>
        <li>Create and modify users</li>
        <li>Create and modify products</li>
        <li>Create and modify pages</li>
        <li>View and edit orders</li>
    </ul>
</body>
</html>
