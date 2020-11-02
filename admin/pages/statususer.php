<?php
include "config/koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$id_user = $_GET['id_user'];
$status = $_GET['status'];

if($status==1){

$update = mysql_query("UPDATE user SET status = '0' WHERE id_user = '$id_user'");
}if($status==0){

$update = mysql_query("UPDATE user SET status = '1' WHERE id_user = '$id_user'");
}

if ($update){
?>
<script language="JavaScript">
alert('Data Berhasil Di Update');
document.location='index.php?p=datauser'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Di Update');
document.location='index.php?p=datauser'</script><?php }
?>