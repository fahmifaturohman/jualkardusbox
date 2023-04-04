<?php 

		$page 	= !empty($_GET['page']) ? $_GET['page'] : "home";
		$sub	= !empty($_GET['sub'])  ? $_GET['sub']  : "view";

		$link_home 		= "home";
		$link_tentang 	= "tentang";
		$link_kontak 	= "kontak";
		$link_permintaan= "permintaan";
		$link_faq		= "faq";

		$link_arsip 	= "produk/arsip";
		$link_partisi 	= "produk/partisi";
		$link_oleh	 	= "produk/oleh-oleh";
		$link_sepatu	= "produk/sepatu";
		$link_makanan 	= "produk/makanan";
		$link_standard 	= "produk/standard";

?>





<!DOCTYPE html>

<html lang="eng" class="no-js">

<head>	

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="img/logo/new_pip.ico">

	<!-- Author Meta -->

	<meta name="author" content="codepixer">

	<meta name="description" content="pabrik kardus box dan karton box melayani jakarta, tangerang dan seluruh indonesia">

	<meta name="keywords" content="kardus, kardus box, karton box, jual kardus, jual karton, jual kardus box murah, karton box murah, kardus box custom, kardus tangerang">

	<meta charset="UTF-8">

	<title>Kardus Box</title>

	<base href="http://jualkardus-box.com/">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

	<link rel="stylesheet" href="css/linearicons.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/nice-select.css">					

	<link rel="stylesheet" href="css/animate.min.css">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			

	<link rel="stylesheet" href="css/owl.carousel.css">

	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="css/full-slider.css">

	<link rel="stylesheet" href="lib/loading-modal/css/jquery.loadingModal.css">

	<script src="js/vendor/jquery-2.2.4.min.js"></script>



</head>

<body style="background: #f5f5f5">



	<header id="header" class="site-header">

		<div class="container">

		<div class="row align-items-center justify-content-between d-flex">

			<div id="logo">

			<a href="index.php"><img src="img/logo/logo_new_pip.png" alt="kardus box" title="karton box" /></a>

			</div>



			<nav id="nav-menu-container">

			<ul class="nav-menu">

				<li><a href="<?php echo $link_home; ?>" class="active">Home</a></li>

				<li class="menu-has-children"><a href="">Produk</a>

					<ul>

							<li><a href="<?php  echo $link_arsip;?>">Kardus Arsip</a></li>

							<li><a href="<?php  echo $link_partisi;?>">Kardus Partisi</a></li>

							<li><a href="<?php  echo $link_oleh;?>">Kardus Oleh-oleh</a></li>	

							<li><a href="<?php  echo $link_makanan;?>">Kardus Makanan</a></li>

							<li><a href="<?php  echo $link_sepatu;?>">Kardus Sepatu</a></li>

							<li><a href="<?php  echo $link_standard;?>">Kardus Standard</a></li>

					</ul>

				</li>

				<li class="active"><a href="<?php echo $link_tentang; ?>">Tentang Kami</a></li>

				<li><a href="<?php echo $link_kontak; ?>">Kontak</a></li>
				
				<li><a href="<?php echo $link_permintaan; ?>">Permintaan Harga</a></li>

				<li><a href="<?php echo $link_faq; ?>">FAQ</a></li>		

			</ul>

			</nav>		

		</div>

		</div>

	</header>



	<main class="site-main">

    <section class="section">





		<?php 

		switch ($page) {

			case ('home'):

				include_once('page/home.php');

				break;



			case ('tentang'):

				include_once('page/tentang.php');

				break;

			

			case ('kontak'):

				include_once('page/kontak.php');

				break;

			

			case ('faq'):

				include_once('page/faq.php');

				break;



			case ('permintaan'):

				include_once('page/penawaran.php');

				break;



			case ('produk'):

				if($sub == "arsip") 	{ include_once('page/produk/arsip.php'); }

				if($sub == "partisi") 	{ include_once('page/produk/partisi.php'); }

				if($sub == "oleh-oleh") 	{ include_once('page/produk/oleh-oleh.php'); }

				if($sub == "sepatu") 	{ include_once('page/produk/sepatu.php'); }

				if($sub == "makanan") 	{ include_once('page/produk/makanan.php'); }

				if($sub == "standard") 	{ include_once('page/produk/standard.php'); }

				break;

			case('arsip'):
				include_once('page/produk/arsip.php');	
				break;		

			

			

			default:

				include_once('page/notfound.php');

				break;

		}

		?>



	</section>

	</main>





	<!-- start footer Area -->		

	<footer class="site-footer footer-area section-gap">

		<div class="container">

			<div class="row">

				<div class="col-lg-2 col-md-6 col-sm-6">

					<div class="single-footer-widget">

						<h6>MENU</h6>

						<ul >

							<li><a href="<?php echo $link_home; ?>">Home</a></li>

							<li><a href="<?php echo $link_tentang; ?>">Tentang Kami</a></li>							

							<li><a href="<?php echo $link_kontak; ?>">Kontak</a></li>	
						</ul>								

					</div>

				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">

					<div class="single-footer-widget">

						<h6>Produk</h6>

						<ul>

							<li><a href="<?php echo $link_arsip; ?>">Kardus Arsip</a></li>

							<li><a href="<?php echo $link_partisi; ?>">Kardus Partisi</a></li>

							<li><a href="<?php echo $link_oleh; ?>">Kardus Oleh-oleh</a></li>	

							<li><a href="<?php echo $link_makanan; ?>">Kardus Makanan</a></li>

							<li><a href="<?php echo $link_sepatu; ?>">Kardus Sepatu</a></li>

							<li><a href="<?php echo $link_standard; ?>">Kardus Standard</a></li>							

						</ul>								

					</div>

				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">

					<div class="single-footer-widget">

						<h6>Penawaran</h6>

						<ul>

							<li><a href="<?php echo $link_faq; ?>">FAQ</a></li>

							<li><a href="<?php echo $link_permintaan; ?>">Permintaan Harga</a></li>

						</ul>								

					</div>

				</div>												

				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">

					<div class="single-footer-widget">

						<h6>Follow Us</h6>

						<p style="color:#fff">Sosial Media</p>
						<ul style="color: white">

							<li><a href="https://mbasic.facebook.com/setiaditeddynugraha/?_e_pi_=7%2CPAGE_ID10%2C7075532269" target="_blank"><img src="img/pendukung/fb.png" width="20" height="20"> Facebook</li></a>

							<li><a href="https://www.instagram.com/primaboxp/" target="_blank"><img src="img/pendukung/ig.ico" width="20" height="20"> Instagram</li></a>

						</ul>	

					</div>

				</div>							

				<div class="col-lg-3 col-md-6 col-sm-6 social-widget">

					<div class="single-footer-widget">

						<h6>Informasi</h6>

						<ul style="color: white">
							
							<li><img src="img/pendukung/wa.png" width="20" height="20">  081281893292</li>

							<li><img src="img/pendukung/wa.png" width="20" height="20">  082112289563</li>

							<li><img src="img/pendukung/wa.png" width="20" height="20">  081381199098</li>

							<li><img src="img/pendukung/phone.png" width="20" height="20"> 021 5937 1148</li>

							<li><img src="img/pendukung/phone.png" width="20" height="20"> 021 5937 1149</li>

							<li><img src="img/pendukung/mobile-phone.png" width="20" height="20"> 087786083460</li>
							

							<li><img src="img/pendukung/gmail.png" width="20" height="20"> marketing@jualkardus-box.com</li>
						</ul>	

					</div>

				</div>		

				<p class="mt-50 mx-auto footer-text col-lg-12" style="color:#fff">

					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Prima Intibox Perkasa

			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</p>											

			</div>

		</div>

	</footer>



		<script type="text/javascript">

			$(document).ready(function($) {

				$('.btn-penawaran').click(function(event) {

					setTimeout(function(){window.location='permintaan';}, 1);

				});	

			});

		</script>	

		<script src="js/vendor/jquery-2.2.4.min.js"></script>

		<script src="lib/loading-modal/js/jquery.loadingModal.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<script src="js/vendor/bootstrap.min.js"></script>			

		

		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			

		<script src="js/easing.min.js"></script>			

		<script src="js/hoverIntent.js"></script>

		<script src="js/superfish.min.js"></script>	

		<script src="js/jquery.ajaxchimp.min.js"></script>

		<script src="js/jquery.magnific-popup.min.js"></script>	

		<script src="js/owl.carousel.min.js"></script>			

		<script src="js/jquery.sticky.js"></script>

		<script src="js/jquery.nice-select.min.js"></script>	

		<script src="js/waypoints.min.js"></script>

		<script src="js/jquery.counterup.min.js"></script>					

		<script src="js/parallax.min.js"></script>		

		<script src="js/mail-script.js"></script>	

		<script src="js/main.js"></script>	

</body>

</html>







