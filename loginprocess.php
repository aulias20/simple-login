<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'admin' && $pass == '123') {
	$_SESSION['status']="login";
	header("location:home.php?");
}else{
	header("location:index.php?pesan=gagal");
}
?>
