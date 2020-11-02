<?php
include "../config/koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$id_user = $_GET['id_user'];
$password = md5($_GET['username'].'12345'); 

$update = mysql_query("UPDATE user SET password = '$password' WHERE id_user = '$id_user'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="index.php?p=datauser"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>