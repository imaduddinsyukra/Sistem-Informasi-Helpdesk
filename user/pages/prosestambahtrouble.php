<?php 
include "../config/koneksi.php"; 
  
$id_user = $_POST['id_user'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$subjek =$_POST['subjek'];
$pesan = $_POST['pesan'];
 $tgl = date("Y-m-d");
//kondisi pada saat proses SIMPAN data, kondisi file upload 
 
 $sql = mysql_query("insert into trouble(id_user, nik, nama, email, no_hp, subjek, pesan, status, tgl_lapor) values('$id_user','$nik','$nama','$email','$no_hp','$subjek','$pesan','0','$tgl')"); 
if ($sql){
//echo "sukses update data";
?>
<script language="JavaScript">
alert('Data Berhasil Di Tambah');
document.location='index.php?p=tambahtrouble'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Di Tambah');
document.location='index.php?p=tambahtrouble'</script><?php }
?>