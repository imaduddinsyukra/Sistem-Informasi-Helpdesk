<?php
include "config/koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$id = $_GET['id'];
$tgl = date("Y-m-d");

$update = mysql_query("UPDATE trouble SET status = '1', tgl_solved = '$tgl' WHERE id_contact = '$id'");

if ($update){
?>
<script language="JavaScript">
alert('Data Berhasil Di Update');
document.location='index.php?p=datatrouble'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Di Update');
document.location='index.php?p=datatrouble'</script><?php }
?>