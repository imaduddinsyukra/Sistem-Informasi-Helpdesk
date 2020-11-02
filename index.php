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
							<li class="active"><a href="#header">Home</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#blog">Tips</a></li>
							<!-- <li><a href="#testimonial">Testimonial</a></li> -->
						<!-- 	<li><a href="#why-chose">why</a></li>
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#team">Team</a></li> -->
							<li><a href="#contact">Tell Us</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
					<!-- End Navigation Menu -->
				</div>
			</nav>
		</header>
		<!-- End Header Section -->

		<!-- Start Intro Section -->
		<section id="intro" class="section-intro">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="main-text">
							<h1 class="wow fadeInUp"><span><font color='#a1aa01'>Living World</font></span> - Help Desk</h1>
							<h2 class="wow fadeInUp" data-wow-delay=".7s">Solve Your Problem, Everytime, Everywhere...</h2>
							<div class="wow fadeInUp" data-wow-delay="1.5s"><a onClick="smoothScr.anim('services')" class="btn btn-border btn-lg"><i class="fa fa-spinner fa-spin"></i> Explore</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Intro Section -->

		<!-- Start Services Section -->
		<section id="services">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Our</span> Services</h1>
				<div class="row">
				 <?php
include "config/koneksi.php";
$a = "SELECT * FROM content limit 4";
$b = mysql_query($a);
if (mysql_num_rows($b) > 0) {
    while ($c = mysql_fetch_array($b)) {?>
				         	<div class="col-sm-6 col-md-3 wow fadeInUp">
						<div class="service-box">
							<div class="content">
								<div class="icon-wrapper">
								<i class="fa fa-leaf"></i>
								</div>
								<h2><?php echo $c['content_title']; ?></h2>
								<p><?php echo $c['page_content']; ?></p>
							</div>
						</div>
					</div>


				            <?php }?>

				     <?php
} else {
    echo 'Data not found!';
    echo mysql_error();
}
?>
				</div>
			</div>
		</section>
		<!-- End Services Section-->

		<!-- Start About Us Section -->
		<section id="about" class="about-section">
			<div class="container">
			<br><br>
			<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>About</span> <!-- Us --></h1>
				<div class="row">
					<div id="slide" class="owl-carousel">
						<div class="item">
								<div align="center">
								<br><br><br><br><br>
								<?php
include "config/koneksi.php";
$aa = "SELECT * FROM content where content_id='5'";
$bb = mysql_query($aa);
if (mysql_num_rows($bb) > 0) {
    while ($cc = mysql_fetch_array($bb)) {?>
								<p><?php echo $cc['page_content']; ?></p>
				            <?php }?>

				     <?php
} else {
    echo 'Data not found!';
    echo mysql_error();
}
?>
			<br><br><br><br><br><br><br>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- End About Us Section -->


	<!-- Start Blog Section -->
		<section id="blog">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span><TABLE></TABLE></span>Tips</h1>
				<div class="row">
					<div id="blog-slider" class="owl-carousel owl-theme">
					<?php
include "config/koneksi.php";
$sqll = "SELECT * FROM tbl_berita order by id_berita desc limit 6";
$resultt = mysql_query($sqll);
if (mysql_num_rows($resultt) > 0) {
    while ($data = mysql_fetch_array($resultt)) {?>
						<div class="item wow fadeInLeft" data-wow-delay="0.4s">
							<div class="blog-wrapper">
								<div id="gallery" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<img src="admin/<?php echo $data['foto']; ?>" alt="" style="width: 500px;height: 200px">
										</div>
									</div>
								</div>
								<div class="content">
									<h3><?php echo $data['judul_berita']; ?></h3>
									<p><?php echo substr($data['isi_berita'], 0, 50); ?>.</p>
									<a href="rincianberita.php?id_berita=<?php echo $data['id_berita']; ?>" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: <?php echo $data['tanggal_berita']; ?></p>
								</div>
							</div>
						</div>
						<?php }?>

     <?php
} else {
    echo 'Data not found!';
    echo mysql_error();
}
?>
						<!-- <div class="item wow fadeInUp" data-wow-delay="0.4s">
							<div class="blog-wrapper">
								<img src="assets/img/blog/blog-02.jpg" alt="">
								<div class="content">
									<h3>Featured Image Blog Post</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item wow fadeInRight" data-wow-delay="0.4s">
							<div class="blog-wrapper">
								<div class="video">
									<iframe src="//player.vimeo.com/video/117934677?color=ea6a47title=0byline=0portrait=0badge=0" width="365" height="268" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
								<div class="content">
									<h3>Video BLog Post</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item wow fadeIn">
							<div class="blog-wrapper">
								<img src="assets/img/blog/blog-04.jpg" alt="">
								<div class="content">
									<h3>Blog Post With Slide</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-wrapper">
								<img src="assets/img/blog/blog-05.jpg" alt="">
								<div class="content">
									<h3>Blog Post With Slide</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blog-wrapper">
								<img src="assets/img/blog/blog-06.jpg" alt="">
								<div class="content">
									<h3>Blog Post With Slide</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
									<a href="#" class="redmore">Read More +</a>
								</div>
								<div class="blog-footer">
									<p>published: 22 january 2014</p>
									<span><i class="fa fa-comments"></i>30 Comments</span>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Section -->


		<!-- Start Contact Section -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>Tell US</span> Your Problem</h1>
					<div class="row">
						<div class="contact-form">
								<div class="col-sm-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
									<a href="login.php"><button type="submit" id="submit" class="btn btn-common">Login First</button></a>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Section -->

		<!-- Start Clients Section -->
		<section id="clients">
			<div class="container">
				<div class="row">
					<div id="logo-slider" class="owl-carousel owl-theme">
						<div class="item">
							<a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo2.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo3.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo4.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo5.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo2.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo3.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo4.png" alt="" style="height: 50px"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/logo5.png" alt="" style="height: 50px"></a>
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
								<h4>0761 6267 06100</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="#"><i class="fa fa-user"></i></a>
								<h5>Support Team</h5>
								<h4>lw.pekanbaru@gmail.com</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="https://twitter.com/livingworld.pbr"><i class="fa fa-twitter"></i></a>
								<h5>Twitter</h5>
								<h4>@livingworld.pbr</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="contact-item">
								<a href="https://web.facebook.com/livingworld.pbr/"><i class="fa fa-facebook"></i></a>
								<h5>Facebook</h5>
								<h4>@livingworld.pbr</h4>
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
						<p><strong>Copyright &copy; 2018 <a href="www.kampus-programmer.com/"> Kampus Programmer</a></strong> All rights
    reserved. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <strong>Created by : </strong> <a href="https://www.facebook.com/bradiano" target="blank">Radi</a></p>
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