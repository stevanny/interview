<?php 
include 'koneksi/koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM User WHERE nama='$nama'")or die(mysql_error());
 
header("location:tampil.php?");
?>