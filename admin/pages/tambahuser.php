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
             <form method="POST" action="index.php?p=prosestambahuser" enctype="multipart/form-data" name="biodata"> 
              <b>Nama</b> <br>
              <input type='text' name='nama' class="form-control" required>
              <b>Username</b><br>
              <input type='text' name='username' class="form-control" required>
              <b>Password</b><br>
              <input type='password' name='password' class="form-control" required minlength="8">
              <b>Level</b><br>
              <select name="level" class="form-control" required>
  <option value="-">-- Pilih Level --</option>
        <option value="pimpinan">Pimpinan</option>  
        <option value="administrator">Administrator</option> 
        <option value="user">User</option> 
        <option value="teknisi">Teknisi</option>  
  </select>
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