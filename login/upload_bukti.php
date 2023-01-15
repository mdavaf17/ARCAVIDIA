<?php 

session_start();

$competition = $_SESSION['competition'];
$teamname = $_SESSION['teamname'];
if(!isset($_SESSION['competition']) && !isset($_SESSION['teamname'])) {
	header('Location: index.php');
}
include '../database_connector.php';

if (isset($_POST['upload'])) {;
	$bukti = $_POST['bukti'];

	$result = mysqli_query($koneksi, "SELECT bukti FROM peserta WHERE teamname = '$teamname'");

	if (mysqli_fetch_assoc($result)) {
		
		$query="UPDATE peserta SET bukti = '$bukti' WHERE teamname = '$teamname'";
		$result_update =mysqli_query($koneksi,$query);

		if($result_update) {

			$status_query="UPDATE peserta SET status = 1 WHERE teamname = '$teamname'";
			$status_update = mysqli_query($koneksi,$status_query);
			if ($status_update) {
				echo "
				<script>
					alert('Berhasil Mengirim Bukti Pembayaran, Kami Akan Segera Memverifikasi!');
					window.location.href='dashboardpeserta.php';
				</script>";
			}
			else {
				echo "
				<script>
					alert('Gagal Mengubah Status');
				</script>";
			}
			
		}
		else {
			echo "
			<script>
				alert('Gagal Mengirim Bukti Pembayaran');
			</script>";
		return false;
		}
	}
	else {
		echo "
		<script>
			alert('Team Tidak Ditemukan');
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Bukti Pembayaran | ARCAVIDIA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../img/logo.png">

  <link
  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
				<div class="img d-flex align-items-center justify-content-center" style="background-image: url(img/logo.png);"></div>
		      	<h3 class="text-center mb-0">Bukti Pembayaran</h3>
		      	<p class="text-center" style="color: #CCC;">Masukkan <span style="color: #2bf8ff;">LINK</span> Bukti Pembayaran</p>
				
				<form method="POST" class="login-form" enctype="multipart/form-data">
		      		<div class="form-group">
		      			<input type="text" name="bukti" class="form-control" placeholder="LINK STRUK (gdrive, dll)" required>
		      		</div>
		      		         
	            <div class="form-group">
	            	<button type="submit" name="upload" class="btn form-control btn-primary rounded submit px-3">Submit</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>