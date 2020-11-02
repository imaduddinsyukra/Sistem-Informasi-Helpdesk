<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola Admin
        <small>Profile Admin</small>      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-user"></i>Kelola Admin</a></li>
        <li class="active"><a href="index.php?p=profile_admin"><i class="fa fa-bars"></i><i class="fa fa-user"></i>Profile Admin</a></li>
      </ol>
   </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<h4><i class="fa fa-user"></i> Profile Admin</h4>
<hr style="height:inherit" />
     <table border="0" align="center" rules="rows" >
<?php
include ("config/koneksi.php");
$username = $_SESSION['username']; 
$sqll="select * from user where username='$username'";
$resultt = mysql_query($sqll);
	if(mysql_num_rows($resultt) > 0){


while($data = mysql_fetch_array($resultt)){?>
       <tr>
         <th><div>Id User</div></th>
         <td>&nbsp;</td>
		 <td><div><?php echo $data['id_user'];?></div></td>
		 
         </tr>
         <tr>
         <th><div>Nama User</div></th>
         <td>&nbsp;</td>
         <td><div><?php echo $data['nama'];?></div></td>
         </tr>
         <tr>
         <th><div>Username</div></th>
         <td>&nbsp;</td>
         <td><div><?php echo $data['username'];?></div></td>
         </tr>
       <?php } ?>
     </table>
     <?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
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