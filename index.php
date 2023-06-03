<?php 
    session_start();
	error_reporting(1);
	// Jika tombol submit ditekan
?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>SIDEPLACE - Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="mdi-font/css/material-design-iconic-font.min.css">
		</head>
		<body>

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
									<li>
									Weekdays Hours
									</li>
				  					<li>  
				  					Mon-Fri: 14.30 - 23.00
				  					</li>
									<li>
									Weekend Hours
									</li>
				  					<li>
				  					Sat-Sun: 15.00 - 00.00
				  					</li>
				  					<li>
				  						<a href="tel:(+628) 963 008 259">(+628) 963 008 259</a>
				  					</li>				  					
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
					<?php 

include('koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM brand WHERE id = '1'");
$brand = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($brand as $brand) : ?>

    

   
				<div id="logo">
				<h3 style="color:white;"><img src="img/cok1.png" width="100"alt="cok1"><?php echo $brand['nama'];?></h3>
				</div>
				<?php endforeach; ?>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="#about">About</a></li>
				          <li><a href="#menu">Menu</a></li>
				          <li><a href="#review">Review</a></li>
				          <li><a href="#blog">Blog</a></li>

						  <?php if(isset($_SESSION['login_user']) && $_SESSION['login_user']== 'admin') //check if user is a admin and display drop item
    {
    ?> 
						  <li><a href="logout.php" class="btn btn-danger">Log Out</a></li>
						  <li><a href="fitur_admin.php" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Fitur Admin</a></li>
						  <li><a href="daftar_menu.php"><i class="fa fa-file-o" aria-hidden="true"></i> +Manage Menu</a></li>
						  <?php  }elseif(isset($_SESSION['login_user']) && $_SESSION['login_user']== 'user') // if user is not logged in then display these buttons
                                {
                                    ?>
	<li><a href="logout.php" class="btn btn-danger">Log Out</a></li> 
	<li><a href="menu_pembeli.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Order</a></li>
	<?php  }elseif(isset($_SESSION['login_user']) && $_SESSION['login_user']== 'kasir') // if user is not logged in then display these buttons
                                {
									?>
									<li><a href="logout.php" class="btn btn-danger">Log Out</a></li>
						<li><a href="daftar_pesanan.php" class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Order History</a></li>
                                    
						  <?php  }else{ // if user is not logged in then display these buttons?>
							<li><a href="login.php" class="btn btn-primary">Login</a></li>
							<li><a href="signup.php" class="btn btn-info">Signup</a></li>
							
							<?php } ?> 
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
					<?php 

include('koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM brand WHERE id = '1'");
$brand = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($brand as $brand) : ?>
						<div class="banner-content col-lg-7 mt-1">
							<h6 class="text-white text-uppercase">WELCOME TO</h6>
							<h1>
							<?php echo $brand['nama'];?> <br>
								Coffee Nikmat		
							</h1>
							<?php if(isset($_SESSION['login_user']) && $_SESSION['login_user']== 'user') //check if user is a admin and display drop item
    {
    ?>
							<a href="menu_pembeli.php" class="primary-btn text-uppercase">Buy Now</a>
							<?php  } elseif(isset($_SESSION['login_user']) && $_SESSION['login_user']== 'admin') // if user is not logged in then display these buttons
                                { 
									?>
									<a href="daftar_menu.php" class="primary-btn text-uppercase">Manage Menu</a>
									<?php }else{ ?>
										<a href="login.php" class="primary-btn text-uppercase">Get Started</a>
									<?php } ?>

						</div>
						<?php endforeach; ?>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start video-sec Area -->						
						<div class="col-lg-6 video-left">
							<h6>KOPI.CANDU</h6>
							<h1>SIDEPLACE <br>
							Food & Drink</h1>
							
							<p>
							Kopi+senja ditempat koedai kopi yang nyaman dengan sajian kopi yang nikmat, dijamin bisa membuat masalah kamu menghilang. Penasaran senyaman apa kedai kopi kami? yuk datang berkunjung ke jalan Bunga Asoka, cek instagramnya ya di @sideplace.co
							</p>
							
						</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->
			
			<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">MENU SIDEPLACE</h1>
								<p>Good Day Start With Menu and You</p>
							</div>
						</div>
					</div>						
					<div class="row">
          <?php 

include('koneksi.php');

$query = mysqli_query($koneksi, 'SELECT * FROM produk');
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($result as $result) : ?>
						<div class="col-lg-4">
							<div class="single-menu">
							<div class="title-div justify-content-between d-flex">
              <img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top" alt="..." style="width:290px; height:200px; border-radius:5px;">
</div>
								<div class="title-div justify-content-between d-flex">
									<h4><?php echo $result['nama_menu'] ?></h4>
									<p class="price float-right">
                  <strong>Rp.</strong> <?php echo number_format($result['harga']); ?>
									</p>
								</div>
								<!-- <p>
									Usage of the Internet is becoming more common due to rapid advance.
								</p>								 -->
							</div>
						</div>
            <?php endforeach; ?>
															
					</div>
				</div>	
			</section>
			<!-- End menu Area -->
			
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<a href="img/pic1.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/pic1.jpg" alt="">
							</a>	
							<a href="img/pic2.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/pic2.jpg" alt="">
							</a>	
						</div>
						<div class="col-lg-8">
							<a href="img/pic3.jpeg" class="img-pop-home">
								<img class="img-fluid" src="img/pic3.jpeg" alt="">
							</a>	
							<div class="row">
								<div class="col-lg-6">
									<a href="img/pic4.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/pic4.jpg" alt="">
									</a>	
								</div>
								<div class="col-lg-6">
									<a href="img/pic5.jpg" class="img-pop-home">
										<img class="img-fluid" src="img/pic5.jpg" alt="">
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Setelah membeli, jangan lupa untuk memberikan testimoni positif.</h1>
								
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-review">
						
							<div class="title d-flex flex-row">
								
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Kenyamanan Tempat
							</p>
						</div>	
						<div class="col-lg-6 col-md-6 single-review">
							
							<div class="title d-flex flex-row">
								
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>
							</div>
							<p>
								Bersih & Nyaman
							</p>
						</div>	
					</div>
					<div class="row counter-row">
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter"><?php
                                    $pelanggan = mysqli_query($koneksi,"select * from user WHERE status = 'user'");
                                    echo mysqli_num_rows($pelanggan);
                                    ?></h1>
							<p>Total Users</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter"><?php
                                    $pelanggan = mysqli_query($koneksi,"select * from produk WHERE jenis_menu = 'Makanan'");
                                    echo mysqli_num_rows($pelanggan);
                                    ?></h1>
							<p>Menu Makanan</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter"><?php
                                    $pelanggan = mysqli_query($koneksi,"select * from produk WHERE jenis_menu = 'Minuman'");
                                    echo mysqli_num_rows($pelanggan);
                                    ?></h1>
							<p>Menu Minuman</p>
						</div>
						<div class="col-lg-3 col-md-6 single-counter">
							<h1 class="counter"><?php
                                    $pelanggan = mysqli_query($koneksi,"select * from pemesanan WHERE status = 'berhasil'");
                                    echo mysqli_num_rows($pelanggan);
                                    ?></h1>
							<p>Total Transaksi</p>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End review Area -->
			
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b1.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/b2.jpg" alt="">
							<ul class="post-tags">
								<li><a href="#">Travel</a></li>
								<li><a href="#">Life Style</a></li>
							</ul>
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>LOCATION</h6>
								<p>Stay update with our latest</p>
								<div class="card">
									<div class="card-body">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1128299672637!2d98.6224816!3d3.5614850999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f87647ae3df%3A0xec6fe33bbd1ba38c!2sSide%20house!5e0!3m2!1sid!2sid!4v1678336947948!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
							</div>		
						</div>

						<div class="row mt-2">
						<div class="col-lg-12">
						<h6>Feedback Forms</h6>
								<p>Send us a feedback</p>
								<form action="contact/form-contact.php" method="POST">
            <div class="row inputBox">
              <div class="col-md-6 form-group">
              <input id="nama" class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
              </div>
              <div class="col-md-6 form-group">
              <input id="email" class="form-control" type="email" name="email" placeholder="Email Anda" required>
              </div>
            </div>
            <div class="form-group">
            <input id="subject" class="form-control" type="text" name="subject" placeholder="Subjek Pesan" required>
            </div>
            <div class="form-group">
            <textarea maxlength="254" type="text" name="pesan" id="pesan" class="form-control" placeholder="Pesan Anda..." rows="4"></textarea>
            </div>
            <div class="text-center"><button class="btn btn-primary mt-2" name="send" type="submit">Send Message</button></div>
        </form> 
							</div>		
						</div>
						
					<div class="row mt-5">
					<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
								Coffee Shop  “SIDEPLACE” yang berlokasi di Jl. Bunga Asoka, Asam Kumbang, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20133

								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
SIDEPLACE &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by <a href="#" target="_blank">Kelompok KKN</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>			
						<div class="col-lg-6 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Find us on our instagram</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://instagram.com/sideplace.co?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram fa-3x"></i></a>
									
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>