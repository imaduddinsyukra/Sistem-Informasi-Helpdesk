<?php
include "config/koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$subjek =$_POST['subjek'];
$pesan = $_POST['pesan'];
$tgl = date("Y-m-d");

$query = "insert into trouble(nama, email, no_hp, subjek, pesan, status, tgl_lapor) values('$nama','$email','$no_hp','$subjek','$pesan','0','$tgl')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Terimakasih Atas Kiriman Yang Anda Berikan, Kami Akan Memproses Permintaan Anda Secepatnya');
document.location='index.php'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Kiriman Gagal');
document.location='index.php'</script><?php }
?>