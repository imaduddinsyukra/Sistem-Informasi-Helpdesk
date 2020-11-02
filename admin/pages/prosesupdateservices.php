<?php
include "config/koneksi.php";
$content_id = $_POST['content_id'];
$content_title = $_POST['content_title'];
$page_content = $_POST['page_content'];


$update = mysql_query("UPDATE content SET content_title = '$content_title', page_content = '$page_content' WHERE content_id = '$content_id'");

if ($update){
//echo "sukses update data";
?>
<script language="JavaScript">
alert('Data Berhasil Di Update');
document.location='index.php?p=dataservices'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Di Update');
document.location='index.php?p=dataservices'</script><?php }
?>