<?php 

require_once('lib/mail/PHPMailerAutoload.php');

$mail = new PHPMailer();





function kotak_saran($nama,$email,$telp,$message,$dest)

{
		$body = "".$message."<p>Nomor telpon saya : ".$telp."</p>";

		$mail = $GLOBALS['mail'];

		$mail->isSMTP();

		$mail->SMTPDebug = 0;

		$mail->SMTPAuth = true;

		$mail->Port 	= 587;  

		



		//penerima//

		$mail->Host = 'mail.jualkardus1box.com';  

		$mail->Username = 'pip@jualkardus1box.com';        

        $mail->Password = 'Sepatan00!1';  

		

		

		$mail->From = $email;

		$mail->FromName = $nama."(".$email.")";

		$mail->AddReplyTo($email, $nama);

		$mail->addAddress($dest,"Marketing");

		$mail->Subject="Kotak Saran";

		$mail->MsgHTML($body);



		if(!$mail->send()) {

			$res['email'] = 'gagal';

		} else {

			$res['email'] = 'terkirim';

		}

		return $res;

}



function penawaran($nama,$email,$telp,$kardus,$p,$l,$t,$warna,$jumlah,$dest)

{	

		$body = "<strong><h2>Berikut adalah permintaan harga dari customer:</strong></h2><p></p>

				Nama 	:".$nama."<p></p>

				No Telp	: ".$telp."<p></p>

				Kardus 	: Kardus ".$kardus."<p></p>

				Warna 	: ".$warna."<p></p>

				Ukuran 	: ".$p." x ".$l." x ".$t."<p></p>

				Jumlah 	: ".$jumlah." Buah Kardus <p></p>";

		$mail = $GLOBALS['mail'];

		$mail->isSMTP();

		$mail->SMTPDebug = 0;

		$mail->SMTPAuth = true;

		$mail->Port 	= 587; 



		//penerima//

		$mail->Host = 'mail.jualkardus1box.com';  

		$mail->Username = 'pip@jualkardus1box.com';        

        $mail->Password = 'Sepatan00!1';  

		



		$mail->From = $email;

		$mail->FromName = $nama."(".$email.")";

		$mail->AddReplyTo($email, $nama);

		$mail->addAddress($dest,"Marketing");

		$mail->Subject="PERMINTAAN HARGA";

		$mail->MsgHTML($body);



		if(!$mail->send()) {

			$res['email'] = 'gagal';

		} else {

			$res['email'] = 'terkirim';

		}

		return $res;

}	



?>