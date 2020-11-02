<?php
include 'config/koneksi.php';
$id_user = $_GET['id_user']; //get the no which will updated
$queryy = mysql_query("SELECT * FROM user WHERE id_user = '$id_user'"); //get the data that will be updated
$que=mysql_fetch_array($queryy)

 ?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-lightbulb-o"></i>Kelola Data User</a></li>
        <li><a href="index.php?p=datauser"><i class="fa fa-fw fa-plus-circle"></i> Update Data User</a></li>
      </ol>
    </section>
 <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-12">           
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Update Data User
              </h3>
              <!-- tools box -->
              
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
             <form method="POST" action="index.php?p=prosesupdateuser" enctype="multipart/form-data" name="biodata"> 
              <input type='hidden' name='id_user' class="form-control" value="<?php echo $que['id_user']; ?>" required>
              <b>Nama</b> <br>
              <input type='text' name='nama' class="form-control" value="<?php echo $que['nama']; ?>" required>
              <b>Username</b><br>
              <input type='text' name='username' class="form-control" value="<?php echo $que['username']; ?>" required>
              <b>Level</b><br>
              <select name="level" class="form-control" required>
  <option value="-">-- Pilih Level --</option>
        <option value="pimpinan" <?php if($que['level'] == 'pimpinan') { echo 'selected'; } ?>>Pimpinan</option>  
        <option value="administrator" <?php if($que['level'] == 'administrator') { echo 'selected'; } ?>>Administrator</option> 
        <option value="user" <?php if($que['level'] == 'user') { echo 'selected'; } ?>>User</option> 
        <option value="teknisi" <?php if($que['level'] == 'teknisi') { echo 'selected'; } ?>>Teknisi</option>  
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