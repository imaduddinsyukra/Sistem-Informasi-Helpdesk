<?php
error_reporting(0);
session_start();
require_once("config/koneksi.php");
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $cekuser = mysql_query("SELECT * FROM user WHERE username = '$username' and password='$password'");
  $jumlah = mysql_num_rows($cekuser);
  $hasil = mysql_fetch_array($cekuser);  

if($jumlah == 1 && $hasil['level'] == 'administrator'&& $hasil['status'] == '1') {
$_SESSION['username'] = $username;

?>
<script language="JavaScript">
	alert('Anda Berhasil Login'); 
	document.location='admin/index.php?p=home'</script><?php
	
}elseif($jumlah == 1 && $hasil['level']=='user'&& $hasil['status'] == '1') {
$_SESSION['username'] = $username;
?>
<script language="JavaScript">
	alert('Anda Berhasil Login'); 
	document.location='user/index.php?p=home'</script><?php


}elseif($jumlah == 1 && $hasil['level']=='pimpinan'&& $hasil['status'] == '1') {
$_SESSION['username'] = $username;
?>
<script language="JavaScript">
	alert('Anda Berhasil Login'); 
	document.location='pimpinan/index.php?p=home'</script><?php

}
elseif($jumlah == 1 && $hasil['level']=='teknisi'&& $hasil['status'] == '1') {
$_SESSION['username'] = $username;
?>
<script language="JavaScript">
	alert('Anda Berhasil Login'); 
	document.location='teknisi/index.php?p=home'</script><?php

} else
{
// jika login salah //
?>
 <script language="JavaScript">
	alert('Username atau password Anda salah'); 
	document.location='login.php'</script><?php
echo mysql_error() ;
}
?>