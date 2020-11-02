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

  $tampil=mysql_query("select * from content limit 4");
  ?>

  <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th rowspan="2"><p align="center">No</p></td>
                        <th rowspan="2"><p align="center">Services</p></td>
                        <th rowspan="2"><p align="center">Keterangan</p></td>
                        <th colspan="1"><p align="center">Pilihan</p></td>
                                        </tr>
                        <tr>
                            <th><p align="center">Edit</p></th>
                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      $no=1;
                      while($dt=mysql_fetch_array($tampil)){
                                    ?>
                                        <tr>
                                              <td><?php echo $no++;?></td>
                        <td><?php echo $dt['content_title'];?></td>
                        <td><?php echo $dt['page_content'];?></td>
                        <td><div align="center"><a href="index.php?p=updateservices&id=<?php echo $dt['content_id']; ?>" > <i class="fa fa-fw fa-pencil"></i></a></div></td>
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