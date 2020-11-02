<?php
include "config/koneksi.php";
$id_berita=$_POST['id_berita'];
$tgl_komentar = date("Y-m-d");
$nama_komentar = $_POST['nama_komentar'];
$isi_komentar = $_POST['isi_komentar'];

$query = "insert into tbl_komentar(id_komentar, id_berita, tgl_komentar, nama_komentar, isi_komentar) values(NULL,'$id_berita','$tgl_komentar','$nama_komentar','$isi_komentar')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Terimakasih Atas Komentar Yang Anda Berikan');
document.location='rincianberita.php?id_berita=<?php echo $id_berita;?>'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Kiriman Gagal');
document.location='rincianberita.php?id_berita=<?php echo $id_berita;?>'</script><?php }
?>