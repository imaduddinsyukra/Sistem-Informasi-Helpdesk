<?php
include "config/koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']); 
$level = $_POST['level'];

$query = "insert into user(id_user, nama, username, password, level) values(NULL,'$nama','$username','$password','$level')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Ditambahkan');
document.location='index.php?p=datauser'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Inputan data gagal');
document.location='index.php?p=tambahuser'</script><?php }
?>