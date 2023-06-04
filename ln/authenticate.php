<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $file = 'users.txt';

    // Đọc file
    $lines = file($file);

    // Kiểm tra thông tin đăng nhập
    foreach ($lines as $line) {
        $info = explode(' ', $line);
        if ($username == $info[0] && $password == $info[1]) {
            header('Location: admin.php');
            exit();
        }
    }

    // Nếu thông tin đăng nhập không hợp lệ, chuyển lại trang login
    header('Location: login.php');
    exit();
?>