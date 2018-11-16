<?php

session_start();

include ("koneksi/koneksi.php");
$id=$_POST['id_user'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$password=$_POST['password'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$status=$_POST['status'];
$agama=$_POST['agama'];
$tinggi_badan=$_POST['tinggi_badan'];
$berat_badan=$_POST['berat_badan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_identitas=$_POST['no_identitas'];
$alamat_praktek=$_POST['alamat_praktek'];
$jam_praktek=$_POST['jam_praktek'];
$tarif=$_POST['tarif'];
error_reporting(0);

$login =mysql_query("INSERT INTO User VALUES('',$id','$nama','$no_hp','$alamat','$password','$tempat_lahir','$tanggal_lahir','$status','$agama','$tinggi_badan','$berat_badan','$jenis_kelamin','$no_identitas','$alamat_praktek','$jam_praktek','$tarif')")or die(mysql_error());

$cek = mysql_num_rows($login);

if($cek==1){
	$_SESSION['nama']=$user;
	echo "<script>alert('Selamat datang administrator.');</script>";
	header("location:login.php");

}
else{
	
	echo "<script>alert('username atau password anda salah');</script>";

	echo "<script>location='data diri.php';</script>";
}

?>