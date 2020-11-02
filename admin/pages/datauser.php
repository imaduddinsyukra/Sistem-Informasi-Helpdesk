<?php 
include "config/koneksi.php"; 
?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Services
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-user-secret"></i> Kelola Tips</a></li>
        <li><a href="index.php?p=dataservices"><i class="fa fa-fw fa-database"></i> Data Services</a></li>
      </ol>
    </section>
 <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-12">           
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              </h3>
              <!-- tools box -->
              <?php
include ("../config/koneksi.php");
?>

<?php

  $tampil=mysql_query("select * from user");
  ?>

  <div class="table-responsive">
  <a href="index.php?p=tambahuser" > <i class="fa fa-fw fa-plus"></i> <b>Tambah User</b></a><br><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th rowspan="2"><p align="center">No</p></td>
                        <th rowspan="3"><p align="center">Nama</p></td>
                        <th rowspan="3"><p align="center">Username</p></td>
                        <th rowspan="3"><p align="center">Level</p></td>
                        <th rowspan="3"><p align="center">Status</p></td>
                        <th colspan="3"><p align="center">Pilihan</p></td>
                                        </tr>
                        <tr>
                            <th><p align="center">Edit</p></th>
                            <th><p align="center">Reset Password</p></th>
                            <th><p align="center">Hapus</p></th>
                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $no=1;
                      while($dt=mysql_fetch_array($tampil)){
                                    ?>
                                        <tr>
                                              <td><?php echo $no++;?></td>
                        <td><?php echo $dt['nama'];?></td>
                        <td><?php echo $dt['username'];?></td>
                        <td><?php echo $dt['level'];?></td>
                        <td>
                        <?php
         if($dt['status']=='0'){
          ?><a href="index.php?p=statususer&id_user=<?php echo $dt['id_user'];?>&status=<?php echo $dt['status'];?>" onClick="return confirm('Apakah Anda Yakin Mengganti Status Menjadi Aktif?')" ><?php echo "<button type='button' class='btn btn-danger active'>Tidak Aktif</button>";?></a>
         <?php 
          }else{
            ?>
            <a href="index.php?p=statususer&id_user=<?php echo $dt['id_user'];?>&status=<?php echo $dt['status'];?>" onClick="return confirm('Apakah Anda Yakin Mengganti Status Menjadi Tidak Aktif?')" ><?php echo "<button type='button' class='btn btn-success active'>Aktif</button>" ;
          } ?><br><br><br>
  </td> 
                        <td><div align="center"><a href="index.php?p=updateuser&id_user=<?php echo $dt['id_user']; ?>" > <i class="fa fa-fw fa-pencil"></i></a></div></td>
                        <td><div align="center"><a href="index.php?p=resetuser&id_user=<?php echo $dt['id_user'];?>&username=<?php echo $dt['username'];?>" onClick="return confirm('Apakah Anda Yakin Mereset Password?')" ><i class="fa fa-fw fa-undo"></i></div></td>
                        <td><div align="center"><a href="index.php?p=hapususer&id_user=<?php echo $dt['id_user'];?>&username=<?php echo $dt['username'];?>" onClick="return confirm('Apakah Anda Yakin Akan Menghapus User Ini?')" ><i class="fa fa-fw fa-trash"></i></div></td>
                        
                    </tr>
        <?php
  }
  ?>
  </tbody>
              </table>
                        </div>
            </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>