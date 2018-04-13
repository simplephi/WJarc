
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>JAR Computindo</title>
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">

		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS
		================================================== -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/baru/css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/baru/css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/baru/css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/baru/css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/baru/css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/baru/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/baru/css/main.css">
		
		 <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/image/logo.png">

		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url();?>/assets/baru/js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body"><img src="<?php echo base_url();?>/assets/image/logo.png" width="100" height="50" alt="Our Clients"></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Beranda</a></li>
                        <li><a href="#service">Layanan</a></li>
                        <li><a href="#portfolio">Proyek</a></li>
                        <li><a href="#testimonials">Team</a></li>
                        <!--li><a href="#price">Harga</a></li-->
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

		<main class="site-content" role="main">

        <!--
        Home Slider
        ==================================== -->

		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">Code</h2>
                                <span class="animated fadeInDown">Coding Is Our Live</span>
                                <!--a href="#" class="btn btn-blue btn-effect">Join US</a-->
                            </div>
                        </div>

					</div>

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>JARC</h2>
                                <span>Team is Our Family</span>
                                <!--a href="#" class="btn btn-blue btn-effect">Join US</a-->
                            </div>
                        </div>

					</div>

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Developer</h2>
                                <span>Improve Our System</span>
                                <!--a href="#" class="btn btn-blue btn-effect">Join US</a-->
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!--
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->

                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>


				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>

        <!--
        End Home SliderEnd
        ==================================== -->

			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>Pekerjaan Yang Telah Dilakukan</h3>
								<div id="works">

                  <?php
                  $no4=1;
                  foreach ($pengumuman as $key4) {

                    $id4=$key4->id_pengumuman;

                ?>

                	<div class="work-item">
										<p><?php echo $key4->judul; ?></p>
									</div>

                  <?php
                }
                  ?>

								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Selamat Datang di Website Kami</h3>
						     	 <div class="message-body">
									<img src="<?php echo base_url();?>/assets/baru/img/1.jpg" class="pull-left" alt="member">
						       		<p>JARC merupakan sebuah perusahaan yang bergerak pada bidang teknologi dengan tujuan untuk memajukan industri ke berbagai bidang</p>
						     	 </div>
						       	<a href="#" class="btn btn-border btn-effect pull-right">Read More</a>
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->


			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Pelayanan</h2>
							<p class="wow animated bounceInRight">Indikator Pekerjaan Kami</p>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>Aplikasi</h3>
								<p>Kami memberikan layanan terbaik dengan dukungan kelas atas </p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								<h3>Dokumentasi Dengan Baik</h3>
								<p>Memberikan hasil hasil terbaik dunia </p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>Design UI/UX</h3>
								<p>Design yang menarik dan mudah dipahami oleh pengguna </p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>

								<h3>Keamanan Sistem</h3>
								<p>Keamanan menjadi yang terbaik di tangan kami </p>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- end Service section -->

			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Fitur Proyek</h2>
							<p>Beberapa fitur-fitur proyek yang diinginkan</p>

            </div>


						<ul class="project-wrapper wow animated fadeInUp">
              <?php
                   $no=1;
                    foreach ($galeri as $key3){

                     $id=$key3->id_galeri;

               ?>

							<li class="portfolio-item">
								<img src="<?php echo base_url();?>assets/galeri/<?php echo $key3->gambar;?>"  class="img-responsive" alt="<?php echo $key3->ket_galeri;?>">
								<figcaption class="mask">
									<h3><?php echo $key3->galeri;?></h3>

								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="<?php echo $key3->galeri;?>" data-fancybox-group="works" href="<?php echo base_url();?>assets/galeri/<?php echo $key3->gambar;?>"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>

              <?php
                  }
              ?>

						</ul>
            <p><?php echo $links; ?></p>
					</div>
				</div>

			</section>
			<!-- end portfolio section -->

			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">

							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Anggota Tim </h2>
							</div>

							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="<?php echo base_url();?>/assets/baru/img/1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Natalis Ransi</span>
										<p>Merupakan CEO JAR Computindo. Sebagai Programmer dan Analis Sistem pada JARC </p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="<?php echo base_url();?>/assets/baru/img/2.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Siti Hartinah Indrianti</span>
										<p>Sebagai Analis Sistem dalam Pembuatan Dokumentasi Sistem </p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="<?php echo base_url();?>/assets/baru/img/4.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Muhammad Sahlan</span>
										<p>Sebagai Designer</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->

			<!-- Price section -->
			<!--section id="price">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Price</h2>
							<p>Our price for your company</p>
						</div>

						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Silver</span>
								<div class="value">
									<span>$</span>
									<span>24,35</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
							<div class="price-table featured text-center">
								<span>Gold</span>
								<div class="value">
									<span>$</span>
									<span>50,00</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
							<div class="price-table text-center">
								<span>Diamond</span>
								<div class="value">
									<span>$</span>
									<span>123,12</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</section-->
			<!-- end Price section -->

			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">

							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Ikuti Kami</h2>
								<p>Tekan Tombol Untuk Melihat Kami Lebih Dalam</p>
							</div>

							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
							</ul>

						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->

			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Kontak</h2>
							<p>Tinggalkan Pesan</p>
						</div>


						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Nama Anda...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Email Anda...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subjek...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Pesan..."></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Kirim</button>
							</form>
						</div>

						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Hubungi Kami</h3>
								<p><i class="fa fa-pencil"></i>JARC<span>93116</span> <span>BTN Lepo-lepo Mas, Baruga</span><span>Indonesia</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: 0811-4092-584 </p>
								<p><i class="fa fa-envelope"></i>natalis.ransi@gmail.com</p>
							</address>
						</div>

					</div>
				</div>
			</section>
			<!-- end Contact section -->

			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>

		</main>

		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<!--div class="wow animated fadeInDown">
							<p>newsletter signup</p>
							<p>Get Cool Stuff! We hate spam!</p>
						</div>
						<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane fa-lg"></i>
								</button>
							</div>
						</form-->
						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
							</ul>
						</div>

						<p>Copyright &copy; <?php echo date('Y');?> Design and Developed By <a href="#">JARC TEAM</a></p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Essential jQuery Plugins
		================================================== -->
    <script>
      function initMap() {

        var uluru = {lat: -4.028019, lng: 122.503145};
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjWUiLBzdvXRLgEwvaih9cpahVtyADzB4&callback=initMap">
    </script>
		<!-- Main jQuery -->
        <script src="<?php echo base_url();?>/assets/baru/js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?php echo base_url();?>/assets/baru/js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?php echo base_url();?>/assets/baru/js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?php echo base_url();?>/assets/baru/js/jquery.fancybox.pack.js"></script>

		<!-- Owl Carousel -->
        <script src="<?php echo base_url();?>/assets/baru/js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="<?php echo base_url();?>/assets/baru/js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="<?php echo base_url();?>/assets/baru/js/jquery.slitslider.js"></script>
        <script src="<?php echo base_url();?>/assets/baru/js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="<?php echo base_url();?>/assets/baru/js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="<?php echo base_url();?>/assets/baru/js/main.js"></script>
    </body>
</html>
