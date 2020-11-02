<?php
include "config/koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']); 

$query = "insert into user(id_user, nama, username, password, level) values(NULL,'$nama','$username','$password','user')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Anda Berhasil Registrasi, Silahkan Login Untuk Melanjutkan');
document.location='index.php'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Inputan data gagal');
document.location='registrasi.php'</script><?php }
?>