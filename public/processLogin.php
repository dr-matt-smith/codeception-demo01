<?php
session_start();


// tring to login, so get rid of any exiting user ID
unset($_SESSION['username']);

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if(('user' == $username) && ('user' == $password)) {
	// store userame in SESSION superglobal
	$_SESSION['username'] = $username;

	$url = 'views/user_index.php';
	header("Location: $url");
	exit;
} else if (('admin' == $username) && ('admin' == $password)) {
	// store userame in SESSION superglobal
	$_SESSION['username'] = $username;

	$url ='views/admin_index.php';
	header("Location: $url");
	exit;

} else {
	$url ='views/public_loginError.php';
	header("Location: $url");
	exit;
}
