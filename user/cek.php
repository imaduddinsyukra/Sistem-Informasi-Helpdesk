<?php
  session_start();
  if(!isset($_SESSION['username'])) {
  header('location:../login.php'); }
  else { $username = $_SESSION['username']; }
  require_once("../config/koneksi.php");
  $query = mysql_query("SELECT * FROM admin WHERE username = '$username'");
  $hasil = mysql_fetch_array($query);
?>