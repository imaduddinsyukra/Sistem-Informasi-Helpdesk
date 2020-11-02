 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Trouble
        <small>Data Trouble</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-warning"></i> Kelola Trouble</a></li>
        <li class="active"><a href="index.php?p=datatrouble"><i class="fa fa-fw fa-database"></i>Data Trouble</a></li>
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<h4> Data Trouble </h4>
<br>
<div class="table-responsive">
       <?php
  $query = "select * from trouble ORDER BY id_contact DESC"; 
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
          ?><a href="index.php?p=gantistatus&id=<?php echo $hasil['id_contact']; ?>" onClick="return confirm('Apakah Anda Yakin Mengganti Status Menjadi Telah Ditangani, Terhitung Tanggal Hari Ini?')" ><?php echo "<button type='button' class='btn btn-danger active'>Belum Ditangani</button>";?></a>
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->