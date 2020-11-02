<?php
include "config/koneksi.php";
$id_user = $_GET['id_user'];
$query=mysql_query("delete from user where id_user='$id_user'");
if($query){
$_SESSION['id_user'] = "$id_user";
?>
<script>document.location.href="index.php?p=datauser"</script>
<?php
}else{
echo "Pesan error: ".mysql_error();
?>

<script>document.location.href="index.php?p=datauser"</script>
<?php
}
?>