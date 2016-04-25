<?php
session_start();

include __DIR__ . '/../../c3.php';

?>

<!doctype html>
<html>
<head>
    <title>user - home</title>
</head>
<body>

You are logged in as:
<?=
    $_SESSION['username'];
?>
<br>
<a href="../logout.php">logout</a>

<hr>

<h1>hello user</h1>
<p>
    today's kitchen keypad code is: 9876
</p>
</body>
</html>