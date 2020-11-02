<?php 
include "config/koneksi.php"; 
$queryy = mysql_query("SELECT * FROM content WHERE content_id = '5'"); //get the data that will be updated
$que=mysql_fetch_array($queryy)

?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        About Help Desk
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?p=home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php?p=updateabout"><i class="fa fa-pencil"></i> Update About Help Desk</a></li>
      </ol>
    </section>
 <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-md-12">           
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Update About Help Desk
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
              <form method="POST" action="index.php?p=prosesupdateabout">
              <input type='hidden' name='content_id' value="<?php echo $que['content_id']; ?>" class="form-control" readonly required>
                <textarea name="page_content" class="textarea"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $que['page_content']; ?></textarea>

                <button type="submit" name="submit" class="btn btn-primary btn-lg">Update</button>          
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>