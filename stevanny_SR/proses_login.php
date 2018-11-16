<?php

session_start();
include ("koneksi/koneksi.php");
$user = $_POST['email'];
$password = $_POST['password'];

$login =mysql_query("Select * from User WHERE email= '$user' and password= '$password'")or die(mysql_error());
$cek = mysql_num_rows($login);

if($cek==1){
	$_SESSION['user']=$user;
	echo "<script>alert('Selamat datang administrator.');</script>";
	header("location:tampil.php");

}
else{
	
	echo "<script>alert('username atau password anda salah');</script>";

	echo "<script>location='login.php';</script>";
}

?>