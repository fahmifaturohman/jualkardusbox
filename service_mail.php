<?php 

include 'send_mail.php';

$aksi = $_GET['aksi'];



if($aksi == "kotak_saran")

{

	$nama 		= $_POST['nama'];

	$email 		= $_POST['email'];

	$telp 	= $_POST['telp'];

	$message 	= $_POST['message'];



	$query = kotak_saran($nama,$email,$telp,$message,"emailtujuankita@gmail.com");





	if($query['email'] == "terkirim")

	{

		$data['hasil'] 	= 1;

		$data['status'] = "berhasil";

		$data['aksi'] 	= "kotak_saran";

	}

	else

	{

		$data['hasil'] 	= 0;

		$data['status'] = "gagal";

		$data['aksi'] 	= "kotak_saran";

	}

	echo json_encode($data);



}



else if ($aksi == "penawaran")

{

	$nama 	= $_POST['nama'];

	$email	= $_POST['email'];

	$telp	= $_POST['telp'];

	$kardus = $_POST['kardus'];

	$p 		= $_POST['panjang'];

	$l 		= $_POST['lebar'];

	$t 		= $_POST['tinggi'];

	$warna 	= $_POST['warna'];

	$jumlah	= $_POST['jumlah'];

	$query = penawaran($nama,$email,$telp,$kardus,$p,$l,$t,$warna,$jumlah,"emailtujuankita@gmail.com");



	if($query['email'] == "terkirim")

	{

		$data['hasil'] 	= 1;

		$data['status'] = "berhasil";

		$data['aksi'] 	= "penawaran";

	}

	else

	{

		$data['hasil'] 	= 0;

		$data['status'] = "gagal";

		$data['aksi'] 	= "penawaran";

	}

	echo json_encode($data);

}



?>