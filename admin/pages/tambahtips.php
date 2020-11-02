<?php 
include "config/koneksi.php"; 

?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Data Tips
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-lightbulb-o"></i>Kelola Data Tips</a></li>
        <li><a href="index.php?p=tambahtips"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data Tips</a></li>
      </ol>
    </section>
 <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-12">           
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Tips
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             <form method="POST" action="index.php?p=prosestambahtips" enctype="multipart/form-data" name="biodata"> 
              <input type='hidden' name='content_id' value="<?php echo $que['content_id']; ?>" class="form-control" readonly required>
              <input type='text' name='pengirim_berita' class="form-control" value="<?php echo $data['nama']; ?>"required readonly>
              <input type='date' name='tanggal_berita' class="form-control" required>
              <input type='text' name='judul_berita' class="form-control" required placeholder="Judul Artikel">
              <br>
                <textarea name="isi_berita" class="textarea"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <br><br>
                <input type='file' name='gambar' required>
                <br>

                <input name="Submit" type="submit" value="Submit" class="btn btn-primary btn-lg"/>
                <input name="batal" type="reset" value="Cancel" class="btn btn-danger btn-lg">          
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>