<?php
	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	include '../database_connector.php';

if (isset($_POST['reset']))
{	
	$email = $_POST['email'];
	$result = mysqli_query($koneksi, "SELECT * FROM `peserta` WHERE emailteam = '$email'");

	if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$code = uniqid(true);
		$query = mysqli_query($koneksi, "INSERT INTO otp(code, email) VALUES('$code', '$email')");

		if (!$query) {
			exit("Error");
		}

		//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
		    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		    $mail->isSMTP();                                            //Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		    $mail->Username   = 'emailku@gmail.com';                     //SMTP username
		    $mail->Password   = 'inipasswordku';                               //SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		    //Recipients
		    $mail->setFrom('txkomputer1@gmail.com', 'ARCAVIDIA');
		    $mail->addAddress("$email");     //Add a recipient
		    $mail->addReplyTo('no-reply@gmail.com', 'NO Reply');

		    //Content
		    $url = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER['PHP_SELF'])."/resetpassword.php?code=$code";
		    $mail->isHTML(true);                                  //Set email format to HTML
		    $mail->Subject = 'Reset Password Akun ARCAVIDIA';
		    $mail->Body    = "<h1>Kamu mencoba melakukan reset password</h1>
		    				Klik <a href='$url'>di sini</a> untuk melakukannya";
		    $mail->AltBody = 'Reset Password Akun ARCAVIDIA';

		    $mail->send();
		    echo "
				<script>
					alert('Link Reset Password Berhasil Terkirim, Silakan Cek Email Anda!');
					window.location.href='index.php';
				</script>
				";
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
	else
	{
		echo "
		<script>
			alert('Tidak ada akun yang cocok!');
		</script>
		";
	}
}
?>