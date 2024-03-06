<?php
session_start();
?>
<form action = "login.php" method="post">
    tên đăng nhập:<input type = "text" name="txtUserName"><br>
    mật khẩu: <input type="password" name="txtmatkhau"><br>
    <input type="btnsubmit" value="login">
</form>