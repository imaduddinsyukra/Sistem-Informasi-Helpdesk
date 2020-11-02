<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Living World Help Desk</title>

  <meta name="description" content="Design - is a Premium HTML5 Responsive Templeate by Graygrids Team.">

  <meta name="keywords" content="Startup HTML template, Bootstrap Agency theme, html template, charity template, premium html template, one page template">

  <meta name="author" content="GrayGrids">

  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <!-- Bootstrap  -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- icon fonts font Awesome -->
  <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    
  <!-- Custom Styles -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Responsive Styles -->
  <link href="assets/css/responsive.css" rel="stylesheet">
  
  <!-- Normalize Styles -->
  <link href="assets/css/normalize.css" rel="stylesheet">

  <!-- Extras -->
  <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/lightbox.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.transitions.css">

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
  <body>
    <!-- Start Header Section -->
    <header id="header">
      <nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars fa-lg"></i>
            </button>
            <!-- logo here -->
            <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="" style="width: 75px"></a>
          </div>
          
          <!-- Start Navigation Menu -->
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
              <li class="active"><a href="#" onClick="history.back(-1)">Back</a></li>
            </ul>
          </div>
          <!-- End Navigation Menu -->
        </div>
      </nav>
    </header>
    <!-- End Header Section -->
  
    

    <!-- Start Services Section -->
    <section id="services">
      <div class="container">
       <br><br><br><br><br>
        <h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span></span> Tips</h1>
        <div class="row">
             <div class="rounded">
    <main class="container clear"> 
         <?php
          $id_berita=$_GET['id_berita'];
          include ("config/koneksi.php");
            $sqll = "SELECT * FROM tbl_berita where id_berita='$id_berita'"; 
          $resultt = mysql_query($sqll);
            if(mysql_num_rows($resultt) > 0){
          while($data = mysql_fetch_array($resultt)){?>
                  <h2><strong><?php echo $data['judul_berita'];?></strong></h2>
                  <div><br></div>
                  <div>Artikel ditulis pada tanggal <strong><?php echo $data['tanggal_berita'];?></strong>  oleh <strong><?php echo $data['pengirim_berita'];?></strong> </div>
                  <div><br><br></div>
                  <div align="center"><img src="admin/<?php echo $data['foto']; ?>" alt="" style="height: 300px"></div><br><br>
                  <?php echo $data['isi_berita'];?>
                  <?php } ?>
               <?php
          }else{
          echo 'Data not found!';
          echo mysql_error();
          }
          ?>
         <div> <br></div><div> <br></div><div> <br></div>
      <div id="comments">
      <h2>Comments</h2>
      <?php
        $id_berita=$_GET['id_berita'];
          $sql = "SELECT * FROM tbl_komentar where id_berita='$id_berita' order by id_komentar desc limit 6"; 
        $result = mysql_query($sql);
          if(mysql_num_rows($result) > 0){
        while($dta = mysql_fetch_array($result)){
      ?>
        <ul>
          <li>
            <article>
              <header>
                <address>
                by <b><?php echo $dta['nama_komentar'];?></b> on <?php echo $dta['tgl_komentar'];?>
              
              <div class="comcont">
                <p><?php echo $dta['isi_komentar'];?>.</p>
              </div>
            </article>
          </li>
          <?php } ?>
     <?php
}else{
echo 'Be The First!';
echo mysql_error();
}
?>
        </ul>
<br>
        <h2>Write A Comment</h2>


        <form role="form" action="commentproses.php" method="post">
        <input type="hidden" name="id_berita" id="name" class="from-control" value="<?php echo $id_berita;?>" readonly required>
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="nama_komentar" id="name" class="form-control" size="22" required="">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment <span>*</span></label>
            <textarea name="isi_komentar" id="comment" cols="25" rows="10" class="form-control" required=""></textarea>
          </div>
          <br>
          <div>
          <input name="Submit" type="submit" value="Submit" class="btn btn-primary btn-lg"/> &nbsp;&nbsp;<input name="batal" type="reset" value="Reset" class="btn btn-danger btn-lg">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>   
        </div>
      </div>
    </section>
    <!-- End Services Section-->
    
    
    
    <!-- Start Clients Section -->
    <section id="clients">
      <div class="container">
        <div class="row">
          <div id="logo-slider" class="owl-carousel owl-theme">
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->
    
    <!-- Start Connected Section -->
    <section id="connected">
      <div class="container">
        <div class="row">
          <h2 class="section-title wow fadeInUp" data-wow-delay=".2s">Stay Connected</h2>   
          <h3 class="discription wow fadeIn" data-wow-delay=".2s">Tetaplah Terhubung Dengan Kami, Agar Anda Tidak Ketinggalan Update Informasi Terbaru.</h3>
          <hr>
          <div class="connected-wrapper text-center">
            <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
              <div class="contact-item">
                <a href="#"><i class="fa fa-phone"></i></a>
                <h5>Customer Care</h5>
                <h4>0123 - 456 - 789</h4>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
              <div class="contact-item">
                <a href="#"><i class="fa fa-user"></i></a>
                <h5>Support Team</h5>
                <h4>support@name.com</h4>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
              <div class="contact-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <h5>Twitter</h5>
                <h4>@example.com</h4>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
              <div class="contact-item">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <h5>Facebook</h5>
                <h4>example.agency</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Connected Section -->

    <!-- Footer Section Start -->
    <footer id="footer">
      <div class="container">
          <div class="copyright text-center">
            <p><strong>Copyright &copy; 2018 Help Desk Living World IT Officer Division Pekanbaru</strong> All rights
    reserved. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <strong>Created by : </strong> <a href="">Radi</a></p>
          </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Scroll Top -->
    <div class="scroll-top" data-spy="affix" data-offset-top="300">
      <a href="#header"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- Scroll End -->

    
    <!-- Include jquery.min.js plugin -->
    <script src="assets/js/jquery-min.js"></script>
    <!-- Include Bootstrap plugin -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- One page Nav plugin -->    
    <script src="assets/js/jquery.nav.js"></script>
    <!-- Include Bootstrap plugin -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- Include wow plugin -->
    <script src="assets/js/wow.js"></script>
    <!-- Include mixitup plugin -->
    <script src="assets/js/jquery.mixitup.js"></script>
    <!-- ScrollTop -->
    <script src="assets/js/lightbox.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/js/scroll-top.js"></script>
    <!-- Smooth Scroll -->
    <script src="assets/js/smooth-scroll.js"></script>
    <!-- preset js -->
    <script src="assets/js/style.changer.js"></script>
    <!-- Modernizr js -->
    <script src="assets/js/modernizr-2.8.0.main.js"></script>
    <!-- Main js -->
    <script src="assets/js/main.js"></script>
      
  </body>
</html>