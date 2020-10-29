<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

if (($user == 'ifupnyk' || $user == 'IFUPNYK') && $pass == '1995') {
	$_SESSION['user']=$user;
	$_SESSION['status']="login";
	header("location:home.php?");
}else{
	header("location:index.php?pesan=gagal");
}
?>
