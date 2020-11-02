<?php 
include "config/koneksi.php"; 

?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Lapor Troubleshoot
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-lightbulb-o"></i>Riwayat Data Lapor Troubleshoot</a></li>
        <li><a href="index.php?p=tambahtrouble"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data Lapor Troubleshoot</a></li>
      </ol>
    </section>
 <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-12">           
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Lapor Troubleshoot
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             <?php
              include ("../config/koneksi.php");
              $username = $_SESSION['username']; 
$que=mysql_query("select * from user where username='$username'");
$data = mysql_fetch_array($que);
?>
             <form method="POST" action="index.php?p=prosestambahtrouble" enctype="multipart/form-data" name="biodata"> 
              <input type='hidden' name='id_user' value="<?php echo $data['id_user']; ?>" class="form-control" readonly required>
              <b>NIK <br>
              <input type='text' name="nik" class="form-control" required>
              Nama Pelapor <br>
              <input type='text' name="nama" class="form-control" required>
              Email <br>
              <input type='email' name="email" class="form-control" required>
              No HP <br>
              <input type='text' name="no_hp" class="form-control" required>
              Subjek <br>
              <input type='text' name="subjek" class="form-control" required>
              Keterangan </b>
              <br>
                <textarea name="pesan" class="form-control"
                          style="width: 100%; height: 200px"></textarea>
                          <br>

                <input name="Submit" type="submit" value="Submit" class="btn btn-primary btn-lg"/>
                <input name="batal" type="reset" value="Cancel" class="btn btn-danger btn-lg">          
              </form>
            </div>
          </div>
          <div class="box-body">
<h4> Riwayat Data Lapor Troubleshoot </h4>
<br>
<div class="table-responsive">
       <?php
       $id=$data['id_user'];
  $query = "select * from trouble where id_user = '$id' ORDER BY id_contact DESC"; 
  $sql = mysql_query ($query); 
  while ($hasil = mysql_fetch_array ($sql)) {
     $nama = $hasil['nama'];  
   $email = $hasil['email']; 
   $subjek = $hasil['subjek']; 
   $pesan = $hasil['pesan'];
   $tgl_lapor = $hasil['tgl_lapor'];

   //    //tampilkan arsip berita 
   
   echo "<i class='fa fa-warning'></i> <b>$judul_berita</b>"; 
   echo "<small><b>dikirim oleh $nama</b> dengan email <b>$email</b><br> dengan subjek <b>$subjek</b> pada tanggal $tgl_lapor</small><br>  "; 
   echo "$pesan</b>  
     <br>
<br>" ;
   ?>
<?php
         if($hasil['status']=='0'){
          ?><?php echo "<button type='button' class='btn btn-danger active'>Belum Ditangani</button>";?>
         <?php 
          }else{
            ?>
            <?php 
            echo "<button type='button' class='btn btn-success disabled'>Telah Ditangani</button>" ;
          } ?><br><br><br>
   <?php
  } 
  ?> 
</div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>