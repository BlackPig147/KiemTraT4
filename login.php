<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username === 'admin' && $password === 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;
        header('Location: student-list.php?login_success=true'); 
        exit();
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
?>

<form action="login.php" method="post">
    Tên đăng nhập: <input type="text" name="txtUsername"><br>
    Mật khẩu: <input type="password" name="txtpassword"><br>
    <input type="submit" value="Đăng nhập">
</form>
