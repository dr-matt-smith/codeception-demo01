<?php
session_start();

include __DIR__ . '/../../c3.php';


?>

<!doctype html>
<html>
<head>
    <title>admin - home</title>
</head>
<body>

You are logged in as:
<?=
    $_SESSION['username'];
?>
<br>
<a href="../logout.php">logout</a>

<hr>

<h1>hello admin user</h1>
<p>
    you can now delete everything!
</p>
</body>
</html>