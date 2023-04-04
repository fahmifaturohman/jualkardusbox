

<section class="banner-area relative">	

	<div class="overlay overlay-bg"></div>

	<div class="container">

		<div class="row d-flex align-items-center justify-content-center">

			<div class="about-content col-lg-12">

				<h1 class="text-white">Kontak</h1>	

				<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  

				<a href="index.php?page=kontak">Kontak</a></p>

			</div>											

		</div>

	</div>

</section>





<section class="contact-page-area section-gap">

<div class="container">

	<div class="row">

		<div class="map-wrap" id="kontak-map" style="width:100%;height:300px"></div>

		<div class="col-lg-12">

			<div class="pesan-gagal alert alert-danger" style="display: none">

				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

				Gagal mengirim pesan, silahkan coba lagi

			</div>

			<div class="pesan-berhasil alert alert-primary" style="display: none">

				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

				Pesan berhasil terkirim 

			</div>

		</div>



		<div class="col-lg-4 d-flex flex-column address-wrap">

			<div class="single-contact-address d-flex flex-row">

				<div class="icon">

				<span class="lnr lnr-home"></span>

				</div>

				<div class="contact-details">

					<h5>Tangerang, Indonesia</h5>

					<p>Jln. Kedaung Barat No.7, Sepatan Timur</p>

				</div>

			</div>

			<div class="single-contact-address d-flex flex-row">

				<div class="icon">

				<span class="lnr lnr-phone-handset"></span>

				</div>

				<div class="contact-details">

					<h5>021 5937 1148</h5>

					<h5>021 5937 1149</h5>

					<p>Senin - Jumat : 08:00 – 17:00 WIB</p>

				</div>

			</div>

			<div class="single-contact-address d-flex flex-row">

				<div class="icon">

				<span class="lnr lnr-envelope"></span>

				</div>

				<div class="contact-details">

					<h5>marketing@jualkardus-box.com</h5>

					<p>Kotak saran</p>

				</div>

			</div>														

		</div>

		<div class="col-lg-8">

			<form class="form-area" id="form-saran" role="form" method="POST" enctype="multipart/form-data">

				<div class="row">	

					<div class="col-lg-6 form-group">

						<input type="text" name="nama" id="nama"  class="common-input mb-20 form-control" required="" placeholder="Masukan nama anda">					

						<input type="email" name="email" id="email"  class="common-input mb-20 form-control" required="" placeholder="Masukan email anda">



						<input type="text" name="telp" id="telp"  class="common-input mb-20 form-control" required="" placeholder="Masukan No Telp anda" onkeypress="return nomor(event)">

						<div class="mt-20 alert-msg" style="text-align: left;"></div>

					</div>

					<div class="col-lg-6 form-group">

						<textarea class="common-textarea form-control" name="message" id="message" placeholder="Messege" required=""></textarea><br>

						<p><button class="primary-btn text-uppercase">Kirim Pesan</button></p>	

				</div>

			</form>	

		</div>

	</div>

</div>	

</section>



<script>

	function myMap() {

			var mapCanvas = document.getElementById("kontak-map");

			var myCenter = new google.maps.LatLng(-6.122287,106.617588); 

			var mapOptions = {center: myCenter, zoom: 15};

			var map = new google.maps.Map(mapCanvas,mapOptions);

			var marker = new google.maps.Marker({

			position: myCenter,

			animation: google.maps.Animation.BOUNCE

			});

			marker.setMap(map);

	}



	function loading(text){

		$('body').loadingModal({

				text: text, 

				position: 'auto',

				backgroundColor: 'rgb(0, 0, 0)',

				animation: 'threeBounce'

		});

	}


	function nomor(evt)

	{

	        var charCode = (evt.which)? evt.which : evt.keyCode;

	          if(charCode > 31 && (charCode <48 || charCode >57) )

	              return false; 

	              return true;

	}




	$(document).ready(function() {



		$('#form-saran').submit(function(e) {

			e.preventDefault();

			$('.pesan-berhasil').css({display: 'none'});

			$('.pesan-gagal').css({display: 'none'});

			loading("Sedang mengirim pesan...");

			

			$.ajax({

				url: "service_mail.php?aksi=kotak_saran",

                type: "POST",

                data: $('#form-saran').serialize(),

                dataType: "html",

                success: function(response){

                    var data = JSON.parse(response);

                    if (data.hasil == 1){                    	

                    	$('body').loadingModal('destroy');

                    	$('#form-saran')[0].reset();

                    	$('.pesan-berhasil').css({

                    		display: 'block'

                    	});

                    	$('.pesan-berhasil').attr("tabindex",-1).focus();

                    }

                    else {

                    	$('body').loadingModal('destroy');

                    	$('.pesan-gagal').css({

                    		display: 'block'

                    	});

                    	$('.pesan-gagal').attr("tabindex",-1).focus();                    		

                    }



                }

			});	

		});

	});

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxjK_6pUw260KFjCdl5pW3htsa9X8lu-g&callback=myMap"></script>