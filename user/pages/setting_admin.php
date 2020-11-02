<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kelola User
        <small>Profile User</small>      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-user"></i> Kelola User</a></li>
        <li class="active"><a href="#"><i class="fa fa-gears"></i> Setting User</a></li>
      </ol>
   </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<?php
include 'config/koneksi.php';
$username = $_GET['username']; //get the no which will updated
$queryy = mysql_query("SELECT * FROM user WHERE username = '$username'"); //get the data that will be updated
$que=mysql_fetch_array($queryy)

 ?>
<table width="100" align="center">
  <tr>
  <td>
<h4><i class="fa fa-user"></i> Setting User</h4>
<hr style="height:inherit" />
</td>
</tr>
<tr>
<td> 
<form action="index.php?p=setting_adminproses" method="post">
       <br />
       <table width="525" border="0">  
             <input type='hidden' name='id_user' value="<?php echo $que['id_user']; ?>" class="form-control"/>     
       <tr> 
       <td width="265"><label>Nama User</label></td>
           <td width="14">&nbsp;</td>
           <td width="232"> 
      <input type='text' name='nama' value="<?php echo $que['nama']; ?>" class="form-control"/> 
        </td> 
        </tr> 
 
<tr> 
   <td width="265"><label>Username</label></td>
           <td width="14">&nbsp;</td>
           <td width="232">  
      <input type='text' name='username' value="<?php echo $que['username']; ?>" class="form-control"/> 
   </td> 
</tr> 
 
<tr> 
   <td width="265"><label>Password</label></td>
           <td width="14">&nbsp;</td>
           <td width="232"> 
      <input type='password' name='password' id="pw1" class="form-control" minlength="8" required /> 
   </td> 
</tr> 
<tr> 
   <td width="265"><label>Ulangi Password</label></td>
           <td width="14">&nbsp;</td>
           <td width="232"> 
      <input type='password' name='ulangipassword' id="pw2" class="form-control" minlength="8" required /> 
   </td> 
</tr> 


 
 
<tr>
       <td>&nbsp;</td></tr>
       <tr>
       <td>&nbsp;</td>
       <td colspan="2" align="left">&nbsp;&nbsp;&nbsp;<input name="Submit" type="submit" value="Edit" class="btn btn-primary btn-lg"/></td>
       </tr>
       </table>
     </form>
      </td>
      </tr>
      </table>
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
    <script type="text/javascript">
    window.onload = function () {
        document.getElementById("pw1").onchange = validatePassword;
        document.getElementById("pw2").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("pw2").value;
    var pass1=document.getElementById("pw1").value;
    if(pass1!=pass2)
        document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("pw2").setCustomValidity('');
    }
</script>