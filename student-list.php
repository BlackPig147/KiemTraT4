<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập thành công trước đó
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    if(isset($_GET['login_success']) && $_GET['login_success'] === 'true') {
        echo "Đăng nhập thành công!";
    }
} else {
    // Nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
    header('Location: login.php');
    exit();
}
?>
