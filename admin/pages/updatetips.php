<?php
  include("config/koneksi.php");  
  ?>
  <?php
$username = $_SESSION['username']; 
$que=mysql_query("select * from user where username='$username'");
$data = mysql_fetch_array($que);

$id_berita = $_GET['id_berita']; //get the no which will updated
$queryy = mysql_query("SELECT * FROM tbl_berita WHERE id_berita = '$id_berita'"); //get the data that will be updated
$que=mysql_fetch_array($queryy)

?>

  
  
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Data Tips
        <small>Update Data Tips</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-lightbulb-o"></i>Kelola Data Tips</a></li>
        <li class="active"><a href="#"><i class="fa fa-fw fa-plus-circle"></i>Update Data Tips</a></li>
      </ol>
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                            
 <form method="POST" action="index.php?p=prosesupdatetips" enctype="multipart/form-data" name="biodata"> 
              <input type='hidden' name='id_berita' value="<?php echo $que['id_berita']; ?>" class="form-control" readonly required>
              <input type='text' name='pengirim_berita' class="form-control" value="<?php echo $data['nama']; ?>"required readonly>
              <input type='date' name='tanggal_berita' class="form-control" required value="<?php echo $que['tanggal_berita']; ?>">
              <input type='text' name='judul_berita' class="form-control" value="<?php echo $que['judul_berita']; ?>"required placeholder="Judul Artikel">
              <br>
                <textarea name="isi_berita" class="textarea"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $que['isi_berita']; ?></textarea>
                <br><br>
                <input type='file' name='gambar' required>
                <br>

                <input name="Submit" type="submit" value="Submit" class="btn btn-primary btn-lg"/>
                <input name="batal" type="reset" value="Cancel" class="btn btn-danger btn-lg">          
              </form>
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