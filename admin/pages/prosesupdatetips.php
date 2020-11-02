<?php
include "../config/koneksi.php";//sambung ke mysql

$id_berita=$_POST['id_berita'];
$pengirim_berita=$_POST['pengirim_berita'];
$tanggal_berita=$_POST['tanggal_berita'];
$judul_berita=$_POST['judul_berita'];
$isi_berita=$_POST['isi_berita'];
$nama_file = $_FILES['gambar']['tmp_name']; 
$file_upload = $_FILES['gambar']['name']; 
$file = str_replace (" ","_","$file_upload"); 
$folder = "gambar/$file"; 
  

if(copy("$nama_file","$folder"))
{ 
$update = mysql_query("UPDATE tbl_berita SET pengirim_berita = '$pengirim_berita', tanggal_berita = '$tanggal_berita' , judul_berita='$judul_berita',isi_berita='$isi_berita',  foto='$folder' WHERE id_berita = '$id_berita'");
}
if ($update){
//echo "sukses update data";
?>
<script language="JavaScript">
alert('Data Berhasil Di Update');
document.location='index.php?p=datatips'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Di Update');
document.location='index.php?p=datatips'</script><?php }
?>