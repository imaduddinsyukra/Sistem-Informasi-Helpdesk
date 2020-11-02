 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Tips
        <small>Data Tips</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-lightbulb-o"></i> Kelola Tips</a></li>
        <li class="active"><a href="index.php?p=datatips"><i class="fa fa-fw fa-database"></i>Data Tips</a></li>
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<?php
include ("config/koneksi.php");
$username = $_SESSION['username']; 
$que=mysql_query("select * from user where username='$username'");
$data = mysql_fetch_array($que);
$level=$data['nama'];
?>
<h4><i class="fa fa-lightbulb-o"></i> Data Tips </h4>
<br>
<h4><a href="index.php?p=tambahtips" class='btn btn-success btn-grad'>Tambah Tips</a></h4>
<hr style="height:inherit" />
<div class="table-responsive">
       <?php
  $query = "select * from tbl_berita where pengirim_berita='$level' ORDER BY id_berita DESC"; 
  $sql = mysql_query ($query); 
  while ($hasil = mysql_fetch_array ($sql)) {
     $id_berita = $hasil['id_berita'];  
   $tanggal_berita = $hasil['tanggal_berita']; 
   $bidang_subjek = $hasil['bidang_subjek']; 
   $judul_berita = $hasil['judul_berita'];
   $kategori_berita = $hasil['kategori_berita'];
   $gambar = $hasil['foto'];  
   $isi_berita = $hasil['isi_berita']; 

   //    //tampilkan arsip berita 
   
   echo "<i class='fa fa-lightbulb-o'></i> <b>$judul_berita</b><br>"; 
   echo "<small><b>ditulis oleh $level</b> tanggal penulisan berita <b>$tanggal_berita</b><br></small>"; 
   echo "<p align='center'><img src='$gambar' width='300' height='150'/></p> <br>";
   echo "$isi_berita</b>  
     <br><br>";
	echo "<a 
href='index.php?p=updatetips&id_berita=$id_berita' class='btn btn-primary btn-grad'><b>Edit</b></a> </font> <b>| </b>"; 
   echo "<a href='index.php?p=hapustips&id_berita=$id_berita' class='btn btn-danger btn-grad' onClick='return confirm('Apakah Anda Yakin Hapus Data?')'><b>Delete</b></font></a>
<br><br><br>" ;
   
  } 
  ?> 
</div>
    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->