<?php
include "config/koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username']; 
$level = $_POST['level'];

$update = mysql_query("UPDATE user SET nama = '$nama', username = '$username', level = '$level' WHERE id_user = '$id_user'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="index.php?p=datauser"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>