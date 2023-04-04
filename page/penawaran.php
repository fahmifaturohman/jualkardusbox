<section class="banner-area relative">	

	<div class="overlay overlay-bg"></div>

	<div class="container">

		<div class="row d-flex align-items-center justify-content-center">

			<div class="about-content col-lg-12">

				<h1 class="text-white">Permintaan Harga</h1>	

				<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  

				<a href="index.php?page=pemesanan">Permintaan Harga</a></p>

			</div>											

		</div>

	</div>

</section>





<section class="model-area section-gap" id="cars">

	<div class="container">

		<div class="row d-flex justify-content-center pb-40">

			<div class="col-md-8 pb-40 header-text">

				<h1 class="text-center pb-10">PERMINTAAN HARGA KARDUS MELALUI EMAIL</h1>

				<p class="text-center">isi form dibawah ini untuk melakukan permintaan harga</p>

			</div>

		</div>



		<div class="row d-flex justify-content-center pb-40">

			<div class="col-lg-8">

				<div class="pesan-gagal alert alert-danger" style="display: none;">

					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

					Pesan gagal terkirim 

				</div>

				<div class="pesan-berhasil alert alert-primary" style="display: none;">

					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

					Penawaran berhasil terkirim

				</div>

			</div>

			<div class="col-md-8 pb-40 header-text">

			<form id="form-penawaran" role="form" method="POST" enctype="multipart/form-data" class="form-control">

				<div class="col-lg-12" style="padding: 50px">

					<div>

						<label class="control-label">NAMA</label>

						<input type="text" name="nama" id="nama" class="form-control" required="" maxlength="20">

					</div>

					<p></p>

					<div>

						<label class="control-label">Email</label>

						<input type="email" name="email" id="email" class="form-control" required="" maxlength="50">

					</div>

					<p></p>

					<div>

						<label class="control-label">TELEPON</label>

						<input type="text" name="telp" id="telp" class="form-control" required="" maxlength="13"  onkeypress="return nomor(event)">

					</div>

					<p></p>

					<div>

						<label class="control-label">PILIH KARDUS</label>

						<select class="form-control" name="kardus" id="kardus" required="">

								<option value="Arsip">Kardus Arsip</option>

								<option value="Partisi">Kardus Partisi</option>

								<option value="Oleh-oleh">Kardus Oleh-oleh</option>

								<option value="Sepatu">Kardus Sepatu</option>

								<option value="Makanan">Kardus Makanan</option>

								<option value="Standard">Kardus Standard</option>

								<option value="Lainnya">Kardus Lainnya</option>


						</select>

					</div>

					<p></p>

					<div>						

						<label class="control-label">UKURAN (mm) Panjang x Lebar x Tinggi</label>

						<div class="row col-lg-12">

						<input type="text" name="panjang" id="panjang" class="form-control col-lg-2" required="" maxlength="7" onkeypress="return nomor(event)">

						<span class="col-lg-1"></span>

						<input type="text" name="lebar" id="lebar" class="form-control col-lg-2" required="" maxlength="7" onkeypress="return nomor(event)">

						<span class="col-lg-1"></span>

						<input type="text" name="tinggi" id="tinggi" class="form-control col-lg-2" required="" maxlength="7" onkeypress="return nomor(event)">

						</div>

					</div>

					<p></p>

					<div>

						<label class="control-label">PILIH WARNA</label>

						<select class="form-control col-lg-8" name="warna" id="warna" required="">

								<option value="coklat">Coklat</option>

								<option value="putih">Putih</option>

						</select>

					</div>

					<p></p>

					<div>

						<label class="control-label">JUMLAH</label>

						<input type="text" name="jumlah" id="jumlah" class="form-control col-lg-2" required="" maxlength="10" onkeypress="return nomor(event)">

					</div>

					<p></p>					

					<div>

						<button class="primary-btn text-uppercase">PENAWARAN</button>

					</div>

				</div>		

			</form>

			</div>

		</div>

	</div>	

</section>





<script type="text/javascript">

	function nomor(evt)

	{

	        var charCode = (evt.which)? evt.which : evt.keyCode;

	          if(charCode > 31 && (charCode <48 || charCode >57) )

	              return false; 

	              return true;

	}

	function loading(text){

		$('body').loadingModal({

				text: text, 

				position: 'auto',

				backgroundColor: 'rgb(0, 0, 0)',

				animation: 'threeBounce'

		});

	}



	$(document).ready(function() {

		$('#form-penawaran').submit(function(e) {

			e.preventDefault();

			$('.pesan-gagal').css({display: 'none'});

			$('.pesan-berhasil').css({display: 'none'});

			loading("Sedang mengirim penawaran...");

			$.ajax({

				url: "service_mail.php?aksi=penawaran",

                type: "POST",

                data: $('#form-penawaran').serialize(),

                dataType: "html",

                success: function(response){

                    var data = JSON.parse(response);

                    if (data.hasil == 1){                    	

                    	$('body').loadingModal('destroy');

                    	$('#form-penawaran')[0].reset();

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