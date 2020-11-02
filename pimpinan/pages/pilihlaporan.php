<?php 
include "config/koneksi.php"; 

?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-lightbulb-o"></i>Kelola Data User</a></li>
        <li><a href="index.php?p=tambahuser"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data User</a></li>
      </ol>
    </section>
 <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-12">           
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data User
              </h3>
              <!-- tools box -->
              
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             <form method="POST" action="pages/laporan.php" enctype="multipart/form-data" name="biodata"> 
              <b>Bulan</b> <br>
              <select name="bulan" class="form-control" required>
<option value="">Pilih Bulan</option>
<option value="01">Januari</option>
<option value="02">Februari</option>
<option value="03">Maret</option>
<option value="04">April</option>
<option value="05">Mei</option>
<option value="06">Juni</option>
<option value="07">Juli</option>
<option value="08">Agustus</option>
<option value="09">September</option>
<option value="10">Oktober</option>
<option value="12">November</option>
<option value="12">Desember</option>
</select>
              <b>Tahun</b><br>
              <select name="tahun" class="form-control" required>
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>&nbsp;&nbsp;&nbsp;
              
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