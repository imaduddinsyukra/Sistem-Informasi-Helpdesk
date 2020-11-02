<?php 
include "../config/koneksi.php"; 
  
$pengirim_berita=$_POST['pengirim_berita'];
$tanggal_berita=$_POST['tanggal_berita'];
$judul_berita=$_POST['judul_berita'];
$isi_berita=$_POST['isi_berita'];
$nama_file = $_FILES['gambar']['tmp_name']; 
$file_upload = $_FILES['gambar']['name']; 
$file = str_replace (" ","_","$file_upload"); 
$folder = "gambar/$file"; 
 
//kondisi pada saat proses SIMPAN data, kondisi file upload 
if(copy("$nama_file","$folder"))
{ 
 $sql = mysql_query("INSERT INTO tbl_berita  
           ( 
              id_berita, 
			  pengirim_berita,
			  tanggal_berita,
			  judul_berita,
			  isi_berita,
              foto
           ) 
 
           VALUES  
           (  
              NULL,
			  '$pengirim_berita', 
			  '$tanggal_berita', 
			  '$judul_berita',
			  '$isi_berita',
              '$folder' 
            )"); 
}
if ($sql){
//echo "sukses update data";
?>
<script language="JavaScript">
alert('Data Berhasil Di Tambah');
document.location='index.php?p=datatips'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Di Tambah');
document.location='index.php?p=datatips'</script><?php }
?>