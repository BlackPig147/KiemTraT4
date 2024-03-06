<?php
session_start();
?>
<form action = "login.php" method="post">
    Username:<input type = "text" name="txtUserName"><br>
    Password: <input type="password" name="txtpassword"><br>
    <input type="btnsubmit" value="login">
</form>