<?php
session_start();
$query = new mysqli("localhost","root","","logintoday");

$user = $_POST['user'];
$pass = $_POST['pass'];

$data = mysqli_query($query,"SELECT*FROM data where user='$user' AND pass='$pass';") or die(mysqli_error($query));

$cek = mysqli_num_rows($data);
// $cek2 = mysqli_fetch_array($data);
if ($cek>0) {
	$_SESSION['user']=$user;
	$_SESSION['status']="login";
	header("location:home.php?");
}else{
	header("location:index.php?pesan=gagal");
}
?>