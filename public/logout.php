<?php
session_start();


// clear username from SESSIOn
$_SESSION['username'] = [];

$url ='views/public_index.php';
header("Location: $url");
exit;