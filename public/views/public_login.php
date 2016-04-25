<?php
include __DIR__ . '/../../c3.php';

?>
<!DOCTYPE html>
<html lang="en"><head><title>login</title></head>
<body>
<h3>Login</h3>
<form name="form1" method="POST" action="../processLogin.php">
    <p>
        username <input type="text" name="username" >
    </p>

    <p>
        password <input type="password" name="password">
    </p>
    <p>
        <input type="submit" value="Login" name="login" id="login">
    </p>
</form></body></html>