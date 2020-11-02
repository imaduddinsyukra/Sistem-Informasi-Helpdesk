<?php
include "../config/koneksi.php";
$id_berita = $_GET['id_berita'];
$query=mysql_query("delete from tbl_berita where id_berita='$id_berita'");
if($query){
$_SESSION['id_berita'] = "$id_berita";
?>
<script language='javascript'> 
            alert('Data Berhasil Dihapus'); 
            window.open('index.php?p=datatips','_top') 
         </script>
<?php
}else{
echo "Pesan error: ".mysql_error();
?>

<script language='javascript'> 
            alert('Data Gagal Dihapus'); 
            window.open('index.php?p=datatips','_top') 
         </script>
<?php
}
?>